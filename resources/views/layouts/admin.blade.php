<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ $title ?? 'Administration' }}</title>

@vite([
'resources/css/app.css',
'resources/js/app.js'
])

</head>

<body>

<x-sidebar />

<div class="admin-wrapper">

<x-navbar />

<main class="admin-content">

{{ $slot }}

</main>

</div>

</body>

</html>