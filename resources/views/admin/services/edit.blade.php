@extends('layouts.app')
@section('title', 'Modifier')
@section('content')
<h1>Modifier un service</h1><form class="admin-form" method="post" enctype="multipart/form-data" action="{{ route('admin.services.update', $service) }}">@csrf @method('PUT') @include('admin.services._form')</form><p><a href="{{ route('admin.services.index') }}">Retour à la liste</a></p>
@endsection
