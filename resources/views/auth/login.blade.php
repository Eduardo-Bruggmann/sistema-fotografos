<x-guest-layout>
    <x-page-heading title="Entrar" description="Acesse sua conta e explore a galeria." />
    <x-auth-session-status class="mb-6" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf
        <x-form-input name="email" label="Email" type="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-form-input name="password" label="Senha" type="password" required autocomplete="current-password" />
        <div class="flex flex-wrap items-center justify-between gap-3">
            <label for="remember_me" class="flex items-center gap-2 text-sm text-neutral-600">
                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember"> Lembre-me
            </label>
            @if (Route::has('password.request'))
                <a class="text-link" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
            @endif
        </div>
        <x-primary-button class="w-full">Entrar</x-primary-button>
        <p class="text-center"><a class="text-link" href="{{ route('register') }}">Não possui uma conta? Cadastre-se</a></p>
    </form>
</x-guest-layout>
