<header
	x-data="{ open: false }"
	class="sticky top-4 z-50 rounded-full mx-auto w-[95%] md:w-[90%] max-w-4xl animate-[nav-stick_linear_both] [animation-timeline:scroll()] [animation-range:0_100px]">
	<nav class="relative flex items-center justify-between px-2 py-2 rounded-full backdrop-blur-md transition-all duration-500">

		<div class="flex items-center gap-2 pl-4">
			<a href="{{route('dashboard')}}">
				<img src="{{ asset('assets/LogoResize.png') }}"
					alt="Logo"
					class="h-10 md:h-12 w-20 object-contain transition-all duration-300">
			</a>
		</div>

		<ul class="hidden md:flex items-center gap-1 text-[13px] font-bold uppercase tracking-tight text-slate-600">
			<li><a href="{{ route('dashboard') }}#home" class="px-4 py-2 rounded-full hover:text-slate-900 transition-colors">Home</a></li>
			<li><a href="{{ route('dashboard') }}#about" class="px-4 py-2 rounded-full hover:text-slate-900 transition-colors">About</a></li>
			<li><a href="{{ route('projects') }}" class="px-4 py-2 rounded-full hover:text-slate-900 transition-colors">Projects</a></li>
			<li><a href="{{ route('dashboard') }}#contact" class="px-4 py-2 rounded-full hover:text-slate-900 transition-colors">Contact</a></li>
		</ul>

		<div class="flex items-center gap-2 pr-1">

			<button
				@click="open = !open"
				class="md:hidden p-2 text-slate-600 hover:bg-slate-100 rounded-full transition-colors">
				<svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
				</svg>
				<svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		</div>

		<div
			x-show="open"
			x-transition:enter="transition ease-out duration-200"
			x-transition:enter-start="opacity-0 scale-95"
			x-transition:enter-end="opacity-100 scale-100"
			x-transition:leave="transition ease-in duration-75"
			x-transition:leave-start="opacity-100 scale-100"
			x-transition:leave-end="opacity-0 scale-95"
			@click.away="open = false"
			class="absolute top-full left-0 right-0 mt-3 p-4 bg-white/90 backdrop-blur-xl rounded-3xl shadow-xl border border-slate-100 md:hidden"
			style="display: none;">
			<ul class="flex flex-col gap-2 text-center font-bold uppercase tracking-widest text-slate-600">
				<li><a href="#home" class="block py-3 hover:bg-slate-50 rounded-2xl">Home</a></li>
				<li><a href="#about" class="block py-3 hover:bg-slate-50 rounded-2xl">About</a></li>
				<li><a href="#projects" class="block py-3 hover:bg-slate-50 rounded-2xl">Projects</a></li>
				<li><a href="#contact" class="block py-3 hover:bg-slate-50 rounded-2xl">Contact</a></li>
			</ul>
		</div>
	</nav>
</header>