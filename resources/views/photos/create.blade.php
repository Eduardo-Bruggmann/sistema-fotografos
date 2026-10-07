<x-app-layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

            {{-- Cabeçalho --}}
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                    Nova foto
                </h1>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Adicione uma nova foto à galeria.
                </p>
            </div>

            {{-- Formulário --}}
            <div
                class="max-w-2xl
                       bg-white dark:bg-gray-800
                       border border-gray-200 dark:border-gray-700
                       rounded-xl
                       shadow-sm"
            >
                <form
                    action="{{ route('photos.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="p-6 sm:p-8"
                >
                    @csrf

                    <div class="space-y-6">

                        {{-- Título --}}
                        <div>
                            <label
                                for="title"
                                class="block mb-2 text-sm font-medium
                                       text-gray-700 dark:text-gray-300"
                            >
                                Título
                            </label>

                            <input
                                id="title"
                                type="text"
                                name="title"
                                value="{{ old('title') }}"
                                placeholder="Digite um título para a foto"
                                class="block w-full
                                       rounded-lg
                                       border-gray-300 dark:border-gray-600
                                       bg-white dark:bg-gray-900
                                       text-gray-900 dark:text-gray-100
                                       placeholder-gray-400 dark:placeholder-gray-500
                                       shadow-sm
                                       focus:border-indigo-500
                                       focus:ring-indigo-500"
                            >

                            @error('title')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Imagem --}}
                        <div>
                            <label
                                for="image"
                                class="block mb-2 text-sm font-medium
                                       text-gray-700 dark:text-gray-300"
                            >
                                Imagem
                            </label>

                            <input
                                id="image"
                                type="file"
                                name="image"
                                accept="image/jpeg,image/png,image/webp,image/gif"
                                class="block w-full
                                       text-sm
                                       text-gray-600 dark:text-gray-300
                                       border border-gray-300 dark:border-gray-600
                                       rounded-lg
                                       bg-white dark:bg-gray-900
                                       cursor-pointer
                                       file:mr-4
                                       file:py-2.5
                                       file:px-4
                                       file:border-0
                                       file:border-r
                                       file:border-gray-300 dark:file:border-gray-600
                                       file:bg-gray-50 dark:file:bg-gray-800
                                       file:text-sm
                                       file:font-medium
                                       file:text-gray-700 dark:file:text-gray-300
                                       hover:file:bg-gray-100
                                       dark:hover:file:bg-gray-700"
                            >

                            <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                                JPG, PNG, WEBP ou GIF.
                            </p>

                            @error('image')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Descrição --}}
                        <div>
                            <label
                                for="description"
                                class="block mb-2 text-sm font-medium
                                       text-gray-700 dark:text-gray-300"
                            >
                                Descrição
                            </label>

                            <textarea
                                id="description"
                                name="description"
                                rows="4"
                                placeholder="Escreva uma breve descrição da foto"
                                class="block w-full
                                       resize-none
                                       rounded-lg
                                       border-gray-300 dark:border-gray-600
                                       bg-white dark:bg-gray-900
                                       text-gray-900 dark:text-gray-100
                                       placeholder-gray-400 dark:placeholder-gray-500
                                       shadow-sm
                                       focus:border-indigo-500
                                       focus:ring-indigo-500"
                            >{{ old('description') }}</textarea>

                            @error('description')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>

                    {{-- Ações --}}
                    <div
                        class="flex items-center justify-end gap-3
                               mt-8 pt-6
                               border-t border-gray-200 dark:border-gray-700"
                    >
                        <a
                            href="{{ route('dashboard') }}"
                            class="px-4 py-2
                                   text-sm font-medium
                                   text-gray-700 dark:text-gray-300
                                   hover:text-gray-900 dark:hover:text-white
                                   transition-colors"
                        >
                            Cancelar
                        </a>

                        <button
                            type="submit"
                            class="inline-flex items-center gap-2
                                   px-4 py-2
                                   bg-gray-800 dark:bg-gray-200
                                   text-white dark:text-gray-800
                                   text-sm font-semibold
                                   rounded-lg
                                   hover:bg-gray-700 dark:hover:bg-white
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-gray-500
                                   focus:ring-offset-2
                                   dark:focus:ring-offset-gray-800
                                   transition-colors duration-200"
                        >
                            <svg
                                class="w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6.75 7.5h10.5m-10.5 3h10.5m-10.5 3h5.25m-8.25 6h16.5A2.25
                                       2.25 0 0 0 22.5 17.25V6.75A2.25 2.25 0 0 0 20.25
                                       4.5H3.75A2.25 2.25 0 0 0 1.5 6.75v10.5a2.25
                                       2.25 0 0 0 2.25 2.25Z"
                                />
                            </svg>

                            Salvar foto
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>