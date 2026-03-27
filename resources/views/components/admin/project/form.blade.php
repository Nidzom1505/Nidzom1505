@props(['project' => null, 'action', 'method' => 'POST', 'skills' => []])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if($method !== 'POST') @method($method) @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Project Name</label>
            <input type="text" name="nama_project" value="{{ old('nama_project', $project?->nama_project) }}" required
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
        </div>
        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Category / Jenis</label>
            <input type="text" name="jenis" value="{{ old('jenis', $project?->jenis) }}" placeholder="Web App, IoT, etc" required
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
        </div>
    </div>

    <div class="space-y-2">
        <label class="text-xs font-black uppercase tracking-widest text-slate-400">Description</label>
        <textarea name="deskripsi" rows="3" required
            class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">{{ old('deskripsi', $project?->deskripsi) }}</textarea>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">GitHub Link</label>
            <input type="url" name="link_github" value="{{ old('link_github', $project?->link_github) }}"
                placeholder="https://github.com/..."
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
        </div>
        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Live Project Link</label>
            <input type="url" name="link_project" value="{{ old('link_project', $project?->link_project) }}"
                placeholder="https://yourproject.com"
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Challenges (Tantangan)</label>
            <textarea name="tantangan" rows="2"
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">{{ old('tantangan', $project?->tantangan) }}</textarea>
        </div>
        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Solution (Solusi)</label>
            <textarea name="solusi" rows="2"
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">{{ old('solusi', $project?->solusi) }}</textarea>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Your Contribution</label>
            <input type="text" name="kontribusi" value="{{ old('kontribusi', $project?->kontribusi) }}"
                placeholder="e.g. Lead Developer, UI Designer"
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
        </div>
        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Context</label>
            <input type="text" name="konteks" value="{{ old('konteks', $project?->konteks) }}"
                placeholder="e.g. Freelance, Personal Project, Company"
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Year</label>
            <input type="number" name="tahun" value="{{ old('tahun', $project?->tahun ?? date('Y')) }}" required
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
        </div>

        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Main Image</label>
            <input type="file" name="image"
                class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-black file:bg-lime-100 file:text-lime-700 hover:file:bg-lime-200">
        </div>

        <div class="space-y-2">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400">Additional Screenshots (Multiple)</label>
            <input type="file" name="new_screenshots[]" multiple
                class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-black file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200">
        </div>

        <div class="space-y-4 col-span-full">
            <label class="text-xs font-black uppercase tracking-widest text-slate-400 flex items-center gap-2">
                Tech Stack
                <span class="text-[10px] lowercase font-medium text-slate-300">(Pulled from your Skills table)</span>
            </label>

            <div class="flex flex-wrap gap-2 max-h-64 overflow-y-auto p-1 custom-scrollbar items-center">
                @forelse($skills as $skill)
                <label class="group relative cursor-pointer select-none">
                    <input type="checkbox" name="tech_stack[]" value="{{ $skill->name }}"
                        @checked($project && in_array($skill->name, $project->tech_stack ?? []))
                    class="sr-only peer">

                    <div class="px-3 py-2 bg-slate-50 border border-slate-100 rounded-xl text-xs font-bold text-slate-500 
                        peer-checked:bg-lime-400 peer-checked:border-lime-400 peer-checked:text-slate-900 
                        hover:bg-slate-100 transition-all duration-200 flex items-center gap-2 shadow-sm">

                        @if($skill->icon_url)
                        <img src="{{ $skill->icon_url }}" class="w-3 h-3 object-contain grayscale group-hover:grayscale-0 peer-checked:grayscale-0">
                        @endif

                        <span>{{ $skill->name }}</span>
                    </div>
                </label>
                @empty
                <p class="text-xs text-slate-400 italic">No skills found. Please add skills in the Skills menu first.</p>
                @endforelse
                <a href="{{ route('skill.edit') }}" class="text-[10px] text-lime-600 hover:text-lime-700 font-bold underline decoration-dotted">
                    + Add New Skill
                </a>
            </div>
        </div>
    </div>

    <div class="flex justify-end pt-4">
        <button type="submit" class="px-8 py-4 bg-slate-900 text-white rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-lime-400 hover:text-slate-900 transition-all duration-300">
            {{ $project ? 'Update Project' : 'Save Project' }} →
        </button>
    </div>
</form>