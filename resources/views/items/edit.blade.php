<x-layouts.dashboard>
    <div class="card w-96 bg-base-300">
        <div class="card-body">
            <h1 class="mt-1 text-lg font-bold mb-6">Edit Item</h1>

            <form method="POST" action="/items/{{ $item->id }}">
                @csrf
                @method('PUT')

                <label class="floating-label mb-6">
                    <input type="name" name="name" placeholder="Item Name" value="{{ old('name', $item->name) }}"
                        class="input input-bordered @error('name') input-error @enderror" required autofocus>
                    <span>Name</span>
                </label>
                @error('name')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror

                <div class="form-control mt-8">
                    <button type="submit" class="btn btn-success btn-sm w-full">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
