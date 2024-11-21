<div>
    <header class="bg-black text-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">MassageAtHome</h1>
            <nav class="hidden md:flex space-x-4">
                <a href="{{ route('home') }}" class="hover:text-blue-200 transition-colors">Home</a>
                <a href="{{ route('subscriptions') }}" class="hover:text-blue-200 transition-colors">Services</a>
                @auth
                <a href="#" class="hover:text-blue-200 transition-colors">Reservations</a>
                @endauth
                @auth
                <a href="#" class="hover:text-blue-200 transition-colors">Profile</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-blue-200 transition-colors">Logout</button>
                </form>
                @else
                <a href="{{ route('login.view') }}" class="hover:text-blue-200 transition-colors">Login</a>
                @endauth
            </nav>
            <button class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>
</div>