@props(['projects', 'categories'])

<main id="main-content" class="flex-grow px-6 py-12 max-w-7xl mx-auto w-full">
    <div class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h1 class="text-4xl font-black text-slate-900 mb-2">My Projects</h1>
            <p class="text-slate-500">A collection of my works and experiments.</p>
        </div>

        <form action="{{ route('projects') }}" method="GET" class="flex flex-col items-center gap-6 w-full">

            <div class="relative">
                <input type="text" name="search" placeholder="Search projects..."
                    value="{{ request('search') }}"
                    class="pl-10 pr-4 py-2 bg-white border border-slate-200 rounded-full focus:ring-2 focus:ring-lime-400 outline-none transition-all w-80 shadow-sm">
                <svg class="w-5 h-5 absolute left-3 top-2.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <div class="flex flex-wrap justify-center gap-3 w-full max-w-4xl">
                <label class="group">
                    <input type="radio"
                        name="filter"
                        value=""
                        class="hidden peer"
                        onchange="this.form.submit()" {{ !request('filter') ? 'checked' : '' }}>
                    <span class="cursor-pointer px-6 py-2 rounded-full border border-slate-200 text-sm font-medium transition-all inline-block
                peer-checked:bg-lime-400 peer-checked:border-lime-400 peer-checked:text-white 
                hover:border-lime-300 hover:bg-slate-50 shadow-sm">
                        All Projects
                    </span>
                </label>

                @foreach($categories as $cat)
                <label class="group">
                    <input type="radio"
                        name="filter" value="{{ $cat }}"
                        class="hidden peer"
                        onchange="this.form.submit()"
                        {{ request('filter') == $cat ? 'checked' : '' }}>
                    <span class="cursor-pointer px-6 py-2 rounded-full border border-slate-200 text-sm font-medium transition-all inline-block
                peer-checked:bg-lime-400 peer-checked:border-lime-400 peer-checked:text-white 
                hover:border-lime-300 hover:bg-slate-50 shadow-sm">
                        {{ $cat }}
                    </span>
                </label>
                @endforeach
            </div>

        </form>
    </div>

    @if($projects->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $project)
        <x-item.project-item :project="$project" />
        @endforeach
    </div>
    @else
    <div class="text-center py-20">
        <div class="bg-slate-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900">Project not found</h3>
    </div>
    @endif
</main>