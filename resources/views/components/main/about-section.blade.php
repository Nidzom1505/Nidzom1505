@props(['tahun', 'total_project'])

<section id="about" class="snap-start min-h-screen flex items-center justify-center px-6 bg-white">
    <div class="max-w-5xl w-full grid md:grid-cols-2 gap-20 items-center">
        <picture class="relative">
            <div class="aspect-square rounded-[3rem] bg-slate-100 overflow-hidden rotate-3 shadow-xl transition-transform hover:rotate-0 duration-500">
                <source srcset="/assets/3.avif" media="(max-width: 640px)">
                <source srcset="/assets/3.avif">
                <img src="/assets/3.avif" alt="Nidzom Imtiyaz" class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-lime-200 rounded-full -z-10 blur-2xl opacity-40"></div>
        </picture>

        <div>
            <span class="text-lime-600 font-bold uppercase tracking-widest text-[10px] mb-2 block">A Little Bit About Me</span>
            <h2 class="text-4xl font-black text-slate-900 mb-6 tracking-tight">I'm Nidzom Imtiyaz.</h2>

            <p class="text-slate-500 text-lg leading-relaxed mb-6">
                I am currently an <span class="text-slate-900 font-medium">Information Systems student</span> based in Indonesia. I spend most of my days exploring the intersection of business logic and software development.
            </p>

            <p class="text-slate-500 text-lg leading-relaxed mb-8">
                For me, technology is about more than just code—it's about creating tools that empower people. I’m always eager to learn, experiment, and collaborate on projects that challenge my perspective.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                <div class="group p-5 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-lime-200 transition-all duration-300">
                    <p class="text-[10px] uppercase tracking-[0.15em] font-bold text-slate-400 mb-2">Years of Experience</p>
                    <div class="flex items-baseline gap-1">
                        <p class="text-2xl font-black text-slate-900">{{ $tahun }}</p>
                        <span class="text-lime-500 font-bold">+</span>
                    </div>
                </div>

                <div class="group p-5 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-lime-200 transition-all duration-300">
                    <p class="text-[10px] uppercase tracking-[0.15em] font-bold text-slate-400 mb-2">Projects Completed</p>
                    <p class="text-2xl font-black text-slate-900">{{ $total_project }}</p>
                </div>

                <div class="group p-5 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-lime-200 transition-all duration-300">
                    <p class="text-[10px] uppercase tracking-[0.15em] font-bold text-slate-400 mb-2">Based In</p>
                    <div class="flex items-center gap-2">
                        <p class="text-lg font-bold text-slate-900">Surabaya, ID</p>
                        <span class="flex h-2 w-2 rounded-full bg-lime-500 animate-pulse"></span>
                    </div>
                </div>
            </div>

            <div class="flex items-center mb-5">
                <a href="{{route('about')}}" class="group flex items-center gap-3 text-slate-600 hover:text-lime-600 transition-all duration-300 font-bold text-sm">
                    <span class="relative">
                        Learn more about me
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-lime-400 group-hover:w-full transition-all duration-300"></span>
                    </span>
                    <div class="p-2 bg-slate-50 group-hover:bg-lime-50 rounded-full group-hover:translate-x-2 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </a>
            </div>

            <a href="#contact" class="inline-flex items-center gap-3 font-bold text-slate-900 group mt-5">
                <span class="bg-slate-900 text-white p-2 rounded-full group-hover:bg-lime-500 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </span>
                Say Hello!
            </a>
        </div>
    </div>
</section>