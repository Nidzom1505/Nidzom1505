@props(['experience' => null, 'action', 'method' => 'POST'])

<form action="{{ $action }}" method="POST" class="space-y-5 text-left">
    @csrf
    @if($method !== 'POST')
    @method($method)
    @endif

    <div class="space-y-1">
        <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-2">Position</label>
        <input type="text" name="posisi" value="{{ old('posisi', $experience->posisi ?? '') }}"
            placeholder="e.g. Senior Backend Engineer" required
            class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
    </div>

    <div class="space-y-1">
        <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-2">Company / Institution</label>
        <input type="text" name="instansi" value="{{ old('instansi', $experience->instansi ?? '') }}"
            placeholder="e.g. PT. Teknologi Maju" required
            class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div class="space-y-1">
            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-2">Period</label>
            <input type="text" name="period" value="{{ old('period', $experience->period ?? '') }}"
                placeholder="e.g. Jan 2022 - Present" required
                class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
        </div>
        <div class="space-y-1">
            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-2">Order (Sorting)</label>
            <input type="number" name="urutan" value="{{ old('urutan', $experience->urutan ?? 0) }}"
                class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">
        </div>
    </div>

    <div class="space-y-1">
        <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-2">Description</label>
        <textarea name="deskripsi_tugas" rows="4" placeholder="What did you do there?"
            class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 outline-none transition-all">{{ old('deskripsi_tugas', $experience->deskripsi_tugas ?? '') }}</textarea>
    </div>

    <button type="submit" class="w-full py-5 bg-slate-900 text-white rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:bg-lime-400 hover:text-slate-900 transition-all duration-300 shadow-lg shadow-slate-200">
        {{ $experience ? 'Update' : 'Save' }} Experience →
    </button>
</form>