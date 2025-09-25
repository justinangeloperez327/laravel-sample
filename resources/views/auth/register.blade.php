<x-layouts.auth>
    <x-slot:title>
        Register
    </x-slot:title>

    <div class="card w-96 bg-base-300">
        <div class="card-body">
            <h1 class="mt-1 text-xl font-bold text-center mb-6">Create Account</h1>

            <form method="POST" action="/register">
                @csrf

                <label class="floating-label mb-6">
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
                        class="input input-bordered @error('name') input-error @enderror" required>
                    <span>Name</span>
                </label>
                @error('name')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror

                <label class="floating-label mb-6">
                    <input type="email" name="email" placeholder="mail@laravel.com" value="{{ old('email') }}"
                        class="input input-bordered @error('email') input-error @enderror" required>
                    <span>Email</span>
                </label>
                @error('email')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror

                <label class="floating-label mb-6">
                    <input type="password" name="password" placeholder="••••••••"
                        class="input input-bordered @error('password') input-error @enderror" required>
                    <span>Password</span>
                </label>
                @error('password')
                    <div class="label -mt-4 mb-2">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror

                <label class="floating-label mb-6">
                    <input type="password" name="password_confirmation" placeholder="••••••••"
                        class="input input-bordered" required>
                    <span>Confirm Password</span>
                </label>

                <div class="form-control mt-8">
                    <button type="submit" class="btn btn-primary btn-sm w-full">
                        Register
                    </button>
                </div>
            </form>

            <div class="divider">OR</div>
            <p class="text-center text-sm">
                Already have an account?
                <a href="/login" class="link link-primary">Sign in</a>
            </p>
        </div>
    </div>
</x-layouts.auth>
