<?php
    require_once "../../db.php";
        // Set headers for CSV download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="products.csv"');

        // Create a file pointer connected to the output stream
        $output = fopen('php://output', 'w');

        // Output the column headings
        fputcsv($output, array('Name', 'Price', 'Category', 'Date', 'Description'));
        $products = dbSelect("tbproducts", "*");
        // Loop through the products and write each row to the CSV
        foreach ($products as $product) {
            $category = dbSelect("tbcategory", "category_name", "category_id = {$product['category_id']}");
            $category_name = $category[0]['category_name'] ?? 'N/A';
            $formatted_date = date('Y-m-d h:i a', strtotime($product['create_at']));
            fputcsv($output, array(
                $product['name'],
                $product['price'],
                $category_name,
                $formatted_date,
                $product['description']
            ));
        }

        // Close the file pointer
        fclose($output);
        exit;
    

?>