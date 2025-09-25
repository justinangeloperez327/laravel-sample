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
                    <li><a href="#features" class="btn btn-ghost">Features</a></li>
                    <li><a href="#pricing" class="btn btn-ghost">Pricing</a></li>
                    <li><a href="#contact" class="btn btn-ghost">Contact</a></li>
                </ul>
            </div>
            <a href="/" class="btn btn-ghost text-xl">Inventory</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#features" class="btn btn-ghost">Features</a></li>
                <li><a href="#pricing" class="btn btn-ghost">Pricing</a></li>
                <li><a href="#contact" class="btn btn-ghost">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            @guest
                <a href="{{ route('login') }}" class="btn btn-ghost">Login</a>
                <a href="{{ route('register') }}" class="btn btn-ghost">Register</a>
            @endguest
        </div>
    </nav>
</header>
