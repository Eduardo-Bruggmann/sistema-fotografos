<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head><x-document-head /></head>
    <body>
        @include('layouts.navigation')
        @isset($header)
            <header class="border-b border-neutral-200 bg-white">
                <div class="mx-auto max-w-6xl px-5 py-6 sm:px-8">{{ $header }}</div>
            </header>
        @endisset
        <main class="page-container">{{ $slot }}</main>
    </body>
</html>
