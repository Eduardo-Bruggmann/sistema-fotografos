<x-guest-layout>
    <x-page-heading title="Verifique seu email" description="Clique no link enviado ao seu email para continuar. Se precisar, solicite um novo link abaixo." />
    @if (session('status') === 'verification-link-sent')
        <x-auth-session-status class="mb-6" status="Um novo link de verificação foi enviado ao seu email." />
    @endif
    <div class="form-actions">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button>Reenviar verificação</x-primary-button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-secondary-button type="submit">Sair</x-secondary-button>
        </form>
    </div>
</x-guest-layout>
