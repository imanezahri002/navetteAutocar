<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Titre dynamique -->
    @vite(['resources/css/app.css'])
</head>
<body>


    <div class="container">
        <div class="sidebar">
            @include('layouts.sidebar')
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')

    @vite(['resources/js/script.js'])
</body>
</html>
