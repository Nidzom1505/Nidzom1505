@props(['projects'])

<section id="projects" class="snap-start min-h-screen flex flex-col justify-center px-6 bg-slate-50 py-20">
    <div class="max-w-6xl mx-auto w-full">
        <div class="flex items-end justify-between mb-12">
            <div>
                <h2 class="text-4xl font-black text-slate-900 tracking-tight">Selected Works.</h2>
                <p class="text-slate-500 mt-2">A collection of systems I've built from the ground up.</p>
            </div>
            <a href="{{ route('projects') }}" class="text-xs font-bold text-slate-400 hover:text-slate-900 transition-all tracking-widest">VIEW ARCHIVE →</a>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            @forelse ($projects as $project)
            <x-item.project-item :project="$project" />
            @empty
            <div class="flex flex-col items-center justify-center p-12 bg-slate-50 border-2 border-dashed border-slate-200 rounded-3xl">
                <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="box-archive" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900">No Projects Found</h3>
            </div>
            @endforelse
        </div>
    </div>
</section>