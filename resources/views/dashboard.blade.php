@extends('layouts.app')
@section('title', 'Tableau de bord')
@section('content')
<h1>Tableau de bord</h1><p>Bienvenue, {{ auth()->user()->name }}.</p><div class="actions"><a class="btn outline" href="{{ route('profile.edit') }}">Mon profil</a>@if(auth()->user()->hasRole('Super Admin'))<a class="btn primary" href="{{ route('admin.dashboard') }}">Administration</a>@endif</div>
@endsection
