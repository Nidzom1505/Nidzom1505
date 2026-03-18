@props(['nama','linkProject'])

<div class="mb-12">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div class="max-w-2xl">
            <h1 class="text-5xl md:text-6xl font-black text-slate-900 tracking-tighter leading-none mb-4">
                {{ $nama }}
            </h1>
        </div>
        <div class="flex gap-4">

            @if($linkProject)
            <a href="{{ $linkProject }}" target="_blank" class="px-8 py-4 bg-lime-400 text-slate-900 font-bold rounded-2xl hover:bg-lime-500 transition-all shadow-lg shadow-lime-200 flex items-center gap-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
                Live Preview
            </a>
            @endif
        </div>
    </div>
</div>