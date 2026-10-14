@props(['title', 'description' => null])

<div {{ $attributes->merge(['class' => 'rounded-xl border border-dashed border-neutral-300 px-6 py-24 text-center']) }}>
    <x-icon name="image" class="mx-auto mb-4 h-8 w-8 text-neutral-400" />
    <h2 class="text-base font-medium">{{ $title }}</h2>
    @if ($description)
        <p class="muted mt-2">{{ $description }}</p>
    @endif
    {{ $slot }}
</div>
