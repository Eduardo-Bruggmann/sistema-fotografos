<x-app-layout>
    <x-page-heading title="Perfil" description="Gerencie suas informações e a segurança da sua conta." />
    <div class="max-w-3xl space-y-6">
        <x-panel>@include('profile.partials.update-profile-information-form')</x-panel>
        <x-panel>@include('profile.partials.update-password-form')</x-panel>
        <x-panel>@include('profile.partials.delete-user-form')</x-panel>
    </div>
</x-app-layout>
