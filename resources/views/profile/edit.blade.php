@extends('layouts.app')
@section('content')
<h1>Mon profil</h1>
@if (session('status'))<p role="status">Modifications enregistrées.</p>@endif
@if ($errors->any())<div role="alert">@foreach ($errors->all() as $error)<p>{{ $error }}</p>@endforeach</div>@endif
<section class="panel"><h2>Coordonnées</h2>
<form method="POST" action="{{ route('profile.update') }}">@csrf @method('PATCH')
<label for="name">Nom</label><input id="name" name="name" value="{{ old('name', $user->name) }}" required>
<label for="email">Adresse e-mail</label><input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required>
<button type="submit">Enregistrer</button></form></section>
<section class="panel"><h2>Mot de passe</h2>
<form method="POST" action="{{ route('password.update') }}">@csrf @method('PUT')
<label for="current_password">Mot de passe actuel</label><input id="current_password" name="current_password" type="password" autocomplete="current-password" required>
<label for="password">Nouveau mot de passe</label><input id="password" name="password" type="password" autocomplete="new-password" required>
<label for="password_confirmation">Confirmer le mot de passe</label><input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required>
<button type="submit">Modifier le mot de passe</button></form></section>
<section class="panel"><h2>Supprimer mon compte</h2><p>Cette suppression est définitive. Saisissez votre mot de passe pour confirmer.</p>
<form method="POST" action="{{ route('profile.destroy') }}">@csrf @method('DELETE')
<label for="delete_password">Mot de passe</label><input id="delete_password" name="password" type="password" autocomplete="current-password" required>
<button type="submit">Supprimer mon compte</button></form></section>
@endsection
