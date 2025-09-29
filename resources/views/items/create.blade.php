<x-layouts.dashboard>
    <div class="px-4 mx-2">
        <div class="flex mb-2 justify-between">
            <div class="">
                <h2 class="text-2xl font-semibold">Add New Item</h2>
            </div>
            <div class="">
                <a href="{{ route('items.index') }}" class="btn btn-neutral btn-dash btn-sm">Back to Items</a>
            </div>
        </div>
        <div class="card w-96 bg-base-100">
            <div class="card-body">
                <h1 class="mt-1 text-lg font-bold mb-6">Item Form</h1>

                <form method="POST" action="/items">
                    @csrf

                    <label class="floating-label mb-6">
                        <input type="name" name="name" placeholder="Item Name" value="{{ old('name') }}"
                            class="input input-bordered @error('name') input-error @enderror" required autofocus>
                        <span>Name</span>
                    </label>
                    @error('name')
                        <div class="label -mt-4 mb-2">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                    @enderror

                    <label class="floating-label mb-6">
                        <input type="text" name="description" placeholder="Item Description"
                            value="{{ old('description') }}"
                            class="input input-bordered @error('description') input-error @enderror">
                        <span>Description (optional)</span>
                    </label>

                    @error('description')
                        <div class="label -mt-4 mb-2">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                    @enderror

                    <label class="floating-label mb-6">
                        <input type="text" name="sku" placeholder="SKU" value="{{ old('sku') }}"
                            class="input input-bordered @error('sku') input-error @enderror" required>
                        <span>SKU</span>
                    </label>
                    @error('sku')
                        <div class="label -mt-4 mb-2">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                    @enderror

                    <label class="floating-label mb-6">
                        <input type="number" name="reorder_level" placeholder="Reorder Level"
                            value="{{ old('reorder_level') }}"
                            class="input input-bordered @error('reorder_level') input-error @enderror" min="0"
                            required>
                        <span>Reorder Level</span>
                    </label>
                    @error('reorder_level')
                        <div class="label -mt-4 mb-2">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                    @enderror

                    <button type="submit" class="btn btn-dash">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
