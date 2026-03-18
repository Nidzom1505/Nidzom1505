<x-layout.base-layout>
    <x-layout.header />
    <div class="container flex flex-col items-center justify-center mt-20">
        <img src="/assets/error.webp" alt="404 Not Found" class="w-64 h-64">
        <h1 class="text-4xl font-bold text-center mt-10">404 - Page Not Found</h1>
        <p class="text-center mt-4">Sorry, the page you are looking for does not exist.</p>
        <button class="mt-6 bg-lime-400 hover:bg-lime-700 text-white font-bold py-2 px-4 rounded"
            onclick="window.location.href='{{ route('dashboard') }}'">
            Go back to Home
        </button>
</x-layout.base-layout>