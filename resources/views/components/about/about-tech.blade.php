@props(['tech_stack', 'expertises'])

<section class="grid grid-cols-1 lg:grid-cols-12 gap-16">
    <div class="lg:col-span-4 space-y-8">
        <div>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight mb-2">Systems Thinker</h2>
            <p class="text-slate-500 leading-relaxed text-sm italic">
                "Bridging the gap between technology and organizational needs."
            </p>
        </div>

        <div class="grid grid-cols-1 gap-4">
            @foreach($expertises as $item)
            <div class="p-5 bg-slate-50 rounded-[2rem] border border-transparent hover:border-lime-300 hover:bg-white transition-all duration-300 group">
                <h3 class="text-sm font-black text-slate-800 flex justify-between items-center group-hover:text-lime-600 transition-colors">
                    {{ $item['title'] }}
                    <span class="text-slate-200 group-hover:text-lime-400 group-hover:rotate-12 transition-all">/</span>
                </h3>
                <p class="text-[11px] text-slate-400 mt-1 leading-relaxed font-medium">
                    {{ $item['desc'] }}
                </p>
            </div>
            @endforeach
        </div>

        <div class="pt-6 border-t border-slate-100 flex items-center gap-3">
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-lime-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-lime-500"></span>
            </span>
            <span class="text-[10px] font-bold text-slate-900 uppercase tracking-widest italic">
                Open for Collaboration
            </span>
        </div>
    </div>

    <div class="lg:col-span-8 space-y-12">
        @foreach($tech_stack as $category => $skills)
        <div class="space-y-4">
            <h3 class="text-xs font-black uppercase tracking-[0.2em] text-slate-400 flex items-center gap-3">
                {{ $category }}
                <div class="h-px flex-1 bg-slate-100"></div>
            </h3>

            <div class="flex flex-wrap gap-8">
                @foreach($skills as $tech)
                <div class="relative group cursor-help">
                    <img src="{{ $tech->icon_url }}"
                        class="w-10 h-10 grayscale hover:grayscale-0 hover:scale-125 transition-all duration-300"
                        alt="{{ $tech->name }}">

                    <span class="absolute -top-8 left-1/2 -translate-x-1/2 px-2 py-1 bg-slate-900 text-[10px] text-white rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-20">
                        {{ $tech->name }}
                    </span>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>