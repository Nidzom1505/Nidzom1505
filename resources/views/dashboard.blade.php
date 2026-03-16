<x-layout.base-layout>
    <div class="relative min-h-screen bg-slate-50">

        <x-layout.header />

        <main class="snap-y snap-mandatory h-screen overflow-y-auto scroll-smooth">
            <section id="home" class="snap-start min-h-screen flex flex-col justify-center items-center px-6 text-center bg-slate-50">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-lime-50 text-lime-600 text-[10px] font-bold uppercase tracking-widest my-5 border border-lime-100">
                    <span class="flex h-2 w-2 rounded-full bg-lime-500 animate-pulse"></span>
                    Available for collaboration
                </div>

                <h1 class="text-6xl md:text-8xl font-black text-slate-900 tracking-tighter mb-6 leading-[0.9]">
                    Muhammad Nidzom Imtiyaz <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-emerald-600">Software Engineer</span>
                </h1>

                <p class="max-w-2xl text-slate-500 text-lg md:text-xl mb-12 leading-relaxed font-light">
                    Engineering digital excellence by blending <span class="text-slate-900 font-medium">robust technical architecture</span> with human-centered design.
                    Dedicated to solving complex problems through clean code and innovative software solutions that scale.
                </p>

                <div class="flex flex-col md:flex-row gap-4">
                    <a href="#projects" class="px-8 py-4 bg-slate-900 text-white rounded-full font-bold hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        Explore Work
                    </a>
                    <a href="#contact" class="px-8 py-4 bg-white text-slate-900 border border-slate-200 rounded-full font-bold hover:bg-slate-50 transition-all duration-300">
                        Get in Touch
                    </a>
                </div>
            </section>

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
                                <p class="text-[10px] uppercase tracking-wider font-bold text-slate-400 mb-1">Current Focus</p>
                                <p class="text-slate-900 font-bold">Information Systems</p>
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

            <section id="projects" class="snap-start min-h-screen flex flex-col justify-center px-6 bg-slate-50 py-20">
                <div class="max-w-6xl mx-auto w-full">
                    <div class="flex items-end justify-between mb-12">
                        <div>
                            <h2 class="text-4xl font-black text-slate-900 tracking-tight">Selected Works.</h2>
                            <p class="text-slate-500 mt-2">A collection of systems I've built from the ground up.</p>
                        </div>
                        <a href="#" class="text-xs font-bold text-slate-400 hover:text-slate-900 transition-all tracking-widest">VIEW ARCHIVE →</a>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">

                        <div class="group bg-white rounded-[2rem] p-3 border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500">
                            <div class="relative aspect-[16/10] rounded-[1.5rem] overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">

                                <div class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                                    <a href="#" class="p-3 bg-white rounded-full hover:bg-lime-400 transition-colors" title="View on GitHub">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.041-1.412-4.041-1.412-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="px-6 py-2 bg-white rounded-full font-bold text-sm hover:bg-lime-400 transition-colors">
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 flex justify-between items-start">
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-lime-600 transition-colors">Management Systems</h3>
                                    <p class="text-xs font-medium text-slate-400 uppercase tracking-widest mt-1">Enterprise Solution • 2026</p>
                                </div>
                                <a href="#" class="text-slate-300 hover:text-slate-900 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="group bg-white rounded-[2rem] p-3 border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500">
                            <div class="relative aspect-[16/10] rounded-[1.5rem] overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">

                                <div class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                                    <a href="#" class="p-3 bg-white rounded-full hover:bg-lime-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.041-1.412-4.041-1.412-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="px-6 py-2 bg-white rounded-full font-bold text-sm hover:bg-lime-400 transition-colors">
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 flex justify-between items-start">
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-lime-600 transition-colors">Information Portal</h3>
                                    <p class="text-xs font-medium text-slate-400 uppercase tracking-widest mt-1">Web Platform • 2025</p>
                                </div>
                                <a href="#" class="text-slate-300 hover:text-slate-900 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section id="contact" class="snap-start min-h-screen flex flex-col justify-between px-6 bg-white pt-32 pb-10">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-lime-50 text-lime-600 text-[10px] font-bold uppercase tracking-[0.2em] mb-8 border border-lime-100">
                        <span class="flex h-2 w-2 rounded-full bg-lime-500 animate-pulse"></span>
                        Let's Work Together
                    </div>

                    <h2 class="text-5xl md:text-8xl font-black mb-10 tracking-tighter leading-[0.9] text-slate-900">
                        Ready to start <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-emerald-600">something great?</span>
                    </h2>

                    <p class="text-slate-500 text-lg md:text-xl mb-12 max-w-2xl mx-auto font-light leading-relaxed">
                        I am currently seeking new opportunities to collaborate on innovative projects.
                        Whether you have a question or just want to connect, my inbox is always open.
                    </p>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2 border-t border-slate-100 pt-16">
                        <a href="#" class="group p-4 rounded-2xl hover:bg-slate-50 transition-all">
                            <span class="text-slate-400 group-hover:text-slate-900 text-[11px] font-bold uppercase tracking-widest transition-colors">LinkedIn</span>
                        </a>
                        <a href="#" class="group p-4 rounded-2xl hover:bg-slate-50 transition-all">
                            <span class="text-slate-400 group-hover:text-slate-900 text-[11px] font-bold uppercase tracking-widest transition-colors">GitHub</span>
                        </a>
                        <a href="#" class="group p-4 rounded-2xl hover:bg-slate-50 transition-all">
                            <span class="text-slate-400 group-hover:text-pink-600 text-[11px] font-bold uppercase tracking-widest transition-colors">Instagram</span>
                        </a>
                        <a href="#" class="group p-4 rounded-2xl hover:bg-slate-50 transition-all">
                            <span class="text-slate-400 group-hover:text-slate-900 text-[11px] font-bold uppercase tracking-widest transition-colors">TikTok</span>
                        </a>
                        <a href="#" class="group p-4 rounded-2xl hover:bg-slate-50 transition-all">
                            <span class="text-slate-400 group-hover:text-red-600 text-[11px] font-bold uppercase tracking-widest transition-colors">YouTube</span>
                        </a>
                        <a href="mailto:muhammadnidzomimtiyaz@email.com" class="group p-4 rounded-2xl hover:bg-slate-50 transition-all">
                            <span class="text-slate-400 group-hover:text-lime-600 text-[11px] font-bold uppercase tracking-widest transition-colors">Email</span>
                        </a>
                    </div>
                </div>

                <div class="max-w-6xl mx-auto w-full flex flex-col md:flex-row justify-between items-center border-t border-slate-100 pt-10 mt-20">
                    <p class="text-slate-400 text-xs font-medium">© 2026 Muhammad Nidzom Imtiyaz.</p>
                    <div class="flex items-center gap-4 mt-4 md:mt-0">
                        <span class="text-slate-300 text-[10px] uppercase tracking-[0.3em]">Built with</span>
                        <span class="px-3 py-1 bg-lime-50 text-lime-600 rounded-md text-[10px] font-bold uppercase tracking-widest">Passion</span>
                        <span class="text-slate-300 text-[10px] uppercase tracking-[0.3em]">& Precision</span>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-layout.base-layout>