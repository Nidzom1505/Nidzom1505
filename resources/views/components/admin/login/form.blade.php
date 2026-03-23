<form action="{{ route('login') }}" method="POST" class="space-y-6">
    @csrf

    <div>
        <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2 ml-1 after:content-['*'] after:ml-0.5 after:text-red-500">Email Address</label>
        <input type="email" name="email" value="{{ old('email') }}" required
            class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 focus:border-lime-400 outline-none transition-all text-slate-900 font-medium @error('email') border-red-400 @enderror"
            placeholder="nidzom@example.com">
        @error('email')
        <p class="text-red-500 text-xs mt-2 ml-1 font-medium">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <div class="flex justify-between mb-2 ml-1">
            <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 after:content-['*'] after:ml-0.5 after:text-red-500">Password</label>
        </div>
        <input type="password" name="password" required
            class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-lime-400/20 focus:border-lime-400 outline-none transition-all text-slate-900 font-medium"
            placeholder="••••••••">
    </div>

    <div class="flex items-center justify-between px-1">
        <label class="flex items-center cursor-pointer group">
            <input type="checkbox" name="remember" class="w-4 h-4 rounded border-slate-300 text-lime-500 focus:ring-lime-500">
            <span class="ml-2 text-sm text-slate-500 group-hover:text-slate-900 transition-colors">Remember me</span>
        </label>
    </div>

    <button type="submit"
        class="w-full py-4 bg-slate-900 text-white rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-lime-400 hover:text-slate-900 transition-all duration-300 shadow-lg shadow-slate-200">
        Sign In →
    </button>
</form>