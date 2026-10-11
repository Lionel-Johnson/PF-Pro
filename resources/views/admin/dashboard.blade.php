@extends('layouts.app')
@section('title', 'Administration')
@section('content')
<h1>Administration du portfolio</h1><div class="cards expertise-grid"><a class="card" href="{{ route('admin.contacts.index') }}"><h2>Messages</h2><p>Consulter les demandes et relancer les transmissions.</p></a><a class="card" href="{{ route('admin.services.index') }}"><h2>Services</h2><p>Créer, modifier et publier les domaines d’expertise.</p></a><a class="card" href="{{ route('admin.enterprises.index') }}"><h2>Entreprises</h2><p>Gérer les fiches entreprises.</p></a></div>
@endsection
