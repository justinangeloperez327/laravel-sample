<x-layouts.dashboard>
    <div class="flex gap-5">
        <div class="card w-96 bg-base-300">
            <div class="card-body">
                <h1 class="mt-1 text-lg font-bold mb-6">Profile</h1>

                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')

                    <label class="floating-label mb-6">
                        <input type="name" name="name" placeholder="Name"
                            value="{{ old('name', Auth::user()->name) }}"
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
        <div class="card w-96 bg-base-300">
            <div class="card-body">
                <h1 class="mt-1 text-lg font-bold mb-6">Avatar</h1>

                @if (Auth::user()->image)
                    <div class="mb-4">
                        <img src="{{ Auth::user()->image->url() }}" alt="Current Avatar"
                            class="h-16 w-16 rounded-full object-cover">
                    </div>

                    <form method="POST" action="{{ route('avatar.update', Auth::user()->image->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <label class="floating-label mb-6">
                            <input type="file" name="avatar"
                                class="file-input file-input-bordered w-full @error('avatar') file-input-error @enderror"
                                required>
                            <span>New Avatar</span>
                        </label>
                        @error('avatar')
                            <div class="label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror

                        <div class="form-control mt-8">
                            <button type="submit" class="btn btn-success btn-sm w-full">
                                Update Avatar
                            </button>
                        </div>
                    </form>
                @else
                    <form method="POST" action="{{ route('avatar.store') }}" enctype="multipart/form-data">
                        @csrf

                        <label class="floating-label mb-6">
                            <input type="file" name="avatar"
                                class="file-input file-input-bordered w-full @error('avatar') file-input-error @enderror"
                                required autofocus>
                            <span>Avatar</span>
                        </label>
                        @error('avatar')
                            <div class="label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror

                        <div class="form-control mt-8">
                            <button type="submit" class="btn btn-success btn-sm w-full">
                                Upload Avatar
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</x-layouts.dashboard>
