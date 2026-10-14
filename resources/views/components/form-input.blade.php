@props(['name', 'label', 'id' => null, 'messages' => null, 'hint' => null])

<x-form-field :name="$name" :label="$label" :id="$id" :messages="$messages" :hint="$hint">
    <x-text-input :id="$id ?? $name" :name="$name" {{ $attributes }} />
</x-form-field>
