@extends('layouts.admin')

@section('title','Créer un service')

@section('content')

<div class="container">

    <div class="card shadow border-0">

        <div class="card-header">

            Nouveau service

        </div>

        <div class="card-body">

            <form

                action="{{ route('admin.services.store') }}"

                method="POST"

                enctype="multipart/form-data">

                @csrf

                @include('admin.services._form')

            </form>

        </div>

    </div>

</div>

@endsection