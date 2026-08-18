@props(['profilePicture' => null])

@php
    $picture = $profilePicture ?? auth()->user()?->profile_picture;
    $src = asset('storage/' . ($picture ?: 'profile_picture.jpg'));
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex h-10 w-10 items-center justify-center overflow-hidden rounded-full bg-zinc-800']) }}>
    <img src="{{ $src }}" alt="Foto de perfil" class="h-full w-full rounded-full object-cover">
</span>
