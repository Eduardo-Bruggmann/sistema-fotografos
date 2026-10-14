@props(['name'])

<svg {{ $attributes->class(['shrink-0', 'h-5 w-5' => ! $attributes->has('class')])->merge(['fill' => 'none']) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
    @switch($name)
        @case('plus')
            <path stroke-linecap="round" d="M12 5v14M5 12h14" />
            @break
        @case('heart')
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78Z" />
            @break
        @case('image')
            <rect x="3" y="3" width="18" height="18" rx="3" />
            <path stroke-linecap="round" stroke-linejoin="round" d="m3 16 5-5 6 6 3-3 4 4M8 8h.01" />
            @break
        @case('chevron')
            <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            @break
        @case('menu')
            <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
            @break
    @endswitch
</svg>
