<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class=" m-10">
    <div class=" flex gap-10">
        <a href="productPage.php?id= 1">
            <div class="bg-white rounded-lg overflow-hidden shadow-lg ring-4 ring-red-500 ring-opacity-40 max-w-sm">
                <div class="relative">
                    <img class="w-full h-[250px] object-cover" src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Product Image">
                    <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium mb-2">Product 1</h3>
                    <p class="text-gray-600 text-sm mb-4">This is a great product with unique features. You will love it!</p>
                    <div class="flex items-center justify-between">
                        <span class="font-bold text-lg">$19.99</span>
                        
                    </div>
                </div>
            </div>
        </a>
        <a href="productPage.php?id= 2">
            <div class="bg-white rounded-lg overflow-hidden shadow-lg ring-4 ring-red-500 ring-opacity-40 max-w-sm">
                <div class="relative">
                    <img class="w-full h-[250px] object-cover" src="https://cdn.pixabay.com/photo/2020/05/22/17/53/mockup-5206355_960_720.jpg" alt="Product Image">
                    <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium mb-2">Product 2</h3>
                    <p class="text-gray-600 text-sm mb-4">An excellent choice for everyday use. Durable and reliable.</p>
                    <div class="flex items-center justify-between">
                        <span class="font-bold text-lg">$29.99</span>
                        
                    </div>
                </div>
            </div>

        </a>
       
    </div>

</body>
</html>