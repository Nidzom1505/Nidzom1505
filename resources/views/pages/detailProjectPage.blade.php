<x-layout.base-layout>
    <div class="max-w-6xl mx-auto py-12 px-6">
        <div class="flex items-center justify-between mb-10">
            <a href="{{ url()->previous() }}" class="group flex items-center text-slate-500 hover:text-lime-600 transition-colors font-medium">
                <span class="mr-2 transform group-hover:-translate-x-1 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>

                </span>
                Back
            </a>

            <div class="flex gap-3">
                <span class="px-4 py-1.5 bg-lime-100 text-lime-700 rounded-full text-xs font-bold uppercase tracking-wider">
                    Completed
                </span>
            </div>
        </div>

        <x-detail-project.detail-header :nama="$project->nama_project" :linkProject="$project->link_project" />

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <x-detail-project.detail-main
                :image="$project->image_url"
                :nama="$project->nama_project"
                :tantangan="$project->tantangan"
                :solusi="$project->solusi"
                :deskripsi="$project->deskripsi"
                :screenshots="$project->screenshots" />

            <div class="lg:col-span-4 space-y-8">
                <div class="sticky top-10 space-y-8">

                    <x-detail-project.detail-informasi
                        :tahun="$project->tahun"
                        :jenis="$project->jenis"
                        :kontribusi="$project->kontribusi"
                        :konteks="$project->konteks"
                        :tech="$project->tech_stack" />

                    @if($project->link_github)
                    <x-detail-project.detail-github :linkGithub="$project->link_github" />
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-layout.base-layout>