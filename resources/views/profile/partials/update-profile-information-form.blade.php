<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="grid w-full gap-10 lg:grid-cols-2 lg:items-start" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <header class="lg:col-start-1">
            <h2 class="font-display text-2xl font-semibold text-zinc-100">
                {{ __('Informações do perfil') }}
            </h2>

            <p class="mt-1 text-sm font-medium text-zinc-400">
                {{ __('Atualize sua foto, nome e endereço de e-mail.') }}
            </p>
        </header>

        <div class="mx-auto flex w-full max-w-lg flex-col items-center justify-center text-center lg:col-start-2 lg:row-span-2 lg:row-start-1">
            <x-application-logo :profile-picture="$user->profile_picture" class="h-44 w-44 border-4 border-white/20 shadow-lg shadow-black/40 sm:h-56 sm:w-56" />

            <x-input-label for="profile_picture" :value="__('Foto de perfil')" class="mt-5" />
            <input id="profile_picture" name="profile_picture" type="file" accept="image/*" class="mt-2 block w-full max-w-sm rounded-md border border-white/15 bg-zinc-950 text-sm text-zinc-300 shadow-sm file:mr-4 file:border-0 file:bg-white file:px-4 file:py-2 file:text-sm file:font-semibold file:text-zinc-950 hover:file:bg-zinc-200" />
            <x-input-error class="mt-2" :messages="$errors->get('profile_picture')" />
        </div>

        <div class="mx-auto w-full max-w-lg space-y-6 lg:col-start-1 lg:mx-0">
            <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('E-mail')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="mt-2 text-sm text-zinc-300">
                            {{ __('Seu endereço de e-mail ainda não foi verificado.') }}

                            <button form="send-verification" class="rounded-md text-sm font-semibold text-white underline hover:text-zinc-300 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-zinc-900">
                                {{ __('Reenviar e-mail de verificação.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 text-sm font-medium text-zinc-100">
                                {{ __('Um novo link de verificação foi enviado para seu e-mail.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Salvar') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm font-medium text-zinc-400"
                    >{{ __('Salvo.') }}</p>
                @endif
            </div>
        </div>
    </form>
</section>
