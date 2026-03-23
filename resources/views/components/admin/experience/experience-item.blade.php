@props(['experience'])

<div class="p-6 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-md transition-all group">
    <div class="flex justify-between items-start">
        <div class="space-y-1">
            <h4 class="font-black text-slate-900 uppercase tracking-tight">{{ $experience->posisi }}</h4>
            <p class="text-xs font-bold text-lime-600 uppercase tracking-widest">{{ $experience->instansi }}</p>
            <p class="text-[10px] text-slate-400 font-medium italic">{{ $experience->period }}</p>
        </div>

        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
            <button @click="$dispatch('open-modal', { name: 'edit-experience-{{ $experience->id }}' })"
                class="p-2 text-blue-500 hover:bg-blue-50 rounded-xl transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <form action="{{ route('experience.destroy', $experience->id) }}" method="POST" onsubmit="return confirm('Hapus pengalaman ini?')">
                @csrf @method('DELETE')
                <button type="submit" class="p-2 text-red-400 hover:bg-red-50 rounded-xl transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>