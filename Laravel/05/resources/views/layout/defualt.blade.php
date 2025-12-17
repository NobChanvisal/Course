<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        @include('include.header')
    </header>

    <main>
        @include('include.sidebar')
        <section class=" pl-72 p-4 pt-28">
            {{-- place holder --}}
            @yield('content')
        </section> 
    </main>

    <footer>
        {{-- @include('footer') --}}
    </footer>
</body>
</html>