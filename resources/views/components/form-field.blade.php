@props(['name', 'label', 'id' => null, 'messages' => null, 'hint' => null])

<div {{ $attributes }}>
    <x-input-label :for="$id ?? $name" :value="$label" />
    <div class="mt-2">{{ $slot }}</div>
    @if ($hint)
        <p class="muted mt-2">{{ $hint }}</p>
    @endif
    <x-input-error :messages="$messages ?? $errors->get($name)" class="mt-2" />
</div>
