@php($avatar = Auth::user()?->avatar)
<img src="{{ asset('storage/' . ($avatar ?: 'avatars/default.webp')) }}" alt="Avatar" {{ $attributes->class(['rounded-full object-cover', 'h-10 w-10' => ! $attributes->has('class')]) }}>
