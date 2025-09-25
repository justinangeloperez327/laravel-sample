<x-layouts.dashboard>
    <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="card w-96 bg-gradient-to-br from-blue-500 to-indigo-600 shadow-xl rounded-xl text-white">
            <div class="card-body flex flex-col items-center justify-center p-8">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-white opacity-80" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                    </svg>
                </div>
                <span class="text-lg font-semibold tracking-wide">Total Items</span>
                <span class="text-4xl font-bold mt-2">{{ $totalItems }}</span>
            </div>
        </div>
        <div class="card w-96 bg-gradient-to-br from-blue-500 to-indigo-600 shadow-xl rounded-xl text-white">
            <div class="card-body flex flex-col items-center justify-center p-8">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-white opacity-80" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                    </svg>
                </div>
                <span class="text-lg font-semibold tracking-wide">Total Warehouses</span>
                <span class="text-4xl font-bold mt-2">{{ $totalWarehouses }}</span>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
