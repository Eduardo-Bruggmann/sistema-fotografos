<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center rounded-md border border-white bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-zinc-950 shadow-sm transition duration-150 ease-in-out hover:bg-zinc-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-zinc-950 active:bg-zinc-300']) }}>
    {{ $slot }}
</button>
