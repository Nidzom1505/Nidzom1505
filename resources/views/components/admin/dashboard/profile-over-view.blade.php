@props(['lokasi'])

<div class="lg:col-span-4 space-y-6">
    <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white relative overflow-hidden">
        <h4 class="font-bold mb-4">Availability Status</h4>
        <p class="text-sm text-slate-400 mb-6">Currently showing as "Available for Work" on your website.</p>
        <button class="w-full py-3 bg-lime-400 text-slate-900 font-black rounded-2xl text-xs uppercase tracking-widest hover:bg-white transition-all">
            Update Status
        </button>
        <div class="absolute -bottom-4 -right-4 w-20 h-20 bg-lime-400/10 rounded-full blur-xl"></div>
    </div>

    <div class="bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm">
        <h4 class="font-bold text-slate-900 mb-4">Quick Profile Info</h4>
        <div class="space-y-4">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-500 text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                </div>

                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase">Current Location</p>
                    <p class="text-sm font-bold text-slate-700">{{ $lokasi }}</p>
                </div>
            </div>
        </div>
    </div>
</div>