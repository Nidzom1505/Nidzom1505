@props(['nama', 'tagline', 'tahun', 'total', 'link_cv'])

<div class="lg:col-span-7 space-y-8">
    <div>
        <span class="inline-block px-4 py-1.5 bg-lime-100 text-lime-700 rounded-full text-xs font-black uppercase tracking-widest mb-6">
            Available for anything
        </span>
        <h1 class="text-6xl md:text-8xl font-black text-slate-900 tracking-tighter leading-[0.85] mb-8">
            I create <span class="text-lime-500">solutions</span>, not just code.
        </h1>
        <p class="text-xl text-slate-500 leading-relaxed max-w-xl">
            Halo, saya <span class="text-slate-900 font-bold italic">{{ $nama }}</span>. {{ $tagline }}
        </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="p-6 bg-slate-50 rounded-[2rem] border border-slate-100">
            <p class="text-[10px] uppercase font-bold text-slate-400 mb-2">Exp</p>
            <p class="text-3xl font-black text-slate-900">{{$tahun}}+ <span class="text-sm font-medium text-slate-400">Years</span></p>
        </div>
        <div class="p-6 bg-slate-50 rounded-[2rem] border border-slate-100">
            <p class="text-[10px] uppercase font-bold text-slate-400 mb-2">Projects</p>
            <p class="text-3xl font-black text-slate-900">{{ $total }} <span class="text-sm font-medium text-slate-400">Done</span></p>
        </div>
        <a href="{{$link_cv}}" class="group p-6 bg-lime-400 rounded-[2rem] flex flex-col justify-between hover:bg-slate-900 transition-all duration-500">
            <p class="text-[10px] uppercase font-bold text-slate-900 group-hover:text-lime-400 mb-2 tracking-widest">Resume</p>
            <p class="text-lg font-black text-slate-900 group-hover:text-white flex items-center gap-2">
                PDF <span class="group-hover:translate-x-1 transition-transform">→</span>
            </p>
        </a>
    </div>
</div>