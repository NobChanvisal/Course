<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product Details</h1>
    @php $found = false; @endphp
    @foreach ($products as $product)
        @if ($product['id'] == $searchid)
            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" width="200">
            <h2>{{ $product['name'] }}</h2>
            <p>Price: ${{ $product['price'] }}</p>
            @php $found = true; @endphp
        @endif
    @endforeach
    @if(! $found)
        <p>Product with ID {{ $searchid }} not found.</p>
    @endif
</body>
</html>