<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'sistema-fotografos') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="flex flex-col justify-center items-center min-h-screen bg-blue-300 font-display">
        <div class="flex self-end space-x-4 px-5">
            <a href="{{ route('login') }}" class="hover:text-blue-200 bg-white text-black py-2 px-4 rounded-md my-2">Entrar</a>
            <a href="{{ route('register') }}" class="hover:text-blue-200 bg-white text-black py-2 px-4 rounded-md my-2">Registrar</a>
        </div>
        <div class="flex flex-1 justify-center items-center min-h-screen">
            <h1 class="text-9xl text-white">Hello, World!</h1>
        </div>
    </body>
</html>
