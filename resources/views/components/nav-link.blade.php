@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center border-b-2 border-white px-1 pt-1 text-sm font-semibold leading-5 text-slate-900 transition duration-150 ease-in-out focus:outline-none'
            : 'inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 text-slate-600 transition duration-150 ease-in-out hover:border-white/70 hover:text-blue-700 focus:border-white/70 focus:text-blue-700 focus:outline-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
