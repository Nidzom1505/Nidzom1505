@props(['profile'])

<form action="{{route('profile.update', $profile->id)}}" method="POST" enctype="multipart/form-data" class="space-y-8">
    @csrf
    @method('PUT')

    @if ($errors->any())
    <div class="bg-red-50 text-red-500 p-4 rounded-xl text-sm">
        Gagal memperbarui profil. Silakan cek kembali inputan Anda.
    </div>
    @endif

    <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Nickname</label>
                <input type="text" name="nickname" value="{{ old('nickname', $profile->nickname) }}"
                    class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-xl focus:ring-2 focus:ring-lime-400 outline-none transition-all">
            </div>
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Location</label>
                <input type="text" name="lokasi" value="{{ old('lokasi', $profile->lokasi) }}"
                    class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-xl focus:ring-2 focus:ring-lime-400 outline-none transition-all">
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Headline</label>
            <input type="text" name="headline" value="{{ old('headline', $profile->headline) }}"
                class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-xl focus:ring-2 focus:ring-lime-400 outline-none transition-all">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Profile Picture</label>
                <div class="flex items-center gap-4">
                    <img src="{{ $profile->foto_profil }}"
                        class="w-20 h-20 rounded-2xl object-cover border-4 border-slate-50">
                    <input type="file" name="foto_profil" class="text-xs text-slate-500">
                </div>
            </div>

            <div class="mt-4">
                <label class="block text-xs font-bold uppercase text-slate-400 mb-2">Resume (PDF)</label>
                <input type="file" name="resume_link" class="text-xs text-slate-500">
                @if($profile->resume_link)
                <p class="text-[10px] text-lime-600 mt-1">File saat ini: {{ basename($profile->resume_link) }}</p>
                @endif
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Availability</label>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_available" class="sr-only peer" {{ $profile->is_available ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-lime-500 after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all"></div>
                    <span class="ml-3 text-sm font-bold text-slate-600 uppercase tracking-tighter">Available for Work</span>
                </label>
            </div>
        </div>
    </div>

    <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm space-y-6">
        <div>
            <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Short Bio</label>
            <textarea name="biografi_pendek" rows="2" class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-xl focus:ring-2 focus:ring-lime-400 outline-none transition-all">{{ old('biografi_pendek', $profile->biografi_pendek) }}</textarea>
        </div>
        <div>
            <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Full Biography</label>
            <textarea name="biografi_lengkap" rows="6" class="w-full px-5 py-3 bg-slate-50 border border-slate-100 rounded-xl focus:ring-2 focus:ring-lime-400 outline-none transition-all">{{ old('biografi_lengkap', $profile->biografi_lengkap) }}</textarea>
        </div>
    </div>

    <div class="flex justify-end">
        <button type="submit" class="px-10 py-4 bg-slate-900 text-white rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-lime-400 hover:text-slate-900 transition-all duration-300 shadow-lg">
            Save
        </button>
    </div>
</form>