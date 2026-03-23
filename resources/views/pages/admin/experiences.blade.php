<x-admin.admin-layout>
    <div class="space-y-8" x-data="{}">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Work Experiences</h2>
                <p class="text-slate-500 text-sm">Manage your professional journey shown on your profile.</p>
            </div>
            <button @click="$dispatch('open-modal', { name: 'add-experience' })"
                class="px-6 py-3 bg-lime-400 rounded-2xl text-sm font-black text-slate-900 hover:bg-lime-500 transition-all shadow-lg shadow-lime-200">
                New Experience +
            </button>
        </div>

        @if(session('success'))
        <div class="p-4 bg-lime-100 text-lime-700 rounded-2xl font-bold text-sm border border-lime-200">
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($experiences as $exp)
            <x-admin.experience.experience-item :experience="$exp" />

            <x-admin.modal name="edit-experience-{{ $exp->id }}" title="Edit Experience">
                <x-admin.experience.form
                    :experience="$exp"
                    :action="route('experience.update', $exp->id)"
                    method="PUT" />
            </x-admin.modal>
            @endforeach
        </div>
    </div>

    {{-- Modal Tambah --}}
    <x-admin.modal name="add-experience" title="Add New Experience">
        <x-admin.experience.form :action="route('experience.store')" method="POST" />
    </x-admin.modal>
</x-admin.admin-layout>