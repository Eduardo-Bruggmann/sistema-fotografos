@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md border-white/15 bg-zinc-950 text-zinc-100 shadow-sm transition placeholder:text-zinc-500 focus:border-white/80 focus:outline-none focus:ring-0 focus:shadow-[0_0_0_1px_rgba(255,255,255,0.55)] disabled:opacity-60']) }}>
