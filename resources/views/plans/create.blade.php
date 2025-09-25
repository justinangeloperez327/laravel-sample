<x-layouts.dashboard>
    <div class="card w-96 bg-base-300">
        <div class="card-body">
            <h1 class="mt-1 text-lg font-bold mb-6">Add Plan</h1>

            <form method="POST" action="/plans">
                @csrf

                <label class="floating-label mb-6">
                    <input type="name" name="name" placeholder="Plan Name" value="{{ old('name') }}"
                        class="input input-bordered @error('name') input-error @enderror" required autofocus>
                    <span>Name</span>
                </label>
                @error('name')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>

                    </div>
                @enderror

                <label for="" class="floating-label mb-6">
                    <input type="text" name="code" placeholder="Plan Code" value="{{ old('code') }}"
                        class="input input-bordered @error('code') input-error @enderror" required>
                    <span>CODE</span>
                </label>

                @error('code')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror

                <label class="floating-label mb-6">
                    <input type="number" step="0.01" name="price" placeholder="Plan Price"
                        value="{{ old('price') }}" class="input input-bordered @error('price') input-error @enderror"
                        required>
                    <span>Price (USD)</span>
                </label>

                @error('price')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>

                    </div>
                @enderror

                <label class="mb-6">
                    <span class="label-text">Billing Cycle</span>
                    <select name="billing_cycle"
                        class="select select-bordered w-full mt-1 @error('billing_cycle') select-error @enderror"
                        required>
                        <option value="monthly" {{ old('billing_cycle') == 'monthly' ? 'selected' : '' }}>Monthly
                        </option>
                        <option value="yearly" {{ old('billing_cycle') == 'yearly' ? 'selected' : '' }}>Yearly
                        </option>
                    </select>
                </label>

                @error('billing_cycle')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
                <label class="mb-6">
                    <span class="label-text">Features (optional)</span>
                    <textarea name="features" placeholder="List features separated by commas"
                        class="textarea textarea-bordered w-full mt-1 @error('features') textarea-error @enderror" rows="3">{{ old('features') }}</textarea>
                    <span class="label-text-alt">E.g., Feature 1, Feature 2, Feature 3</span>
                </label>
                @error('features')
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
