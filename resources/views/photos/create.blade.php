<x-app-layout>
    <x-page-heading title="Nova foto" description="Adicione uma nova foto à galeria." />
    <x-panel class="max-w-2xl">
        @include('photos.partials.create-form')
    </x-panel>
</x-app-layout>
