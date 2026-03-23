<x-admin.admin-layout>
    <div class="max-w-4xl space-y-8">
        <div>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight">Manage Profile</h2>
            <p class="text-slate-500 text-sm">Update your personal branding and bio.</p>
        </div>

        @if(session('success'))
        <div class="p-4 bg-lime-100 text-lime-700 rounded-2xl font-bold text-sm">
            {{ session('success') }}
        </div>
        @endif

        <x-admin.profile.form :profile="$profile"/>
    </div>
</x-admin.admin-layout>