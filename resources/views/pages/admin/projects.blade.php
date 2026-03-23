<x-admin.admin-layout>
    <div class="space-y-8" x-data="{}">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Project Showcase</h2>
                <p class="text-slate-500 text-sm">Manage and showcase your best work.</p>
            </div>
            <button @click="$dispatch('open-modal', { name: 'add-project' })"
                class="px-6 py-3 bg-lime-400 rounded-2xl text-sm font-black text-slate-900 hover:bg-lime-500 transition-all shadow-lg shadow-lime-200">
                Add New Project +
            </button>
        </div>

        <div class="grid grid-cols-1 gap-4">
            @foreach($projects as $project)
            <x-admin.project.project-item :project="$project" />

            <x-admin.modal name="edit-project-{{ $project->id }}" title="Edit Project">
                <x-admin.project.form
                    :project="$project"
                    :action="route('project.update', $project)"
                    :skills="$skills"
                    method="PUT" />
            </x-admin.modal>
            @endforeach
        </div>
    </div>

    <x-admin.modal name="add-project" title="Create New Project">
        <x-admin.project.form :action="route('project.store')" :skills="$skills" />
    </x-admin.modal>
</x-admin.admin-layout>