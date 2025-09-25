<x-layouts.base>
    {{-- <x-auth-header /> --}}

    <main class="hero min-h-screen">
        <div class="hero-content flex-col">
            <a href="/" class="text-4xl font-bold my-2">Inventory</a>
            {{ $slot }}
        </div>
    </main>
    <x-footer />
</x-layouts.base>
