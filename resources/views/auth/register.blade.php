<x-guest-layout>
    <x-page-heading title="Criar conta" description="Faça parte da nossa comunidade de fotografia." />
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf
        <x-form-input name="name" label="Nome" type="text" :value="old('name')" required autofocus autocomplete="name" />
        <x-form-input name="email" label="Email" type="email" :value="old('email')" required autocomplete="username" />
        <x-form-input name="password" label="Senha" type="password" required autocomplete="new-password" />
        <x-form-input name="password_confirmation" label="Confirme a senha" type="password" required autocomplete="new-password" />
        <x-form-field name="role" label="Tipo de conta">
            <select id="role" name="role" class="form-control">
                <option value="photographer" @selected(old('role', 'photographer') === 'photographer')>Fotógrafo</option>
                <option value="user" @selected(old('role') === 'user')>Usuário</option>
            </select>
        </x-form-field>
        <x-primary-button class="w-full">Criar conta</x-primary-button>
        <p class="text-center"><a class="text-link" href="{{ route('login') }}">Já possui uma conta? Entre</a></p>
    </form>
</x-guest-layout>
