<x-layouts.dashboard>
    <div class="card w-96 bg-base-300">
        <div class="card-body">
            <h1 class="mt-1 text-xl font-bold text-center mb-6">Warehouse Show</h1>
            <p class="mb-2"><span class="font-semibold">ID:</span> {{ $warehouse->id }}</p>
            <p class="mb-2"><span class="font-semibold">Name:</span> {{ $warehouse->name }}</p>

        </div>
    </div>
</x-layouts.dashboard>
