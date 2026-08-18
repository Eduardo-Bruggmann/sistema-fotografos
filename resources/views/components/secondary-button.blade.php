<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center rounded-md border border-white/15 bg-zinc-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-zinc-100 shadow-sm transition duration-150 ease-in-out hover:border-white/35 hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-zinc-950 disabled:opacity-25']) }}>
    {{ $slot }}
</button>
