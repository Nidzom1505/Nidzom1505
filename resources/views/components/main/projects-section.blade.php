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
            @foreach ($projects as $project)
            <x-item.project-item :project="$project" />
            @endforeach
        </div>
    </div>
</section>