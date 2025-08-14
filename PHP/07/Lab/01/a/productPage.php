<?php
// 1. Get the product ID from the URL.
// The $_GET superglobal array holds all the URL query parameters.
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : null;

// 2. Check if the product ID is valid.
if ($product_id === null || $product_id <= 0) {
    echo "<h1>Error: No product ID specified or ID is invalid.</h1>";
    exit(); // Stop the script execution.
}


$products = [
    1 => [
        'name' => 'Product 1',
        'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30',
        'description' => 'This is a great product with unique features. You will love it!',
        'stock' => '200',
        'price' => '19.99'
    ],
    2 => [
        'name' => 'Product 2',
        'image' => 'https://cdn.pixabay.com/photo/2020/05/22/17/53/mockup-5206355_960_720.jpg',
        'description' => 'An excellent choice for everyday use. Durable and reliable.',
        'stock' => '100',
        'price' => '29.99'
    ],
    3 => [
        'name' => 'Product 3',
        'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30',
        'description' => 'A premium product designed for professionals. High quality guaranteed.',
        'stock' => '20',
        'price' => '49.99'
    ]
];

// 4. Check if the product ID exists in our data.
if (!array_key_exists($product_id, $products)) {
    echo "<h1>Error: Product not found.</h1>";
    exit();
}

// 5. Get the specific product's data.
$product = $products[$product_id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?> Details</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        .product-container { border: 1px solid #ccc; padding: 20px; border-radius: 8px; max-width: 600px; margin: auto; }
        h1 { color: #333; }
        .price { font-size: 1.5em; color: green; font-weight: bold; }
    </style>
</head>
<body>

   <div class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                    <img class="w-full h-full object-cover" src=<?= $product['image'] ?> alt="Product Image">
                </div>
                <div class="flex -mx-2 mb-4">
                    <div class="w-1/2 px-2">
                        <button class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Add to Cart</button>
                    </div>
                    <div class="w-1/2 px-2">
                        <button class="w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Add to Wishlist</button>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2"><?= $product['name'] ?></h2>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed
                    ante justo. Integer euismod libero id mauris malesuada tincidunt.
                </p>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300">Price:</span>
                        <span class="text-gray-600 dark:text-gray-300">$<?= $product['price'] ?></span>
                    </div>
                    <div>
                        <span class="font-bold text-gray-700 dark:text-gray-300">Availability:</span>
                        <span class="text-gray-600 dark:text-gray-300"><?= $product['stock' ]?> pcs</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="font-bold text-gray-700 dark:text-gray-300">Select Color:</span>
                    <div class="flex items-center mt-2">
                        <button class="w-6 h-6 rounded-full bg-gray-800 dark:bg-gray-200 mr-2"></button>
                        <button class="w-6 h-6 rounded-full bg-red-500 dark:bg-red-700 mr-2"></button>
                        <button class="w-6 h-6 rounded-full bg-blue-500 dark:bg-blue-700 mr-2"></button>
                        <button class="w-6 h-6 rounded-full bg-yellow-500 dark:bg-yellow-700 mr-2"></button>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="font-bold text-gray-700 dark:text-gray-300">Select Size:</span>
                    <div class="flex items-center mt-2">
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">S</button>
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">M</button>
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">L</button>
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">XL</button>
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">XXL</button>
                    </div>
                </div>
                <div>
                    <span class="font-bold text-gray-700 dark:text-gray-300">Product Description:</span>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                        <?= $product['description'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<a class=" text-center block text-blue-500 underline text-[24px]" href="./index.php">Back to product list</a>
</body>
</html>