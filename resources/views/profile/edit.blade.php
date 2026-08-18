<x-app-layout>
    <div class="py-10">
        <div class="mx-auto max-w-7xl space-y-6 px-4 sm:px-6 lg:px-8">
            <div>
                <h1 class="font-display text-4xl font-semibold text-white">Perfil</h1>
                <p class="mt-1 text-sm font-medium text-zinc-400">Atualize seus dados, foto e preferências de acesso.</p>
            </div>

            <div class="rounded-lg border border-white/10 bg-zinc-900 p-5 shadow-xl shadow-black/40 sm:p-8">
                <div class="w-full">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="rounded-lg border border-white/10 bg-zinc-900 p-5 shadow-xl shadow-black/40 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="rounded-lg border border-white/10 bg-zinc-900 p-5 shadow-xl shadow-black/40 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
