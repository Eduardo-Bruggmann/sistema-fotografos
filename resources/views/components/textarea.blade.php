@props(['disabled' => false])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'form-control', 'rows' => 4]) }}>{{ $slot }}</textarea>
