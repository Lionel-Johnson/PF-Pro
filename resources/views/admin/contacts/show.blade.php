@extends('layouts.app')
@section('title', 'Détail du message')
@section('content')
<h1>{{ $contact->subject }}</h1><p>{{ $contact->name }} · {{ $contact->email }}</p><p class="message-body">{{ $contact->message }}</p><p>Transmission : {{ ['pending'=>'En attente','failed'=>'Échec','sent'=>'Transmis'][$contact->status] ?? $contact->status }}</p><div class="admin-actions"><a href="mailto:{{ $contact->email }}">Répondre par e-mail</a>@if($contact->status !== 'sent')<form method="post" action="{{ route('admin.contacts.retry', $contact) }}">@csrf<button class="btn primary" type="submit">Relancer la transmission</button></form>@endif<a href="{{ route('admin.contacts.index') }}">Retour aux messages</a></div>
@endsection
