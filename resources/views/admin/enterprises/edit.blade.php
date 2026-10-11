@extends('layouts.app')
@section('title', 'Modifier')
@section('content')
<h1>Modifier une entreprise</h1><form class="admin-form" method="post" enctype="multipart/form-data" action="{{ route('admin.enterprises.update', $enterprise) }}">@csrf @method('PUT') @include('admin.enterprises._form')</form><p><a href="{{ route('admin.enterprises.index') }}">Retour à la liste</a></p>
@endsection
