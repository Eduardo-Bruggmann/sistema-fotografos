<nav x-data="{ open: false }" class="border-b border-neutral-200 bg-white" aria-label="Navegação principal">
    <div class="mx-auto flex h-20 max-w-6xl items-center justify-between gap-6 px-5 sm:px-8">
        <a href="{{ route('dashboard') }}" class="text-lg font-semibold tracking-tight">{{ config('app.name') }}</a>
        <div class="hidden items-center gap-8 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">Galeria</x-nav-link>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button type="button" class="flex items-center gap-3 rounded-lg p-2 text-sm text-neutral-700" aria-label="Abrir menu da conta">
                        <x-avatar class="h-8 w-8" />
                        <span>{{ Auth::user()->name }}</span>
                        <x-icon name="chevron" class="h-4 w-4" />
                    </button>
                </x-slot>
                <x-slot name="content"><x-account-menu /></x-slot>
            </x-dropdown>
        </div>
        <button type="button" @click="open = ! open" :aria-expanded="open" aria-controls="mobile-navigation" aria-label="Alternar navegação" class="button button-secondary sm:hidden">
            <x-icon name="menu" />
        </button>
    </div>
    <div id="mobile-navigation" x-show="open" x-cloak class="space-y-2 border-t border-neutral-100 px-5 py-4 sm:hidden">
        <p class="px-4 text-sm font-medium">{{ Auth::user()->name }}</p>
        <p class="muted break-all px-4">{{ Auth::user()->email }}</p>
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">Galeria</x-responsive-nav-link>
        <x-account-menu />
    </div>
</nav>
