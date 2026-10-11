<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Services\ContactDelivery;

class ContactMessageController extends Controller
{
    public function index()
    {
        return view('admin.contacts.index', ['messages' => ContactMessage::latest()->paginate(15)]);
    }

    public function show(ContactMessage $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function retry(ContactMessage $contact, ContactDelivery $delivery)
    {
        // Serialize retries so double-clicks cannot send the same saved message twice.
        $sent = \Illuminate\Support\Facades\DB::transaction(function () use ($contact, $delivery) {
            $locked = ContactMessage::whereKey($contact->id)->lockForUpdate()->firstOrFail();
            return $delivery->send($locked);
        });
        return back()->with('success', $sent ? 'Message transmis.' : 'Transmission indisponible. Vérifiez la configuration SMTP.');
    }
}
