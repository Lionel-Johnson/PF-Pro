@extends('layouts.app')

@section('title','Administration')

@section('content')

<div class="row g-4">

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Entreprises</h6>
                <h2>{{ $enterprises ?? 0 }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Utilisateurs</h6>
                <h2>{{ $users ?? 0 }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Produits</h6>
                <h2>{{ $products ?? 0 }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Articles</h6>
                <h2>{{ $posts ?? 0 }}</h2>
            </div>
        </div>
    </div>

</div>

@endsection