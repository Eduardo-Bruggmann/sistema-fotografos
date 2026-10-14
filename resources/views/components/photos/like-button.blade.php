@props(['photo'])
@php($liked = $photo->isLikedBy(Auth::id()))

<form action="{{ route('photos.like', $photo) }}" method="POST">
    @csrf
    <button type="submit" aria-pressed="{{ $liked ? 'true' : 'false' }}" aria-label="{{ $liked ? 'Remover curtida' : 'Curtir foto' }}"
        @class(['inline-flex items-center gap-2 rounded-lg px-3 py-2 text-sm hover:bg-neutral-100', 'text-neutral-900' => $liked, 'text-neutral-600' => ! $liked])>
        <x-icon name="heart" :fill="$liked ? 'currentColor' : 'none'" />
        <span>{{ $photo->countLikes() }}</span>
    </button>
</form>
