<?php

namespace Tests\Feature;

use App\Mail\PortfolioContact;
use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    private function payload(): array
    {
        return ['name' => 'Marie Test', 'email' => 'marie@example.com', 'subject' => 'Demande de contact', 'message' => 'Bonjour, pouvez-vous me recontacter ?', 'website' => ''];
    }

    public function test_valid_message_is_saved_and_transmitted(): void
    {
        Mail::fake();
        $this->postJson(route('contact.store'), $this->payload())->assertOk()->assertJsonPath('status', 'sent');
        $this->assertDatabaseHas('contact_messages', ['email' => 'marie@example.com', 'status' => 'sent']);
        Mail::assertSent(PortfolioContact::class, fn ($mail) => $mail->hasTo('lionelconcept1@gmail.com') && $mail->envelope()->replyTo[0]->address === 'marie@example.com');
    }

    public function test_invalid_data_and_honeypot_do_not_send_mail(): void
    {
        Mail::fake();
        $payload = $this->payload();
        $payload['email'] = 'invalid';
        $payload['website'] = 'spam';
        $this->postJson(route('contact.store'), $payload)->assertUnprocessable()->assertJsonValidationErrors(['email', 'website']);
        $this->assertDatabaseCount('contact_messages', 0);
        Mail::assertNothingSent();
    }

    public function test_smtp_failure_keeps_message_without_claiming_delivery(): void
    {
        Mail::shouldReceive('to')->once()->andThrow(new \RuntimeException('SMTP unavailable'));
        $this->postJson(route('contact.store'), $this->payload())->assertStatus(202)->assertJsonPath('status', 'saved');
        $this->assertDatabaseHas('contact_messages', ['status' => 'failed']);
    }

    public function test_non_smtp_driver_never_claims_production_delivery(): void
    {
        $this->app['env'] = 'production';
        config(['mail.default' => 'log']);
        $contact = ContactMessage::create($this->payload());
        $this->assertFalse(app(\App\Services\ContactDelivery::class)->send($contact));
        $this->assertSame('failed', $contact->fresh()->status);
    }

    public function test_submission_without_javascript_redirects_with_status(): void
    {
        Mail::fake();
        $this->post(route('contact.store'), $this->payload())->assertRedirect(route('home').'#contact')->assertSessionHas('contact_status');
    }

    public function test_contact_is_rate_limited(): void
    {
        Mail::fake();
        for ($i = 0; $i < 5; $i++) $this->postJson(route('contact.store'), $this->payload())->assertOk();
        $this->postJson(route('contact.store'), $this->payload())->assertStatus(429);
    }

    public function test_admin_messages_are_not_public(): void
    {
        $this->get(route('admin.contacts.index'))->assertRedirect(route('login'));
        $this->actingAs(User::factory()->create())->get(route('admin.contacts.index'))->assertForbidden();
    }

    public function test_admin_can_retry_failed_messages_without_resending_sent_messages(): void
    {
        Mail::fake();
        $user = User::factory()->create();
        $user->assignRole(Role::create(['name' => 'Super Admin', 'guard_name' => 'web']));
        $contact = ContactMessage::create($this->payload() + ['status' => 'failed']);
        $this->actingAs($user)->post(route('admin.contacts.retry', $contact))->assertRedirect();
        $this->post(route('admin.contacts.retry', $contact))->assertRedirect();
        Mail::assertSentCount(1);
        $this->assertSame('sent', $contact->fresh()->status);
    }
}
