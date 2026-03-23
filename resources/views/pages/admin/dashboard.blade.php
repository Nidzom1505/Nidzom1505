<x-admin.admin-layout>
    <div class="space-y-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Dashboard Overview</h2>
                <p class="text-slate-500 text-sm">Welcome back, Nidzom! Here's what's happening with your portfolio.</p>
            </div>
            <div class="flex gap-3">
                <a href="/" target="_blank" class="px-5 py-2.5 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-50 transition-all">View Site</a>
                <button class="px-5 py-2.5 bg-lime-400 rounded-xl text-sm font-black text-slate-900 hover:bg-lime-500 transition-all shadow-lg shadow-lime-200 flex items-center justify-center gap-2">
                    New Project
                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor"
                        class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>
        </div>

        <x-admin.dashboard.item-over-view :project="$total_project" :pengalaman="$pengalaman" :skill="$skill" />

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <x-admin.dashboard.project-over-view :projects="$projects" />

            <x-admin.dashboard.profile-over-view :lokasi="$lokasi" />
        </div>
    </div>
</x-admin.admin-layout>