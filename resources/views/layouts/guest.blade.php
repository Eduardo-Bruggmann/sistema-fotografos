<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head><x-document-head /></head>
    <body>
        <main class="flex min-h-screen flex-col items-center justify-center px-5 py-12">
            <a href="{{ route('dashboard') }}" class="mb-8 text-center">
                <span class="block text-xl font-semibold tracking-tight">{{ config('app.name') }}</span>
                <span class="muted mt-1 block">Um espaço para compartilhar fotografia.</span>
            </a>
            <x-panel class="w-full max-w-md">{{ $slot }}</x-panel>
        </main>
    </body>
</html>
