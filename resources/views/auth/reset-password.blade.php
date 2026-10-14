<x-guest-layout>
    <x-page-heading title="Redefinir senha" description="Escolha uma nova senha para sua conta." />
    <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <x-form-input name="email" label="Email" type="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
        <x-form-input name="password" label="Senha" type="password" required autocomplete="new-password" />
        <x-form-input name="password_confirmation" label="Confirme a senha" type="password" required autocomplete="new-password" />
        <x-primary-button class="w-full">Redefinir senha</x-primary-button>
    </form>
</x-guest-layout>
