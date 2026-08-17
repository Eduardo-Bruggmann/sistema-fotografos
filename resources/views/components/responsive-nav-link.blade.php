@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full border-l-4 border-white bg-white/60 py-2 pe-4 ps-3 text-start text-base font-semibold text-slate-900 transition duration-150 ease-in-out focus:outline-none'
            : 'block w-full border-l-4 border-transparent py-2 pe-4 ps-3 text-start text-base font-medium text-slate-600 transition duration-150 ease-in-out hover:border-white/70 hover:bg-white/40 hover:text-blue-700 focus:border-white/70 focus:bg-white/40 focus:text-blue-700 focus:outline-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
