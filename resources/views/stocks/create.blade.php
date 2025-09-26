<x-layouts.dashboard>
    <div class="px-4 mx-2">
        <div class="flex mb-2 justify-between">
            <div class="">
                <h2 class="text-2xl font-semibold">Add Stock</h2>
            </div>
            <div class="">
                <a href="{{ route('stocks.index', $item->id) }}" class="btn btn-neutral btn-dash btn-sm">Back to
                    Stocks</a>
            </div>
        </div>
        <div class="card w-96 bg-base-300">
            <div class="card-body">
                <form method="POST" action="{{ route('stocks.store', $item->id) }}">
                    @csrf
                    <div class="mb-4">
                        <label for="warehouse_id" class="block text-sm font-medium mb-1">Item:</label>
                        <span class="text-md font-bold">{{ $item->name }}</span>
                    </div>
                    <div class="mb-4">
                        <label for="warehouse_id" class="block text-sm font-medium mb-1">Select Warehouse:</label>
                        <select id="warehouse_id" name="warehouse_id" class="select select-bordered w-full max-w-xs">
                            <option hidden>Please select warehouse</option>
                            @forelse ($warehouses as $warehouse)
                                <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                            @empty
                                <option disabled>No warehouses available</option>
                            @endforelse
                        </select>
                        @error('warehouse_id')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="quantity" class="block text-sm font-medium mb-1">Quantity:</label>
                        <input type="number" id="quantity" name="quantity"
                            class="input input-bordered w-full max-w-xs" required>
                        @error('quantity')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-dash">Add</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
