@props(['tahun', 'total_project'])

<section id="about" class="snap-start min-h-screen flex items-center justify-center px-6 bg-white">
    <div class="max-w-5xl w-full grid md:grid-cols-2 gap-20 items-center">
        <div class="relative">
            <div class="aspect-square rounded-[3rem] bg-slate-100 overflow-hidden rotate-3 shadow-xl transition-transform hover:rotate-0 duration-500">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Nidzom" alt="Nidzom Imtiyaz" class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-lime-200 rounded-full -z-10 blur-2xl opacity-40"></div>
        </div>

        <div>
            <span class="text-lime-600 font-bold uppercase tracking-widest text-[10px] mb-2 block">A Little Bit About Me</span>
            <h2 class="text-4xl font-black text-slate-900 mb-6 tracking-tight">I'm Nidzom Imtiyaz.</h2>

            <p class="text-slate-500 text-lg leading-relaxed mb-6">
                I am currently an <span class="text-slate-900 font-medium">Information Systems student</span> based in Indonesia. I spend most of my days exploring the intersection of business logic and software development.
            </p>

            <p class="text-slate-500 text-lg leading-relaxed mb-8">
                For me, technology is about more than just code—it's about creating tools that empower people. I’m always eager to learn, experiment, and collaborate on projects that challenge my perspective.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-[10px] uppercase tracking-wider font-bold text-slate-400 mb-1">Years of Experience</p>
                    <p class="text-slate-900 font-bold">{{ $tahun }}+</p>
                </div>

                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-[10px] uppercase tracking-wider font-bold text-slate-400 mb-1">Projects Completed</p>
                    <p class="text-slate-900 font-bold">{{ $total_project }}</p>
                </div>

                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-[10px] uppercase tracking-wider font-bold text-slate-400 mb-1">Based In</p>
                    <p class="text-slate-900 font-bold">Surabaya, ID</p>
                </div>
            </div>

            <a href="#contact" class="inline-flex items-center gap-3 font-bold text-slate-900 group">
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