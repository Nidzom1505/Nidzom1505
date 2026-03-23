@props(['active' => false])

<a {{ $attributes }}
    class="flex items-center gap-3 px-4 py-3 rounded-2xl font-bold text-sm transition-all {{ $active ? 'bg-lime-400 text-slate-900 shadow-lg shadow-lime-400/20' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
    {{ $slot }}
</a>