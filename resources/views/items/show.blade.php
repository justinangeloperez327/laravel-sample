<x-layouts.dashboard>
    <div class="card w-96 bg-base-300">
        <div class="card-body">
            <h1 class="mt-1 text-xl font-bold text-center mb-6">Item Show</h1>
            <p class="mb-2"><span class="font-semibold">ID:</span> {{ $item->id }}</p>
            <p class="mb-2"><span class="font-semibold">Name:</span> {{ $item->name }}</p>
            <p class="mb-2"><span class="font-semibold">Created At:</span> {{ $item->created_at }}</p>
            <p class="mb-2"><span class="font-semibold">Updated At:</span> {{ $item->updated_at }}</p>
        </div>
    </div>
</x-layouts.dashboard>
