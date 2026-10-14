@props(['active' => false])
<a {{ $attributes->class(['nav-link', 'nav-link-active' => $active]) }}>{{ $slot }}</a>
