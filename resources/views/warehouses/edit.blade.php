<x-layouts.dashboard>
    <div class="card w-96 bg-base-300">
        <div class="card-body">
            <h1 class="mt-1 text-lg font-bold mb-6">Edit Warehouse</h1>

            <form method="POST" action="{{ route('warehouses.update', $warehouse->id) }}">
                @csrf
                @method('PUT')

                <label class="floating-label mb-6">
                    <input type="name" name="name" placeholder="Item Name"
                        value="{{ $warehouse->name ?? old('name') }}"
                        class="input input-bordered @error('name') input-error @enderror" required autofocus>
                    <span>Name</span>
                </label>
                @error('name')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror


                <label class="floating-label mb-6">
                    <input type="text" name="description" placeholder="Description"
                        value="{{ $warehouse->description ?? old('description') }}"
                        class="input input-bordered @error('description') input-error @enderror">
                    <span>Description</span>
                </label>
                @error('description')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror

                <label class="floating-label mb-6">
                    <input type="text" name="location" placeholder="Location"
                        value="{{ $warehouse->location ?? old('location') }}"
                        class="input input-bordered @error('location') input-error @enderror" required>
                    <span>Location</span>
                </label>
                @error('location')
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
