@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full border-l-4 border-white bg-white/10 py-2 pe-4 ps-3 text-start text-base font-semibold text-white transition duration-150 ease-in-out focus:outline-none'
            : 'block w-full border-l-4 border-transparent py-2 pe-4 ps-3 text-start text-base font-medium text-zinc-400 transition duration-150 ease-in-out hover:border-white/70 hover:bg-white/10 hover:text-white focus:border-white/70 focus:bg-white/10 focus:text-white focus:outline-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
