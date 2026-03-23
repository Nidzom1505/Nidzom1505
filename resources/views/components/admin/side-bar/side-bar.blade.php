<aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-900 text-white transition-transform duration-300 lg:translate-x-0 lg:static lg:inset-0">

    <div class="flex items-center justify-center h-20 border-b border-slate-800">
        <img src="/assets/LogoResize.png" class="w-30 h-auto" alt="Logo" />
    </div>

    <nav class="mt-6 px-4 space-y-2">
        <x-admin.side-bar.nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" icon="home">Dashboard</x-admin.side-bar.nav-link>
        <x-admin.side-bar.nav-link href="{{route('profile.edit')}}" icon="user">Profile</x-admin.side-bar.nav-link>
        <x-admin.side-bar.nav-link href="{{route('project.edit')}}" icon="briefcase">Projects</x-admin.side-bar.nav-link>
        <x-admin.side-bar.nav-link href="{{route('skill.edit')}}" icon="cpu">Skills</x-admin.side-bar.nav-link>
        <x-admin.side-bar.nav-link href="{{route('experience.edit')}}" icon="map">Experience</x-admin.side-bar.nav-link>

        <div class="pt-10">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="flex items-center w-full px-4 py-3 text-slate-400 hover:text-red-400 hover:bg-red-400/10 rounded-2xl transition-all font-bold text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </nav>
</aside>