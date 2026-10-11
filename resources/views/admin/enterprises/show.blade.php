@extends('layouts.app')
@section('title', 'Entreprise')
@section('content')
<h1>{{ $enterprise->name }}</h1><p>{{ $enterprise->legal_name }}</p><p>{{ $enterprise->email }} · {{ $enterprise->phone }}</p><p>{{ $enterprise->address }} · {{ $enterprise->city }} · {{ $enterprise->country }}</p><p>NIF : {{ $enterprise->nif }} · RCCM : {{ $enterprise->rccm }}</p><a href="{{ route('admin.enterprises.edit', $enterprise) }}">Modifier</a>
@endsection