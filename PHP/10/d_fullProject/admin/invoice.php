<?php
    include_once '../db.php';
    $invoices = dbSelect('tborder');

    
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
    <main class=" ml-72 pt-24 mr-10">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-5">
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
            <form action="post">
                <button type="submit" name="add_invoice" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-3">
                    <svg class="w-5 h-5 me-2 -ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" clip-rule="evenodd"></path></svg>
                    Add New invoice
                </button>
            </form>
                
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
                        Order ID
                    </th>
            
                    <th scope="col" class="px-4 py-3">
                        Items
                    </th>
            
                    <th scope="col" class="px-6 py-3">
                        Total Amount
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
              <?php foreach($invoices as $invoice): ?>
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                            <div class="ps-3">
                                <div class="text-base font-semibold"><?= $invoice['order_id'] ?></div>
                            </div>  
                        </td>
                        <td class="px-6 py-4">
                            <?php 
                                $items = json_decode($invoice['items'], true);
                                foreach($items as $key => $item): 
                            ?>
                                <div class="grid grid-cols-2 text-gray-900 gap-4 pb-2">
                                    <p class="font-medium text-gray-900 capitalize">
                                        <?= $item['name'] ?> <span class=" lowercase"> (x<?= $item['qty'] ?>)</span>
                                        
                                    </p> 
                                    <p class="text-gray-500">$<?= $item['price'] ?></p>
                                </div>
                            <?php endforeach; ?>
                        </td>
                        <td class="px-6 py-4">
                            $<?= $invoice['total_amount'] ?>
                        </td>
                        <td>
                            <p>Published</p>
                            <p><?= $invoice['order_date'] ?></p>
                        </td>
                        <td class="px-6 py-4">
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