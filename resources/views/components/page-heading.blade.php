@props(['title', 'description' => null])

<header {{ $attributes->merge(['class' => 'page-heading']) }}>
    <div>
        <h1 class="page-title">{{ $title }}</h1>
        @if ($description)
            <p class="muted mt-2">{{ $description }}</p>
        @endif
    </div>
    {{ $slot }}
</header>
