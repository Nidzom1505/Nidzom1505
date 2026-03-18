@props(['tahun','jenis','kontribusi','konteks','tech'])

<div class="bg-white rounded-[2.5rem] border border-slate-100 p-8 shadow-xl shadow-slate-200/50">
    <h4 class="text-slate-900 font-bold mb-6 flex items-center">
        <span class="w-8 h-8 bg-lime-400/70 rounded-lg flex items-center justify-center mr-3 text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>
        </span>
        Project Details
    </h4>

    <div class="space-y-6">
        <div class="flex justify-between items-center py-3 border-b border-slate-50">
            <span class="text-slate-400 font-medium">Year</span>
            <span class="text-slate-900 font-bold">{{ $tahun }}</span>
        </div>
        <div class="flex justify-between items-center py-3 border-b border-slate-50">
            <span class="text-slate-400 font-medium">Category</span>
            <span class="text-slate-900 font-bold">{{ $jenis }}</span>
        </div>

        @if($kontribusi)
        <div class="flex justify-between items-center py-3 border-b border-slate-50">
            <span class="text-slate-400 font-medium">Role</span>
            <span class="text-slate-900 font-bold text-right ml-4 leading-tight">
                {{ $kontribusi }}
            </span>
        </div>
        @endif

        @if($konteks)
        <div class="flex justify-between items-center py-3 border-b border-slate-50">
            <span class="text-slate-400 font-medium">Project Context</span>
            <span class="text-slate-900 font-bold text-right ml-4 leading-tight">
                {{ $konteks }}
            </span>
        </div>
        @endif
    </div>

    <div class="mt-8">
        <p class="text-slate-400 text-xs uppercase tracking-widest font-bold mb-4">Tech Stack</p>
        <div class="flex flex-wrap gap-2">
            @if(!empty($tech))
            @foreach($tech as $tool)
            <x-detail-project.tech-badge :name="$tool" />
            @endforeach
            @else
            <span class="text-slate-400 text-xs italic">No tech stack listed</span>
            @endif
        </div>
    </div>
</div>