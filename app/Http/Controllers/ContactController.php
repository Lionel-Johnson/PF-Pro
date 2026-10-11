<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactMessage;
use App\Services\ContactDelivery;

class ContactController extends Controller
{
    public function store(ContactRequest $request, ContactDelivery $delivery)
    {
        $contact = ContactMessage::create($request->safe()->only(['name', 'email', 'subject', 'message']));
        $sent = $delivery->send($contact);
        $message = $sent
            ? 'Votre demande a été enregistrée et transmise par e-mail. Merci pour votre message.'
            : 'Votre demande est enregistrée, mais la transmission par e-mail est momentanément indisponible. Elle reste accessible au responsable du site.';

        if ($request->expectsJson()) {
            return response()->json(['status' => $sent ? 'sent' : 'saved', 'message' => $message], $sent ? 200 : 202);
        }

        return redirect(route('home').'#contact')->with('contact_status', $message);
    }
}
