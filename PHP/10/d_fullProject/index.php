<?php 
    include "./db.php";
    $categories = dbSelect("tbcategory");
    $categoryFilter = $_GET['category'] ?? null;
    if($categoryFilter){
        $products = dbSelect("tbproducts", "*", "category_id = $categoryFilter");
    } else {
        $products = dbSelect("tbproducts");
    }

    //add to cart
    if(isset($_GET['add_to_cart'])){
        $productId = $_GET['add_to_cart'];
        $product = dbSelect("tbproducts", "*", "id = $productId","", true);
        if($product){
            $prevProduct = dbSelect("tbcart", "*", "product_id = $productId","",true);
            if($prevProduct){
                $newQty = $prevProduct['qty'] + 1;
                dbUpdate("tbcart", ["qty" => $newQty], "product_id = $productId");
            }
            else{
                $data = [
                    "product_id" => $product['id'],
                    "name"       => $product['name'],
                    "image"      => $product['image'],
                    "price"      => $product['price'],
                    "qty"        => 1
                ];
                dbInsert("tbcart",$data);
            }

        }
        header("Location: index.php"); 
        exit;
    }
    //load cart

    $carts = dbSelect("tbcart");
    $subtotal = dbSum("tbcart","amount"); 

    //checkout
    if(isset($_POST['checkout'])){
        $cartsItems = dbSelect("tbcart");
        
        if($cartsItems){
            $data = [
                "items" => json_encode($cartsItems),
                "total_amount" => $subtotal,
                "order_date" => date("Y-m-d H:i:s")
            ];
            dbInsert("tborder",$data);
            dbDelete("tbcart","");
        }

        header("Location: index.php"); 
        exit;
    }
    //remove cart item
    if(isset($_GET['remove_cart'])){
        $cartId = $_GET['remove_cart'];
        dbDelete("tbcart", "cart_id = $cartId");
        header("Location: index.php"); 
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hidden {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
    </style>
</head>
<body class="bg-gray-100 flex h-screen text-gray-800">
    <!-- Main Content Area -->
    <main class="flex-1 p-8 overflow-hidden flex">

        <!-- Product List Section -->
        <section class="flex-1 flex flex-col pr-8">
            <header class="flex items-center justify-between pb-10">
                <h1 class="text-3xl font-bold">Items</h1>
                <div class="relative w-64">
                    <input type="text" placeholder="Search for products..." class="w-full px-4 py-2 pl-10 rounded-xl bg-white border border-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-all duration-200">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
            </header>

            <!-- Product Categories -->
             
            <div class="flex items-center space-x-4 overflow-x-auto scrollbar-hidden pb-4">
               <a href="?" class="px-6 py-2 flex rounded-xl space-x-2 items-center 
                    <?= $categoryFilter === null ? 'bg-black text-white shadow-lg' : 'bg-white text-gray-600 shadow-md' ?>">
                    all
                    </a>

                    <?php foreach($categories as $category): 
                        $activeClass = ($category['category_id'] == $categoryFilter) 
                            ? 'bg-black text-white shadow-lg' 
                            : 'bg-white text-gray-600 shadow-md';
                    ?>
                        <a href="?category=<?= $category['category_id'] ?>" 
                        class="px-6 py-2 flex rounded-xl space-x-2 items-center <?= $activeClass ?>">
                            <img class="w-7" src="./icon/<?= $category['image'] ?>" alt="">
                            <span><?= $category['category_name'] ?></span>
                        </a>
                <?php endforeach; ?>
            </div>

            <!-- Products Grid -->
            <div class="flex-1 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 overflow-y-auto">
                <!-- Product Card  -->
                <?php foreach($products as $product): ?>
                    <div class="bg-white rounded-2xl shadow-md p-2 flex flex-col h-fit">
                        <?php if(!$product['image']): ?>
                            <img src="https://placehold.co/200x150/f0f0f0/6b7280?text=No+Image" alt="" class="w-full h-40 object-cover rounded-xl mb-4">
                        <?php else: ?>
                            <img  src="./image/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="w-full h-40 object-cover rounded-xl mb-4">
                        <?php endif; ?>
                        <h3 class="font-semibold text-lg"><?= htmlspecialchars($product['name']) ?></h3>
                        <div class=" flex items-center justify-between w-full mt-4">
                            <p class="text-gray-500">$<?= htmlspecialchars($product['price']) ?></p>
                            <a href="?add_to_cart=<?= $product['id'] ?>"  class="">
                                <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#1f1f1f"><path d="M464.05-300h33.85v-161.95H660v-33.84H497.9V-660h-33.85v164.21H300v33.84h164.05V-300Zm16.26 180q-75.01 0-140.33-28.34-65.33-28.34-114.29-77.25-48.96-48.92-77.32-114.23Q120-405.14 120-480.2q0-74.55 28.34-140.18 28.34-65.63 77.25-114.26 48.92-48.63 114.23-76.99Q405.14-840 480.2-840q74.55 0 140.18 28.34 65.63 28.34 114.26 76.92 48.63 48.58 76.99 114.26Q840-554.81 840-480.31q0 75.01-28.34 140.33-28.34 65.33-76.92 114.16-48.58 48.84-114.26 77.33Q554.81-120 480.31-120Z"/></svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Order Summary Section (Right) -->
        <section class="w-96 bg-white p-6 flex flex-col rounded-3xl shadow-lg">
            <header class="flex items-center justify-between pb-6">
                <h2 class="text-2xl font-bold">Current Order</h2>
            </header>

            <!-- Order Items -->
            <div class="flex-1 overflow-y-auto pr-2">
                <?php if(!$carts): ?>
                    <p class="text-gray-500 text-center mt-10">No items in the cart.</p>
                <?php else: ?>
                    <?php foreach($carts as $item): ?>
                        <div class="flex items-center justify-between py-4 border-b border-gray-200">
                            <div class="flex items-center space-x-4">
                                <?php if(!$item['image']): ?>
                                    <img src="https://placehold.co/60x60/f0f0f0/6b7280?text=Item" alt="" class="w-12 h-12 rounded-xl">
                                <?php else: ?>
                                    <img  src="./image/<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" class="w-12 h-12 object-cover rounded-xl">
                                <?php endif; ?>
                                
                                <div>
                                    <h3 class="font-semibold"> <?= $item['name']?> <span class="font-semibold"> (x<?= $item['qty']?>)</span></h3>
                                    <p class="text-gray-500"><?= $item['price']?> </p>
                                </div>
                            </div>
                            
                                <a type="submit" href="?remove_cart=<?= $item['cart_id'] ?>" 
                                    class="p-1 rounded-full text-gray-400 hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="red"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                </a>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
            </div>

            <!-- Totals & Continue Button -->
            <div class="mt-6">
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600"> Sub total </span>
                        <span class="font-semibold">$<?= $subtotal ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Discount</span>
                        <span class="font-semibold text-red-500">$0.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Service Charge</span>
                        <span class="font-semibold">$0.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Tax</span>
                        <span class="font-semibold">$0.00</span>
                    </div>
                </div>
                <div class="flex justify-between font-bold text-xl mt-4 border-t-2 pt-4 border-gray-200">
                    <span>Total</span>
                    <span class="text-purple-600">$<?= $subtotal ?></span>
                </div>
                <form method="post">
                    <button type="submit" name="checkout" 
                        class="w-full mt-6 py-4 rounded-xl text-white bg-black font-bold text-lg shadow-lg hover:bg-slate-700 transition-colors duration-200">
                        Continue
                    </button>
                </form>

            </div>
        </section>

    </main>
</body>
</html>
