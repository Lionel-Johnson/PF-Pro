@extends('layouts.app')
@section('title', 'Créer')
@section('content')
<h1>Créer un service</h1><form class="admin-form" method="post" enctype="multipart/form-data" action="{{ route('admin.services.store') }}">@csrf  @include('admin.services._form')</form><p><a href="{{ route('admin.services.index') }}">Retour à la liste</a></p>
@endsection
