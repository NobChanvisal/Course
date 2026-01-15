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
    <header class=" py-4 px-10 bg-white flex shadow fixed top-0 left-0 right-0">
        <div class="logo mr-16">
            Logo
        </div>
        <div>
            <nav>
                <a class=" mx-5" href="">Home</a>
                <a class=" mx-5" href="">Technology</a>
                <a class=" mx-5" href="">Sports</a>
                <a class=" mx-5" href="">Business</a>
            </nav>
        </div>
    </header>
    <main class=" pt-16">
        @yield('main-content')
    </main>
</body>
</html>