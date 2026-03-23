@props(['skill' => null, 'action', 'method' => 'POST'])

<form action="{{ $action }}" method="POST" class="space-y-5">
    @csrf
    @if($method !== 'POST') @method($method) @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="space-y-1">
            <label class="text-[10px] font-black uppercase text-slate-400 ml-1">Skill Name</label>
            <input type="text" name="name" value="{{ old('name', $skill?->name) }}" required
                class="w-full px-4 py-3 bg-slate-50 border border-slate-100 rounded-xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all text-sm font-bold">
        </div>

        <div class="space-y-1">
            <label class="text-[10px] font-black uppercase text-slate-400 ml-1">Category</label>
            <select name="category" class="w-full px-4 py-3 bg-slate-50 border border-slate-100 rounded-xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all text-sm font-bold">
                <option value="tech" @selected($skill?->category == 'tech')>Core Tech (Language/Framework)</option>
                <option value="tools" @selected($skill?->category == 'tools')>Tools & Software</option>
                <option value="others" @selected($skill?->category == 'others')>Others</option>
            </select>
        </div>
    </div>

    <div class="space-y-1">
        <label class="text-[10px] font-black uppercase text-slate-400 ml-1">Icon URL (SVG/PNG)</label>
        <input type="url" name="icon_url" value="{{ old('icon_url', $skill?->icon_url) }}" required placeholder="https://cdn.simpleicons.org/laravel/FF2D20"
            class="w-full px-4 py-3 bg-slate-50 border border-slate-100 rounded-xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all text-sm">
    </div>

    <div class="space-y-1">
        <label class="text-[10px] font-black uppercase text-slate-400 ml-1">Display Order (Smaller shows first)</label>
        <input type="number" name="order" value="{{ old('order', $skill?->order ?? 0) }}"
            class="w-full px-4 py-3 bg-slate-50 border border-slate-100 rounded-xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all text-sm font-bold">
    </div>

    <div class="flex justify-end pt-2">
        <button type="submit" class="px-8 py-3 bg-slate-900 text-white rounded-xl font-black text-xs uppercase tracking-widest hover:bg-lime-400 hover:text-slate-900 transition-all">
            {{ $skill ? 'Update Skill' : 'Save Skill' }}
        </button>
    </div>
</form>