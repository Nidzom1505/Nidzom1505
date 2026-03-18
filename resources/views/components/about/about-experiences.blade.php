@props(['pengalaman'])

<section class="space-y-16">
    <div class="text-center max-w-2xl mx-auto">
        <h2 class="text-4xl font-black text-slate-900 mb-4">Professional Journey</h2>
        <div class="h-1 w-20 bg-lime-400 mx-auto"></div>
    </div>

    <div class="relative space-y-8 before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-slate-200 before:to-transparent">

        @foreach($pengalaman as $exp)
        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
            <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-200 text-slate-500 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 transition-colors group-hover:bg-lime-400 group-hover:text-slate-900 z-10">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V5h2v4z"></path>
                </svg>
            </div>
            <div class="w-[calc(100%-4rem)] md:w-[45%] p-6 bg-white rounded-[2rem] border border-slate-100 shadow-sm group-hover:shadow-xl transition-all">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-black text-lime-600 uppercase">{{ $exp->period }}</span>
                </div>
                <h4 class="text-xl font-bold text-slate-900">{{ $exp->posisi }}</h4>
                <p class="text-sm font-medium text-slate-400 mb-3">{{ $exp->instansi }}</p>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $exp->deskripsi_tugas }}</p>
            </div>
        </div>
        @endforeach

    </div>
</section>