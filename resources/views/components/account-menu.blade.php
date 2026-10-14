<x-dropdown-link :href="route('profile.edit')">Perfil</x-dropdown-link>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="dropdown-link">Sair</button>
</form>
