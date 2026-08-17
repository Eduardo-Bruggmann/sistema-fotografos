<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center rounded-md border border-white/60 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-slate-900 shadow-sm transition duration-150 ease-in-out hover:bg-blue-50 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-200 active:bg-blue-100']) }}>
    {{ $slot }}
</button>
