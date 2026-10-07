<x-app-layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

            {{-- Cabeçalho --}}
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                        Galeria
                    </h1>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        Explore as fotos publicadas.
                    </p>
                </div>

                @if (Auth::user()->isPhotographer())
                    <a
                        href="{{ route('photos.create') }}"
                        class="inline-flex items-center gap-2 px-4 py-2
                               bg-gray-800 dark:bg-gray-200
                               text-white dark:text-gray-800
                               text-sm font-semibold
                               rounded-lg
                               hover:bg-gray-700 dark:hover:bg-white
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
                                d="M12 4.5v15m7.5-7.5h-15"
                            />
                        </svg>

                        Nova foto
                    </a>
                @endif
            </div>

            {{-- Galeria --}}
            @if ($photos->isEmpty())
                <div
                    class="flex flex-col items-center justify-center
                           py-24
                           border-2 border-dashed
                           border-gray-300 dark:border-gray-700
                           rounded-xl"
                >
                    <svg
                        class="w-10 h-10 mb-4 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5
                               1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909
                               m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5
                               1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25
                               6v12a1.5 1.5 0 0 0 1.5 1.5Z"
                        />
                    </svg>

                    <p class="text-gray-600 dark:text-gray-400">
                        Nenhuma foto publicada ainda.
                    </p>
                </div>
            @else
                <div
                    class="grid grid-cols-1
                           sm:grid-cols-2
                           lg:grid-cols-3
                           gap-6"
                >
                    @foreach ($photos as $photo)
                        <article
                            class="group
                                   bg-white dark:bg-gray-800
                                   border border-gray-200 dark:border-gray-700
                                   rounded-xl
                                   overflow-hidden
                                   shadow-sm
                                   hover:shadow-lg
                                   transition-all duration-300"
                        >
                            {{-- Imagem --}}
                            <div class="overflow-hidden bg-gray-200 dark:bg-gray-700">
                                <img
                                    src="{{ asset('storage/' . $photo->image_path) }}"
                                    alt="{{ $photo->title ?? 'Foto' }}"
                                    class="w-full h-64
                                           object-cover
                                           group-hover:scale-105
                                           transition-transform duration-500"
                                >
                            </div>

                            {{-- Informações --}}
                            <div class="p-5">
                                <h2
                                    class="text-lg font-semibold
                                            text-gray-900 dark:text-gray-100"
                                >
                                    {{ $photo->title ?? 'Sem título' }}
                                </h2>

                                <p
                                    class="mt-2
                                            text-sm
                                            leading-relaxed
                                            text-gray-600 dark:text-gray-400
                                            line-clamp-3"
                                >
                                    {{ $photo->description ?? '' }}
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</x-app-layout>