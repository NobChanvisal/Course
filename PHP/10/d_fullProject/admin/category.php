<?php
    include_once '../db.php';
    $categories = dbSelect('tbcategory');
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
    <main class=" ml-72 pt-24 mr-10 flex ">
        <div>
            
            <form action="" method="post" class=" flex flex-col h-screen gap-4 p-5 bg-white mr-5 shadow-md sm:rounded-lg bg-white p-5" enctype="multipart/form-data">
                <p class=" text-center text-2xl mb-3 font-simibold">Add new category</p>
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Category name</label>
                    <input type="text" name="category_name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mb-2"  required />
                </div>
                <div class="flex items-center justify-center w-full">
                    <label for="image" class="flex flex-col items-center justify-center w-full  border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50  hover:bg-gray-100 p-4">
                        <input type="file" name="image" id="image" class="hidden" />
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                    </label>
                </div> 
                <button type="submit" name="add_category" class="text-white self-start bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-3"> 
                        Add category
                </button>
            </form>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white flex-1 p-5">
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
                        foreach($categories as $category): 
                    ?>
                        
                        <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                                <?php if ($category['image']): ?>
                                <img class="w-20 h-20 p-1 border border-gray-500" src= "../icon/<?= $category['image'] ?>"  alt="<?= $category['category_name'] ?> image">
                                <?php else: ?>
                                <img class="w-20 h-20 border border-gray-500" src= "../image/landing.jpg ?>"  alt="<?= $category['category_name'] ?> image">
                                <?php endif; ?>
                                <div class="ps-3">
                                    <div class="text-base font-semibold"><?= $category['category_name'] ?></div>
                                </div>  
                            </th>
                            <td>
                                <p>Published</p>
                                <p><?= $category['create_at'] ?></p>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 hover:underline ps-3">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>