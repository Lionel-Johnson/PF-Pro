<?php

namespace Tests\Feature;

use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_public_sections_and_updated_profile_are_visible(): void
    {
        $response = $this->get('/')->assertOk();
        foreach (['about','experience','services','portfolio','contact'] as $section) $response->assertSee('id="'.$section.'"', false);
        $response->assertSee('Libreville')->assertSee('14 septembre 2026')->assertSee('WordPress')->assertSee('data-server="true"', false);
    }

    public function test_only_active_services_are_published(): void
    {
        Service::create(['title'=>'Service visible', 'slug'=>'visible', 'is_active'=>true]);
        Service::create(['title'=>'Service masqué', 'slug'=>'hidden', 'is_active'=>false]);
        $this->get('/')->assertOk()->assertSee('Service visible')->assertDontSee('Service masqué');
    }

    public function test_admin_can_manage_services_and_enterprises(): void
    {
        $user = User::factory()->create();
        $user->assignRole(Role::create(['name'=>'Super Admin', 'guard_name'=>'web']));
        $this->actingAs($user);
        foreach (['admin.dashboard','admin.services.index','admin.services.create','admin.enterprises.index','admin.enterprises.create','admin.contacts.index'] as $route) $this->get(route($route))->assertOk();
        $this->post(route('admin.services.store'), ['title'=>'Test service','position'=>1,'is_active'=>1])->assertRedirect(route('admin.services.index'));
        $service = Service::firstOrFail();
        $this->get(route('admin.services.edit',$service))->assertOk();
        $this->put(route('admin.services.update',$service), ['title'=>'Updated service','position'=>2,'is_active'=>0])->assertRedirect();
        $this->delete(route('admin.services.destroy',$service))->assertRedirect();
        $this->assertSoftDeleted($service);
        $this->post(route('admin.enterprises.store'), ['name'=>'Test enterprise','is_active'=>1])->assertRedirect(route('admin.enterprises.index'));
        $enterprise = \App\Models\Enterprise::firstOrFail();
        $this->get(route('admin.enterprises.show',$enterprise))->assertOk();
        $this->get(route('admin.enterprises.edit',$enterprise))->assertOk();
        $this->put(route('admin.enterprises.update',$enterprise), ['name'=>'Updated enterprise','is_active'=>1])->assertRedirect();
        $this->delete(route('admin.enterprises.destroy',$enterprise))->assertRedirect();
        $this->assertSoftDeleted($enterprise);
    }
}
