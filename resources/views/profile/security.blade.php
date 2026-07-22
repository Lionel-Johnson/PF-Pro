@extends('layouts.app')

@section('title','Sécurité')

@section('content')

<div class="container">

    <div class="lc-card">

        <h2>

            Sécurité du compte

        </h2>

        @if(session('secret'))

            <div class="alert alert-success">

                Clé secrète :

                <strong>

                    {{ session('secret') }}

                </strong>

            </div>

        @endif

        <form method="POST"
              action="{{ route('2fa.enable') }}">

            @csrf

            <button>

                Activer le 2FA

            </button>

        </form>

        <br>

        <form method="POST"
              action="{{ route('2fa.disable') }}">

            @csrf

            <button>

                Désactiver le 2FA

            </button>

        </form>

    </div>

</div>

@endsection