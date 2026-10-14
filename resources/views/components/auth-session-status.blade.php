@props(['status'])
@if ($status)
    <div {{ $attributes->merge(['class' => 'rounded-lg border border-neutral-200 bg-neutral-50 p-3 text-sm text-neutral-700', 'role' => 'status']) }}>{{ $status }}</div>
@endif
