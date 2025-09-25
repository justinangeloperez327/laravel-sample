    <section id="pricing" class="py-20 bg-base-200">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-base-content">Pricing</h2>
            <p class="mt-4 text-base-content/70">Start free and upgrade when you’re ready.</p>
            <div class="mt-12 grid md:grid-cols-2 gap-10">
                @forelse ($plans as $plan)
                    <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition">
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
                    </div>
                @empty
                    <p>No pricing available at the moment.</p>
                @endforelse
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition">
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-primary">Free</h3>
                        <p class="mt-2 text-base-content/70">Best for testing or small shops.</p>
                        <ul class="mt-4 space-y-2 text-base-content/70">
                            <li>✔ 1 Warehouse</li>
                            <li>✔ Up to 100 Items</li>
                            <li>✔ Basic Reports</li>
                        </ul>
                        <div class="mt-4">
                            <span class="text-3xl font-bold">Free</span>
                        </div>
                        <a href="{{ route('register') }}" class="btn btn-primary mt-4">
                            Get Started
                        </a>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition border border-primary">
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-primary">Pro</h3>
                        <p class="mt-2 text-base-content/70">For growing businesses.</p>
                        <ul class="mt-4 space-y-2 text-base-content/70">
                            <li>✔ Unlimited Warehouses</li>
                            <li>✔ Unlimited Items</li>
                            <li>✔ Advanced Reports</li>
                            <li>✔ Priority Support</li>
                        </ul>
                        <div class="mt-4">
                            <span class="text-3xl font-bold">$49</span> <span class="text-base-content/70">/month</span>
                        </div>
                        <a href="{{ route('register') }}" class="btn btn-primary mt-4">
                            Upgrade Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
