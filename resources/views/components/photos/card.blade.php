@props(['photo'])

<article class="overflow-hidden rounded-xl border border-neutral-200 bg-white">
    <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title ?? 'Foto' }}" loading="lazy"
        class="aspect-4/3 w-full bg-neutral-100 object-cover">
    <div class="p-5">
        <h2 class="text-lg font-medium tracking-tight">{{ $photo->title ?? 'Sem título' }}</h2>
        <p class="muted mt-2 line-clamp-3">{{ $photo->description ?? '' }}</p>
        <div class="mt-4 border-t border-neutral-100 pt-3">
            <x-photos.like-button :photo="$photo" />
        </div>
    </div>
</article>
