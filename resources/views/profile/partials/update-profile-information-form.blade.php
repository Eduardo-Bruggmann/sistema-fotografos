<section>
    <x-section-heading title="Informações do perfil" description="Atualize suas informações, seu email e sua foto de perfil." />
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <x-form-input name="name" label="Nome" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
        <x-form-field name="email" label="Email">
            <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
            @include('profile.partials.email-verification')
        </x-form-field>
        <x-form-input name="avatar" label="Foto de perfil" type="file" :value="old('avatar', $user->avatar)" required autofocus autocomplete="avatar" />
        <div class="flex items-center gap-4">
            <x-primary-button>Salvar</x-primary-button>
            <x-saved-status status="profile-updated" />
        </div>
    </form>
</section>
