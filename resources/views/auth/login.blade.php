<x-layouts.auth>
    <x-slot:title>
        Login
    </x-slot:title>
    <div class="card w-96 bg-base-300">
        <div class="card-body">
            <h1 class="mt-1 text-xl font-bold text-center mb-6">Welcome Back</h1>

            <form method="POST" action="/login">
                @csrf

                <label class="floating-label mb-6">
                    <input type="email" name="email" placeholder="mail@example.com" value="{{ old('email') }}"
                        class="input input-bordered @error('email') input-error @enderror" required autofocus>
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

                <div class="form-control mt-8">
                    <button type="submit" class="btn btn-primary btn-sm w-full">
                        Sign In
                    </button>
                </div>
            </form>

            <div class="divider">OR</div>
            <p class="text-center text-sm">
                Don't have an account?
                <a href="/register" class="link link-primary">Register</a>
            </p>
        </div>
    </div>
</x-layouts.auth>
