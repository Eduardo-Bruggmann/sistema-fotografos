@props(['value' => null])
<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-neutral-800']) }}>{{ $value ?? $slot }}</label>
