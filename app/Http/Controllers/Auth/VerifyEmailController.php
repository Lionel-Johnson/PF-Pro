@extends('layouts.app')

@section('title','Vérification')

@section('content')

<div class="container py-5">

    <div class="lc-card">

        <h2>

            Vérification de votre adresse email

        </h2>

        <p>

            Consultez votre boîte mail puis cliquez sur le lien reçu.

        </p>

        <form method="POST"
              action="{{ route('verification.send') }}">

            @csrf

            <button>

                Renvoyer le lien

            </button>

        </form>

    </div>

</div>

@endsection