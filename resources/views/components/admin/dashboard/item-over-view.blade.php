@props(['project','pengalaman', 'skill'])

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="p-6 bg-white rounded-[2rem] border border-slate-100 shadow-sm">
        <p class="text-[10px] uppercase font-bold text-slate-400 mb-2">Total Projects</p>
        <h3 class="text-3xl font-black text-slate-900">{{ $project }}</h3>
    </div>
    <div class="p-6 bg-white rounded-[2rem] border border-slate-100 shadow-sm">
        <p class="text-[10px] uppercase font-bold text-slate-400 mb-2">Total Skills</p>
        <h3 class="text-3xl font-black text-slate-900">{{ $skill }}</h3>
    </div>
    <div class="p-6 bg-white rounded-[2rem] border border-slate-100 shadow-sm">
        <p class="text-[10px] uppercase font-bold text-slate-400 mb-2">Experiences</p>
        <h3 class="text-3xl font-black text-slate-900">{{ $pengalaman }}</h3>
    </div>
    <div class="p-6 bg-lime-400 rounded-[2rem] border border-lime-500 shadow-sm">
        <p class="text-[10px] uppercase font-bold text-slate-900 mb-2 opacity-60">Site Status</p>
        <h3 class="text-xl font-black text-slate-900 flex items-center gap-2">
            <span class="w-2 h-2 bg-slate-900 rounded-full animate-pulse"></span>
            Live & Active
        </h3>
    </div>
</div>