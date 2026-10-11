<?php

namespace App\Services;

use App\Mail\PortfolioContact;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Throwable;

class ContactDelivery
{
    public function send(ContactMessage $contact): bool
    {
        if ($contact->status === 'sent') return true;

        try {
            $mailer = config('mail.default');
            if (! app()->environment('testing') && config("mail.mailers.$mailer.transport") !== 'smtp') {
                throw new RuntimeException('SMTP must be configured for contact delivery.');
            }
            Mail::to(config('portfolio.contact_email'))->send(new PortfolioContact($contact));
            $contact->update(['status' => 'sent', 'sent_at' => now()]);
            return true;
        } catch (Throwable $exception) {
            $contact->update(['status' => 'failed']);
            // Do not log message bodies, sender addresses or SMTP credentials.
            Log::warning('Portfolio contact transmission failed.', [
                'contact_id' => $contact->id,
                'exception_type' => get_class($exception),
            ]);
            return false;
        }
    }
}
