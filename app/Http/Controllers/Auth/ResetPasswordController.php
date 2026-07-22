@extends('layouts.app')

@section('title','Nouveau mot de passe')

@section('content')

<x-auth.reset-password-card
    :token="$token"/>

@endsection