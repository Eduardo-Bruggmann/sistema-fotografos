@props(['search'])

<form action="{{ route('dashboard') }}" method="GET" class="mb-8">
    <x-input-label for="search" value="Pesquisar fotos" />
    <div class="mt-2 flex flex-wrap gap-3">
        <x-text-input id="search" name="search" type="search" :value="$search" maxlength="255"
            placeholder="Título da foto ou nome do fotógrafo" class="min-w-0 flex-1 basis-64" />
        <x-primary-button>Pesquisar</x-primary-button>
        @if ($search !== '')
            <x-button-link :href="route('dashboard')" secondary>Limpar</x-button-link>
        @endif
    </div>
    <x-input-error :messages="$errors->get('search')" class="mt-2" />
</form>
