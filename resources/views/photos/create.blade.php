<x-app-layout>
    <div class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-2xl font-semibold text-zinc-100">Nova foto</h1>
            <p class="mt-1 text-sm text-zinc-400">Envie uma imagem para adicionar ao seu portfolio.</p>
        </div>

        <form method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data" class="space-y-6 rounded-lg border border-white/10 bg-zinc-900 p-6 shadow-xl shadow-black/30">
            @csrf

            <div>
                <x-input-label for="title" value="Titulo" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="image" value="Imagem" />
                <input
                    id="image"
                    name="image"
                    type="file"
                    accept="image/*"
                    required
                    class="mt-1 block w-full rounded-md border border-white/10 bg-zinc-950 px-3 py-2 text-sm text-zinc-100 file:mr-4 file:rounded-md file:border-0 file:bg-zinc-100 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-zinc-950 hover:file:bg-white focus:border-white/40 focus:outline-none focus:ring-2 focus:ring-white/70"
                >
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('dashboard') }}" class="rounded-md px-4 py-2 text-sm font-medium text-zinc-300 transition hover:text-white">
                    Cancelar
                </a>

                <x-primary-button>
                    Enviar foto
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
