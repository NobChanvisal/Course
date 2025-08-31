<?php
    include_once '../db.php';
    include './include/function.php';
    $products = dbSelect('tbproducts', '*', '', 'ORDER BY id DESC');
    $showcategory = dbSelect('tbcategory');
    
    $message = null;
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category_id = $_POST['category'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];

        if($image){
            $targetDir = "../image/";
            $isMoved = MoveIMage($_FILES['image'], $targetDir);
            if(!$isMoved){
                $image = null;
            }
        } else {
            $image = null;
        }

        $data = [
            'name' => $name,
            'price' => $price,
            'category_id' => $category_id,
            'description' => $description,
            'image' => $image
        ];
        if(dbInsert('tbproducts', $data)) {
            $message = true;
            $_POST = [];
        } else {
            $message = false;
        }
            
    }
    
?>

<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="bg-gray-50">
    <?php include_once './include/sidebar.php' ?>
    <?php include_once './include/header.php' ?>
    <main class=" ml-72 mt-24 mr-10">
   
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-5">
         <div>
            <?php
                if($message === true){
                    echo Alert("green", "New Product Insert successfully.");
                    $products=dbSelect('tbproducts','*', '', 'ORDER BY id DESC');
                }
                if($message === false){
                    echo Alert("red", "New Product Insert failed.");
                }
            ?>
        </div>
        <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-7 bg-white mb-2">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search ">
            </div>
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-3" type="button">
                    <svg class="w-5 h-5 me-2 -ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" clip-rule="evenodd"></path></svg>
                    Add new
                </button>

        </div>
        <!-- Modal toggle -->
        

        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm border-gray-200">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Create New Product
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" method="POST" enctype="multipart/form-data">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="$0.00" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    <option selected="">Select category</option>
                                    <?php foreach($showcategory as $cat): ?>
                                        <option class=" capitalize" value="<?= $cat['category_id'] ?>"><?= $cat['category_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Product Description</label>
                                <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write product description here"></textarea>                    
                            </div>
                            <div class="w-full col-span-2">
                                <label for="image" class="flex flex-col items-center justify-center w-full  border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50  hover:bg-gray-100 p-4">
                                    <input type="file" name="image" id="image" class="hidden" />
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 font-semibold">Click to upload</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF</p>
                                    </div>
                                </label>
                            </div> 
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Add new product
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Items
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th>
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($products as $product): 
                    $category = dbSelect("tbcategory", "category_name", "category_id = {$product['category_id']}");
                ?>
                     
                    <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                            <?php if ($product['image']): ?>
                               <img class="w-20 h-20 border border-gray-500" src= "../image/<?= $product['image'] ?>"  alt="<?= $product['name'] ?> image">
                            <?php else: ?>
                               <img class="w-20 h-20 border border-gray-500" src= "../image/landing.jpg ?>"  alt="<?= $product['name'] ?> image">
                            <?php endif; ?>
                            <div class="ps-3">
                                <div class="text-base font-semibold capitalize"><?= $product['name'] ?></div>
                            </div>  
                        </th>
                        <td class="px-6 py-4">
                            $<?= $product['price'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $category[0]['category_name'] ?>
                        </td>
                        <td>
                            <p>Published</p>
                            <p><?= $product['create_at'] ?></p>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 hover:underline ps-3">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    
                </tr>                
            </tbody>
        </table>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>