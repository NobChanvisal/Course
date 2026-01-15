<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main>
        <div class=" fixed top-0 bottom-0 p-4 pt-20 w-52 flex flex-col gap-2.5 shadow-md bg-white">
            <x-nav-link route="dashboard" active="dashboard">Dashboard</x-nav-link>
            <x-nav-link route="categories.index" active="categories.*">
                Categories
            </x-nav-link>
            <x-nav-link route="products.index" active="products.*">
                Products
            </x-nav-link>
        </div>
        <section class=" ml-52 p-14">
            @yield('content')
        </section>
    </main>

</body>
</html>