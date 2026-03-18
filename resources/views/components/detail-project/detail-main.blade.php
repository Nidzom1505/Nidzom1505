@props(['image', 'nama', 'tantangan', 'solusi','deskripsi','screenshots'])

<div class="lg:col-span-8 space-y-12">
    <div class="group relative overflow-hidden rounded-[3rem] bg-slate-100 border border-slate-200 shadow-2xl">
        <img src="{{ $image }}"
            alt="{{ $nama }}"
            class="w-full object-cover transform group-hover:scale-105 transition-transform duration-700">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="space-y-4">
            <h3 class="text-sm font-black uppercase tracking-widest text-lime-600">The Challenge</h3>
            <p class="text-slate-700 leading-relaxed italic border-l-4 border-lime-400 pl-4">
                "{{ $tantangan }}"
            </p>
        </div>
        <div class="space-y-4">
            <h3 class="text-sm font-black uppercase tracking-widest text-blue-600">The Solution</h3>
            <p class="text-slate-700 leading-relaxed border-l-4 border-blue-400 pl-4">
                {{ $solusi }}
            </p>
        </div>
    </div>

    <div class="prose prose-slate max-w-none">
        <h3 class="text-2xl font-bold text-slate-900">Project Overview</h3>
        <p class="text-slate-600 text-lg leading-relaxed">
            {{ $deskripsi }}
        </p>
    </div>

    @if($screenshots)
    <div class="grid grid-cols-2 gap-4">
        @foreach($screenshots as $shot)
        <div class="rounded-[2rem] overflow-hidden bg-slate-200 aspect-video">
            <img src="{{ asset('storage/' . $shot) }}"
                alt="{{ $nama }} screenshot"
                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
        </div>
        @endforeach
    </div>
    @endif
</div>