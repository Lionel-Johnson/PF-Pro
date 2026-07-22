<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Lionel Concept')</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="lc-front">

    @include('front.partials.navbar')

    <main>

        @yield('content')

    </main>

    @include('front.partials.footer')

    @include('front.partials.mobile-menu')

</body>

</html>