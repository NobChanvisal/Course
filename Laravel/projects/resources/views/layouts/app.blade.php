<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex">
            <!-- Sidebar -->
            @include('layouts.sidebar')

            <!-- Main Content Area -->
            <main class=" ml-64 flex-1">
                <div
                    class=" m-3 py-6 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <!-- Page Heading (Optional) -->

                    <header class="text-xl font-semibold">
                            @yield('title')  
                    </header>
                    <div>
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>

        <!-- Scripts -->
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </body>
</html>
