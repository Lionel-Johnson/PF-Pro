<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Lionel Concept')</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="bg-light lc-body">

<div class="d-flex">

    {{-- Sidebar --}}
    @include('layouts.partials.sidebar')

    <div class="flex-grow-1">

        {{-- Navbar --}}
        @include('layouts.partials.navbar')

        {{-- Contenu principal --}}
        <main class="container-fluid py-4">

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            @yield('content')

        </main>

        {{-- Footer --}}
        @include('layouts.partials.footer')

    </div>

</div>

</body>

</html>