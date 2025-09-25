<x-layouts.dashboard>
    <div class="card w-96 bg-base-300">
        <div class="card-body">
            <h1 class="mt-1 text-lg font-bold mb-6">Add Item</h1>

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

                <div class="form-control mt-8">
                    <button type="submit" class="btn btn-primary btn-sm w-full">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
