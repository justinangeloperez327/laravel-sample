@php
    $features = [
        [
            'title' => 'Stock Tracking',
            'description' => 'Always know how much stock you have across warehouses.',
        ],
        [
            'title' => 'Sales Orders',
            'description' => 'Create orders and auto-deduct stock when confirmed.',
        ],
        [
            'title' => 'Reports',
            'description' => 'Low stock alerts and monthly sales insights.',
        ],
    ];
@endphp
<section id="features" class="py-20 bg-base-100">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-base-content">Features that save you time</h2>
        <p class="mt-4 text-base-content/70">Everything you need to keep inventory under control.</p>
        <div class="mt-12 grid md:grid-cols-3 gap-10">
            @foreach ($features as $feature)
                <div class="p-6 bg-base-200 rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2 text-base-content">{{ $feature['title'] }}</h3>
                    <p class="text-base-content/70">{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
