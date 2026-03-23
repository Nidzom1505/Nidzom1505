<x-admin.admin-layout>
    <div class="space-y-8" x-data="{}">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Tech Stack & Skills</h2>
                <p class="text-slate-500 text-sm">Manage technologies shown on your About page.</p>
                <p>DOWNLOAD LOGO DI <a href="https://devicon.dev/" class="text-red-500">devicon</a></p>
            </div>
            <button @click="$dispatch('open-modal', { name: 'add-skill' })"
                class="px-6 py-3 bg-lime-400 rounded-2xl text-sm font-black text-slate-900 hover:bg-lime-500 transition-all shadow-lg shadow-lime-200">
                New Skill +
            </button>
        </div>

        @if(session('success'))
        <div class="p-4 bg-lime-100 text-lime-700 rounded-2xl font-bold text-sm border border-lime-200">
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach($skills as $skill)
            <x-admin.skill.skill-item :skill="$skill" />

            <x-admin.modal name="edit-skill-{{ $skill->id }}" title="Edit Skill">
                <x-admin.skill.form
                    :skill="$skill"
                    :action="route('skill.update', $skill)"
                    method="PUT" />
            </x-admin.modal>
            @endforeach
        </div>
    </div>

    <x-admin.modal name="add-skill" title="Add New Skill">
        <x-admin.skill.form :action="route('skill.store')" />
    </x-admin.modal>
</x-admin.admin-layout>