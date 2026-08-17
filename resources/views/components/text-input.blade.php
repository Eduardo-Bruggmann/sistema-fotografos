@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md border-white/70 bg-white/90 text-slate-900 shadow-sm placeholder:text-slate-400 focus:border-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-200 disabled:opacity-60']) }}>
