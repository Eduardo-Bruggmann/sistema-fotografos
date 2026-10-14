@props(['secondary' => false])

<a {{ $attributes->class(['button', 'button-secondary' => $secondary, 'button-primary' => ! $secondary]) }}>{{ $slot }}</a>
