<x-layout.base-layout>

    <div class="relative h-screen bg-slate-50 overflow-hidden flex flex-col">

        <main id="main-content" class="flex-grow snap-y snap-mandatory overflow-y-auto scroll-smooth">

            <x-layout.header />

            <x-main.home-section id="home" />
            <x-main.about-section id="about" :tahun="$data['pengalaman']" :total_project="$data['total_project']" />
            <x-main.projects-section :projects="$data['recent_projects']" />
            <x-main.contact-section />
        </main>

    </div>

</x-layout.base-layout>