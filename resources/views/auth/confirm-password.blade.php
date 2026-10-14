<x-guest-layout>
    <x-page-heading title="Confirmar senha" description="Esta é uma área segura. Confirme sua senha para continuar." />
    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
        @csrf
        <x-form-input name="password" label="Senha" type="password" required autocomplete="current-password" />
        <x-primary-button class="w-full">Confirmar senha</x-primary-button>
    </form>
</x-guest-layout>
