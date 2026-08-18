@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'rounded-md border border-white/15 bg-zinc-800 px-3 py-2 text-sm font-medium text-zinc-100']) }}>
        {{ $status }}
    </div>
@endif
