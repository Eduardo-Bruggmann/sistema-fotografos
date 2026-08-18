<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- E-mail Address -->
        <div>
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Senha -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Lembrar-me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-zinc-600 bg-zinc-950 text-white shadow-sm focus:outline-none focus:ring-0 focus:ring-offset-0" name="remember">
                <span class="ms-2 text-sm text-zinc-300">{{ __('Lembrar-me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="rounded-md text-sm text-zinc-300 underline transition hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-zinc-900" href="{{ route('register') }}">
                {{ __('Não possui uma conta?') }}
            </a>

            <x-primary-button class="ms-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>

        @if (Route::has('password.request') && ($errors->has('email') || $errors->has('password')))
            <div class="mt-4 text-center">
                <a class="rounded-md text-sm text-zinc-300 underline transition hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-zinc-900" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            </div>
        @endif
    </form>
</x-guest-layout>
