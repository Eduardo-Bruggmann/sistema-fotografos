@props(['photo'])

<article class="photo-card overflow-hidden rounded-xl border border-neutral-200 bg-white">
    <div class="relative">
        <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title ?? 'Foto' }}" loading="lazy"
            class="aspect-4/3 w-full bg-neutral-100 object-cover">
        <p class="photo-author absolute inset-x-0 bottom-0 bg-neutral-900/75 px-4 py-3 text-sm text-white transition-opacity">
            Por {{ $photo->user->name }}
        </p>
    </div>
    <div class="p-5">
        <h2 class="text-lg font-medium tracking-tight">{{ $photo->title ?? 'Sem título' }}</h2>
        <p class="muted mt-2 line-clamp-3">{{ $photo->description ?? '' }}</p>
        <div class="mt-4 border-t border-neutral-100 pt-3">
            <x-photos.like-button :photo="$photo" />
        </div>
    </div>
</article>
