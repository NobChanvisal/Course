<?php
    include_once '../db.php';
    $invoices = dbSelect('tbinvoice');
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
           
            <a href="./models/export_invoices.php" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                    <svg class="w-5 h-5 me-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6zM6 4h7v4h4v12H6V4z"/></svg>
                    Export
                </a>
                
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
                                <div class="text-base font-semibold"><?= $invoice['invoice_id'] ?></div>
                            </div>  
                        </td>
                        <td class="px-6 py-4">
                            <?php $invoiceItem = db_Query("
                                    SELECT
                                        i.invoice_id,
                                        id.qty,
                                        p.name,
                                        p.price
                                    FROM
                                        tbinvoicedetails AS id
                                        JOIN tbinvoice AS i ON id.invoice_id = i.invoice_id
                                        JOIN tbproducts AS p ON id.product_id = p.id
                                    WHERE id.invoice_id = {$invoice['invoice_id']}
                                "); ?>
                            <ul>
                                <?php foreach($invoiceItem as $item): ?>
                                    <li class="mb-1"><?= $item['name'] ?> (<?= $item['qty'] ?> x $<?= $item['price'] ?>)</li>
                                <?php endforeach; ?>
                            </ul>
                        </td>
                        <td class="px-6 py-4">
                            $<?= $invoice['amount'] ?>
                        </td>
                        <td>
                            <p>Published</p>
                            <?php
                                $timestamp = strtotime($invoice['invoice_date']);
                                $formatted = date('Y-m-d h:i a', $timestamp);
                                ?>
                      
                            <p><?= $formatted ?></p>
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