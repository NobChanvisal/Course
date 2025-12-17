<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Document'}}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <x-nav-link href="/" active="/">Home</x-nav-link>
            <x-nav-link href="/b" active="b">Product</x-nav-link>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>
</html>