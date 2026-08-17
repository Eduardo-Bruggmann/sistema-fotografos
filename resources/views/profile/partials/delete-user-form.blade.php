<section class="space-y-6">
    <header>
        <h2 class="font-display text-2xl font-semibold text-red-700">
            {{ __('Excluir conta') }}
        </h2>

        <p class="mt-1 text-sm font-medium text-slate-600">
            {{ __('Ao excluir sua conta, seus dados serao removidos permanentemente. Essa acao nao pode ser desfeita.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Excluir conta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="font-display text-2xl font-semibold text-red-700">
                {{ __('Tem certeza que deseja excluir sua conta?') }}
            </h2>

            <p class="mt-1 text-sm font-medium text-slate-600">
                {{ __('Digite sua senha para confirmar a exclusao permanente da conta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Senha') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Senha') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Excluir conta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
