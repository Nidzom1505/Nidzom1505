<x-layout.base-layout>
    <div class="relative min-h-screen bg-slate-50 flex flex-col">
        <x-layout.header />

        <x-project.main-project :projects="$projects" :categories="$categories" />
    </div>
</x-layout.base-layout>