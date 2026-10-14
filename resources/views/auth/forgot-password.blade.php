<x-guest-layout>
    <x-page-heading title="Recuperar senha" description="Informe seu email para receber um link de redefinição de senha." />
    <x-auth-session-status class="mb-6" :status="session('status')" />
    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf
        <x-form-input name="email" label="Email" type="email" :value="old('email')" required autofocus />
        <x-primary-button class="w-full">Enviar link de redefinição</x-primary-button>
    </form>
</x-guest-layout>
