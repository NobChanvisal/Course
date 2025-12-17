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
    <h1 class=" text-4xl text-center mb-10 mt-5">Product list</h1>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-10">
        @foreach ($products as $product)
            <div class="border w-full">
                <div class=" w-full h-72">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover mb-4">
                </div>
                <div class=" p-4">
                    <h2 class="text-lg font-bold mb-2">{{ $product['name'] }}</h2>
                    <p class="text-blue-600 font-semibold mb-3">${{ $product['price'] }}</p>
                    <button class="bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800">Add to Cart</button>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>