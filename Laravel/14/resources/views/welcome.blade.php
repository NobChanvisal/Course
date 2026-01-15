<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>

    @if (Route::has('login'))
    <header class="w-full flex justify-between items-center py-4 px-10 bg-white shadow">

        <!-- Logo -->
        <div class="font-bold text-lg">
            Logo
        </div>

        <!-- Navigation -->
        <nav class="space-x-6">
            <a href="{{ url('/') }}" class="hover:text-blue-600">Home</a>
            <a href="#" class="hover:text-blue-600">Products</a>
            <a href="#" class="hover:text-blue-600">About</a>
            <a href="#" class="hover:text-blue-600">Contact</a>
        </nav>

        <!-- Right -->
        <div class="flex items-center gap-4">
            @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center gap-1 text-gray-600 hover:text-gray-800">
                            {{ Auth::user()->name }}
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Profile
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @else
                <a href="{{ route('login') }}" class="hover:text-blue-600">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="hover:text-blue-600">Register</a>
                @endif
            @endauth

            <!-- Cart Icon -->
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6 text-gray-500 hover:text-gray-700 cursor-pointer"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007Z" />
            </svg>
        </div>

    </header>
    @endif

</body>



</html>
