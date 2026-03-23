@props(['project'])

<div class="bg-white p-4 rounded-[2.5rem] border border-slate-100 shadow-sm hover:shadow-md transition-all group">
    <div class="flex flex-col md:flex-row items-center gap-6">
        <div class="w-full md:w-48 aspect-[16/10] rounded-[1.5rem] overflow-hidden bg-slate-100 shrink-0">
            <img src="{{ $project->image_url }}" class="w-full h-full object-cover">
        </div>

        <div class="flex-1 space-y-2">
            <div class="flex items-center gap-2">
                <span class="px-3 py-1 bg-slate-100 rounded-full text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ $project->jenis }}</span>
                <span class="text-xs font-bold text-slate-300">{{ $project->tahun }}</span>
            </div>
            <h3 class="text-xl font-black text-slate-900">{{ $project->nama_project }}</h3>
            <div class="flex flex-wrap gap-2">
                @foreach($project->tech_stack ?? [] as $tech)
                <span class="text-[10px] font-bold text-slate-500 bg-slate-50 px-2 py-0.5 rounded-md">#{{ $tech }}</span>
                @endforeach
            </div>
        </div>

        <div class="flex gap-2 pr-4">
            <button @click="$dispatch('open-modal', { name: 'edit-project-{{ $project->id }}' })"
                class="p-3 bg-slate-50 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-2xl transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <form action="{{route('project.destroy', $project)}}" method="POST" onsubmit="return confirm('Delete this project?')">
                @csrf @method('DELETE')
                <button class="p-3 bg-slate-50 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-2xl transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>