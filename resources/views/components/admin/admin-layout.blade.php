<x-layout.base-layout>
    <div class="flex min-h-screen bg-slate-50" x-data="{ sidebarOpen: false }">
        <x-admin.side-bar.side-bar />

        <div class="flex-1">
            <header class="flex items-center justify-between h-20 px-8 bg-white border-b border-slate-100 lg:hidden">
                <button @click="sidebarOpen = !sidebarOpen" class="p-2 text-slate-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <span class="font-black text-slate-900 tracking-tighter">ADMIN</span>
            </header>

            <main class="p-8">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layout.base-layout>