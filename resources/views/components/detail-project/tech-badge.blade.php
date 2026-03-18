@props(['name'])

<span {{ $attributes->merge(['class' => 'px-4 py-2 bg-slate-50 border border-slate-100 rounded-xl text-xs font-bold text-slate-600']) }}>
    {{ $name }}
</span>