<x-layout.base-layout>
    <div class="min-h-screen flex items-center justify-center bg-slate-50 px-6">
        <div class="max-w-md w-full">
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-lime-400 rounded-3xl shadow-lg shadow-lime-200 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-8 h-8 text-slate-900">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                </div>
                <h1 class="text-3xl font-black text-slate-900 tracking-tighter">Admin Central.</h1>
                <p class="text-slate-500 text-sm mt-2">Please sign in to manage your portfolio.</p>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50">
                <x-admin.login.form />
            </div>

            <div class="text-center mt-8">
                <a href="/" class="text-sm font-bold text-slate-400 hover:text-lime-600 transition-colors">
                    ← Back to Website
                </a>
            </div>
        </div>
    </div>
</x-layout.base-layout>