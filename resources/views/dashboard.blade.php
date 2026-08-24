<x-app-layout>
    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-zinc-100">Dashboard</h1>
            </div>

            @if (Auth::user()->isPhotographer())
                <a
                    href="{{ route('photos.create') }}"
                    class="inline-flex items-center justify-center rounded-md bg-zinc-100 px-4 py-2 text-sm font-semibold text-zinc-950 transition hover:bg-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-zinc-950"
                >
                    Nova foto
                </a>
            @endif
        </div>

        @if (session('status'))
            <div class="mb-6 rounded-md border border-emerald-400/30 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-200">
                {{ session('status') }}
            </div>
        @endif

        @if ($photos->isNotEmpty())
            <div class="flex flex-wrap gap-5">
                @foreach ($photos as $photo)
                    <article class="flex w-full flex-col overflow-hidden rounded-lg border border-white/10 bg-zinc-900 shadow-xl shadow-black/30 transition hover:-translate-y-0.5 hover:border-white/20 hover:bg-zinc-800/80 sm:w-[calc(50%-0.625rem)] lg:w-[calc(33.333%-0.875rem)]">
                        <img src="{{ $photo->path }}" alt="{{ $photo->title ?: 'Sem título' }}" class="aspect-[4/3] w-full object-cover">

                        <div class="flex flex-1 flex-col gap-4 p-4">
                            <div class="min-w-0">
                                <h2 class="truncate text-base font-semibold text-zinc-100">{{ $photo->title ?: 'Sem título' }}</h2>
                                <p class="mt-1 truncate text-sm text-zinc-400">{{ $photo->user->name }}</p>
                            </div>

                            <div class="mt-auto flex items-center justify-between gap-3 border-t border-white/10 pt-4 text-xs text-zinc-500">
                                <time datetime="{{ $photo->created_at->toDateTimeString() }}">
                                    {{ $photo->created_at->format('d/m/Y') }}
                                </time>

                                <form method="POST" action="{{ route('photos.like', $photo) }}">
                                    @csrf

                                    <button
                                        type="submit"
                                        class="inline-flex items-center gap-2 rounded-md border px-3 py-2 text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-white/80 focus:ring-offset-2 focus:ring-offset-zinc-900 {{ $photo->liked_by_current_user ? 'border-rose-400/40 bg-rose-400/10 text-rose-200 hover:border-rose-300/70 hover:bg-rose-400/20' : 'border-white/15 bg-zinc-800 text-zinc-300 hover:border-white/35 hover:bg-zinc-700 hover:text-white' }}"
                                        aria-label="{{ $photo->liked_by_current_user ? 'Remover curtida' : 'Curtir foto' }}"
                                    >
                                        <x-icon name="icon-heart" class="h-4 w-4 {{ $photo->liked_by_current_user ? 'text-rose-300' : 'text-zinc-400' }}" />
                                        <span>{{ $photo->likes_count }}</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="rounded-lg border border-white/10 bg-zinc-900 px-6 py-10 text-center shadow-xl shadow-black/30">
                <h2 class="text-lg font-semibold text-zinc-100">Nenhuma foto cadastrada.</h2>
            </div>
        @endif

        <div class="mt-6">
            {{ $photos->links() }}
        </div>
    </div>
</x-app-layout>
