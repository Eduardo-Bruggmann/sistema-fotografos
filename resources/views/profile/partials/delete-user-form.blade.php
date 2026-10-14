<section class="space-y-6">
    <x-section-heading title="Excluir conta" description="Esta ação apaga permanentemente seus dados. Baixe as informações que deseja manter antes de continuar." />
    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">Excluir conta</x-danger-button>
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="space-y-6 p-6">
            @csrf
            @method('delete')
            <x-section-heading title="Deseja excluir sua conta?" description="Todos os dados da conta serão apagados permanentemente. Informe sua senha para confirmar." />
            <x-form-input name="password" label="Senha" type="password" placeholder="Senha" :messages="$errors->userDeletion->get('password')" />
            <div class="form-actions">
                <x-secondary-button x-on:click="$dispatch('close')">Cancelar</x-secondary-button>
                <x-danger-button>Excluir conta</x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
