<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-zinc-100 antialiased">
        <div class="flex min-h-screen flex-col items-center justify-center bg-zinc-950 px-4 py-10">
            <div class="mb-5">
                <a href="/">
                    <x-application-logo class="h-28 w-28 fill-current text-white drop-shadow-sm" />
                </a>
            </div>

            <hr class="mb-6 w-full max-w-xs border-white/10">

            <div class="w-full overflow-hidden rounded-lg border border-white/10 bg-zinc-900 px-6 py-6 shadow-xl shadow-black/40 sm:max-w-sm">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
