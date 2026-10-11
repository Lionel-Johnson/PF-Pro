@extends('layouts.app')
@section('title', 'Créer')
@section('content')
<h1>Créer une entreprise</h1><form class="admin-form" method="post" enctype="multipart/form-data" action="{{ route('admin.enterprises.store') }}">@csrf  @include('admin.enterprises._form')</form><p><a href="{{ route('admin.enterprises.index') }}">Retour à la liste</a></p>
@endsection
