<form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    <x-form-input name="title" label="Título" type="text" :value="old('title')" placeholder="Digite um título para a foto" />
    <x-form-input name="image" label="Imagem" type="file" accept="image/jpeg,image/png,image/webp,image/gif" hint="JPG, PNG, WEBP ou GIF. Até 2 MB." />
    <x-form-field name="description" label="Descrição">
        <x-textarea id="description" name="description" placeholder="Escreva uma breve descrição da foto">{{ old('description') }}</x-textarea>
    </x-form-field>
    <div class="form-actions border-t border-neutral-200 pt-6">
        <x-button-link :href="route('dashboard')" secondary>Cancelar</x-button-link>
        <x-primary-button>Salvar foto</x-primary-button>
    </div>
</form>
