@props(['active' => false])
<a {{ $attributes->class(['mobile-nav-link', 'mobile-nav-link-active' => $active]) }}>{{ $slot }}</a>
