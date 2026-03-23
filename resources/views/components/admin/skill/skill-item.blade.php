@props(['skill'])

<div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex flex-col items-center group relative hover:border-lime-400 transition-all">
    <img src="{{ $skill->icon_url }}" class="w-10 h-10 mb-4 group-hover:scale-110 transition-transform object-contain">

    <h4 class="text-[11px] font-black uppercase text-slate-900 text-center truncate w-full">{{ $skill->name }}</h4>
    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-tighter">{{ $skill->category }}</p>

    <div class="absolute inset-0 bg-slate-900/90 rounded-[2rem] opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2">
        <button @click="$dispatch('open-modal', { name: 'edit-skill-{{ $skill->id }}' })"
            class="p-2 bg-white/10 hover:bg-lime-400 text-white hover:text-slate-900 rounded-lg transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <form action="{{ route('skill.destroy', $skill) }}" method="POST" onsubmit="return confirm('Delete {{ $skill->name }}?')">
            @csrf @method('DELETE')
            <button class="p-2 bg-white/10 hover:bg-red-500 text-white rounded-lg transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </form>
    </div>
</div>