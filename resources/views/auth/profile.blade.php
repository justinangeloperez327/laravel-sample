<x-layouts.dashboard>
    <div class="card w-96 bg-base-300">
        <div class="card-body">
            <h1 class="mt-1 text-lg font-bold mb-6">Profile</h1>

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')

                <label class="floating-label mb-6">
                    <input type="name" name="name" placeholder="Name" value="{{ old('name', Auth::user()->name) }}"
                        class="input input-bordered @error('name') input-error @enderror" required autofocus>
                    <span>Name</span>
                </label>
                @error('name')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror

                <label class="floating-label mb-6">
                    <input type="email" name="email" placeholder="Email"
                        value="{{ old('email', Auth::user()->email) }}"
                        class="input input-bordered @error('email') input-error @enderror" required>
                    <span>Email</span>
                </label>

                @error('email')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror

                <div class="form-control mt-8">
                    <button type="submit" class="btn btn-success btn-sm w-full">
                        Update Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard>
