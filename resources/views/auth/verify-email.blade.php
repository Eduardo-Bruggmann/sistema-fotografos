<x-guest-layout>
    <div class="mb-4 text-sm text-zinc-300">
        {{ __('Obrigado por se cadastrar! Antes de começar, verifique seu e-mail pelo link que acabamos de enviar. Se não recebeu a mensagem, podemos enviar outra.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm font-medium text-zinc-100">
            {{ __('Um novo link de verificação foi enviado para o e-mail informado no cadastro.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Reenviar e-mail de verificação') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="rounded-md text-sm text-zinc-300 underline transition hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-zinc-900">
                {{ __('Sair') }}
            </button>
        </form>
    </div>
</x-guest-layout>
