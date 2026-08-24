@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="rounded-lg border border-white/10 bg-zinc-900 px-4 py-3 shadow-xl shadow-black/30">

        <div class="flex items-center justify-between gap-3 sm:hidden">

            @if ($paginator->onFirstPage())
                <span class="inline-flex items-center rounded-md border border-white/10 bg-zinc-950 px-4 py-2 text-sm font-semibold leading-5 text-zinc-600 shadow-sm cursor-not-allowed">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-flex items-center rounded-md border border-white/15 bg-zinc-800 px-4 py-2 text-sm font-semibold leading-5 text-zinc-100 shadow-sm transition duration-150 ease-in-out hover:border-white/35 hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-white/80 focus:ring-offset-2 focus:ring-offset-zinc-950 active:bg-zinc-900">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-flex items-center rounded-md border border-white/15 bg-zinc-800 px-4 py-2 text-sm font-semibold leading-5 text-zinc-100 shadow-sm transition duration-150 ease-in-out hover:border-white/35 hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-white/80 focus:ring-offset-2 focus:ring-offset-zinc-950 active:bg-zinc-900">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="inline-flex items-center rounded-md border border-white/10 bg-zinc-950 px-4 py-2 text-sm font-semibold leading-5 text-zinc-600 shadow-sm cursor-not-allowed">
                    {!! __('pagination.next') !!}
                </span>
            @endif

        </div>

        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between sm:gap-4">

            <div>
                <p class="text-sm leading-5 text-zinc-400">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-semibold text-zinc-100">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-semibold text-zinc-100">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-semibold text-zinc-100">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="inline-flex overflow-hidden rounded-md border border-white/10 shadow-sm shadow-black/30 rtl:flex-row-reverse">

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="inline-flex items-center border-r border-white/10 bg-zinc-950 px-2 py-2 text-sm font-medium leading-5 text-zinc-600 cursor-not-allowed" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-flex items-center border-r border-white/10 bg-zinc-800 px-2 py-2 text-sm font-medium leading-5 text-zinc-300 transition duration-150 ease-in-out hover:bg-zinc-700 hover:text-white focus:z-10 focus:outline-none focus:ring-2 focus:ring-white/80 active:bg-zinc-900" aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="inline-flex items-center border-r border-white/10 bg-zinc-800 px-4 py-2 text-sm font-medium leading-5 text-zinc-500 cursor-default">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="inline-flex items-center border-r border-white bg-white px-4 py-2 text-sm font-semibold leading-5 text-zinc-950 cursor-default">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="inline-flex items-center border-r border-white/10 bg-zinc-800 px-4 py-2 text-sm font-medium leading-5 text-zinc-300 transition duration-150 ease-in-out hover:bg-zinc-700 hover:text-white focus:z-10 focus:outline-none focus:ring-2 focus:ring-white/80 active:bg-zinc-900" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-flex items-center bg-zinc-800 px-2 py-2 text-sm font-medium leading-5 text-zinc-300 transition duration-150 ease-in-out hover:bg-zinc-700 hover:text-white focus:z-10 focus:outline-none focus:ring-2 focus:ring-white/80 active:bg-zinc-900" aria-label="{{ __('pagination.next') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="inline-flex items-center bg-zinc-950 px-2 py-2 text-sm font-medium leading-5 text-zinc-600 cursor-not-allowed" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
