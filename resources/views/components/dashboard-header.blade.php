@php
    $links = [
        [
            'url' => route('dashboard'),
            'label' => 'Dashboard',
        ],
        // [
        //     'url' => route('plans.index'),
        //     'label' => 'Plans',
        // ],
        [
            'url' => route('items.index'),
            'label' => 'Items',
        ],
        [
            'url' => route('warehouses.index'),
            'label' => 'Warehouses',
        ],
        [
            'url' => route('stock-movements.index'),
            'label' => 'Stock Movements',
        ],
    ];
@endphp

<header class="bg-base-300 shadow-sm">
    <nav class="navbar  container mx-auto">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    @foreach ($links as $link)
                        <li><a href="{{ $link['url'] }}" class="btn btn-ghost">{{ $link['label'] }}</a></li>
                    @endforeach

                </ul>
            </div>
            <a href="/dashboard" class="btn btn-ghost text-xl">Inventory</a>


        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                @foreach ($links as $link)
                    <li><a href="{{ $link['url'] }}" class="btn btn-ghost">{{ $link['label'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="" src="{{ Auth::user()->image->url() }}" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li>
                        <a href="{{ route('profile') }}">
                            Profile
                        </a>
                    </li>
                    <li class="block w-full">
                        <form action="{{ route('logout') }}" method="POST" class="block w-full">
                            @csrf
                            <button type="submit" class="block w-full text-left">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
