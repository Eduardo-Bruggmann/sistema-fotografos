<section>
    <x-section-heading title="Atualize sua senha" description="Use uma senha longa e aleatória para manter sua conta segura." />
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <x-form-input name="current_password" id="update_password_current_password" label="Senha atual" type="password" autocomplete="current-password" :messages="$errors->updatePassword->get('current_password')" />
        <x-form-input name="password" id="update_password_password" label="Nova senha" type="password" autocomplete="new-password" :messages="$errors->updatePassword->get('password')" />
        <x-form-input name="password_confirmation" id="update_password_password_confirmation" label="Confirme a nova senha" type="password" autocomplete="new-password" :messages="$errors->updatePassword->get('password_confirmation')" />
        <div class="flex items-center gap-4">
            <x-primary-button>Salvar</x-primary-button>
            <x-saved-status status="password-updated" />
        </div>
    </form>
</section>
