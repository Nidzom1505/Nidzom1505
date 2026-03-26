<x-layout.base-layout>
    <x-layout.header />

    <main class="max-w-6xl mx-auto px-6 py-16 space-y-32">

        <section class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            <x-about.about-judul
                :nama="$profile->nickname"
                :tagline="$profile->biografi_pendek"
                :tahun="$tahun"
                :total="$total_project"
                :link_cv="$profile->resume_link" />

            <div class="lg:col-span-5 relative group">
                <div class="aspect-[4/5] rounded-[3.5rem] overflow-hidden bg-slate-100 border-[12px] border-white shadow-2xl transition-transform duration-700 group-hover:scale-[1.02]">
                    <img src="/assets/2.png" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700" alt="Profile">
                </div>
                <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-lime-400 -z-10 rounded-full blur-3xl opacity-30 animate-pulse"></div>
            </div>
        </section>

        <x-about.about-content :biografi="$profile->biografi_lengkap" />

        <x-about.about-tech :tech_stack="$tech_stack" :expertises="$expertises" />

        <x-about.about-experiences :pengalaman="$experiences" />

        <x-about.about-footer />

    </main>
</x-layout.base-layout>