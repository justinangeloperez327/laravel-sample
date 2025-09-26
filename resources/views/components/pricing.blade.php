<section id="pricing" class="py-20 bg-base-200">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-base-content">Pricing</h2>
        {{-- <p class="mt-4 text-base-content/70">Start free and upgrade when you’re ready.</p> --}}
        <div class="mt-12 grid md:grid-cols-2 gap-10">
            @forelse ($plans as $plan)
                <article class="card bg-base-100 shadow-xl hover:shadow-2xl transition">
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-primary capitalize">{{ $plan->name }}</h3>
                        <p class="mt-2 text-base-content/70">Best for testing or small shops.</p>
                        <ul class="mt-4 space-y-2 text-base-content/70">

                            @forelse($plan->features as $feature)
                                <li>✔ {{ $feature }}</li>
                            @empty
                                <li>No features listed.</li>
                            @endforelse
                        </ul>
                        <div class="mt-4">
                            <span class="text-3xl font-bold">Free</span>
                        </div>
                        <a href="{{ route('register') }}" class="btn btn-primary mt-4">
                            Get Started
                        </a>
                    </div>
                </article>
            @empty
                <p class="text-base-content/70 text-lg">No pricing available at the moment.</p>
            @endforelse
        </div>
    </div>
</section>
