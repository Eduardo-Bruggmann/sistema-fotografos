<x-app-layout>
    <x-page-heading title="Galeria" description="Explore as fotos publicadas.">
        @if (Auth::user()->isPhotographer())
            <x-button-link :href="route('photos.create')"><x-icon name="plus" /> Nova foto</x-button-link>
        @endif
    </x-page-heading>

    <x-photos.search :search="$search" />

    @if ($photos->isEmpty())
        @if ($search !== '')
            <x-empty-state title="Nenhuma foto encontrada." description="Tente outro título ou nome de fotógrafo." />
        @else
            <x-empty-state title="Nenhuma foto publicada ainda." description="As fotografias compartilhadas aparecerão aqui." />
        @endif
    @else
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($photos as $photo)
                <x-photos.card :photo="$photo" />
            @endforeach
        </div>
        {{ $photos->links('components.pagination') }}
    @endif
    <x-slot name="footer">
        <x-footer />
    </x-slot>
</x-app-layout>
