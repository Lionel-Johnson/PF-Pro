@extends('layouts.front')

@section('title', 'Accueil')

@section('content')

    @include('front.home.hero')

    @include('front.components.services')

    @include('front.home.partners')

@endsection