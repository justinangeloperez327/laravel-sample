<x-layouts.dashboard>
    <div class="px-4 mx-2">
        <div class="flex mb-2 justify-between">
            <div class="">
                <h2 class="text-2xl font-semibold">Adjust Stock</h2>
            </div>
            <div class="">
                <a href="{{ route('stocks.index', $stock->item_id) }}" class="btn btn-neutral btn-dash btn-sm">Back to
                    Stocks</a>
            </div>
        </div>

        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 p-4">
            <form method="POST" action="{{ route('stocks.update', $stock->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="warehouse_id" class="block text-sm font-medium mb-1">Item:</label>
                    <span class="text-md font-bold">{{ $stock->item->name }}</span>
                </div>

                <div class="mb-4">
                    <label for="warehouse_id" class="block text-sm font-medium mb-1">Warehouse:</label>
                    <span class="text-md font-bold">{{ $stock->warehouse->name }}</span>
                </div>

                <div class="mb-4">
                    <label for="quantity" class="block text-sm font-medium mb-1">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" class="input input-bordered w-full max-w-xs"
                        value="{{ old('quantity', $stock->quantity) }}" required>
                    @error('quantity')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-dash">Update</button>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
