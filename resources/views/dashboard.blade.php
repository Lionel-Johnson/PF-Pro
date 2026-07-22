@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<div class="container py-5">

    <h2>
        Tableau de bord
    </h2>

    <p>
        Bienvenue {{ auth()->user()->name }}
    </p>

</div>

@endsection