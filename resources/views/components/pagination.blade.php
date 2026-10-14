@if ($paginator->hasPages())
    <nav aria-label="Paginação da galeria" class="mt-8 flex flex-wrap items-center justify-between gap-4 border-t border-neutral-200 pt-6">
        <p class="muted">{{ $paginator->firstItem() }}–{{ $paginator->lastItem() }} de {{ $paginator->total() }} fotos</p>
        <div class="flex flex-wrap items-center gap-2">
            @if ($paginator->onFirstPage())
                <span class="button button-secondary opacity-50" aria-disabled="true">Anterior</span>
            @else
                <x-button-link :href="$paginator->previousPageUrl()" rel="prev" secondary>Anterior</x-button-link>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="hidden px-2 text-neutral-500 sm:inline">{{ $element }}</span>
                @else
                    @foreach ($element as $page => $url)
                        @if ($page === $paginator->currentPage())
                            <span aria-current="page" class="button button-primary hidden sm:inline-flex">{{ $page }}</span>
                        @else
                            <x-button-link :href="$url" :aria-label="'Página ' . $page" class="hidden sm:inline-flex" secondary>{{ $page }}</x-button-link>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <x-button-link :href="$paginator->nextPageUrl()" rel="next" secondary>Próxima</x-button-link>
            @else
                <span class="button button-secondary opacity-50" aria-disabled="true">Próxima</span>
            @endif
        </div>
    </nav>
@endif
