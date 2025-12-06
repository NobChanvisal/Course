<?php
    include_once '../../db.php';

    // Set HTTP headers to tell the browser to download a file
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=invoices.csv');

    // Open a temporary file pointer for writing the CSV data
    $output = fopen('php://output', 'w');

    // Write the column headers to the CSV file
    fputcsv($output, array('Order ID', 'Total Amount', 'Invoice Date', 'Item Details'));

    // Retrieve all invoices from the database
    $invoices = dbSelect('tbinvoice');

    // Loop through each invoice and format the data
    foreach ($invoices as $invoice) {
        $invoice_id = $invoice['invoice_id'];
        $amount = $invoice['amount'];
        $invoice_date = $invoice['invoice_date'];

        // Get the details for each item in the current invoice
        $invoiceItems = db_Query("
            SELECT
                id.qty,
                p.name,
                p.price
            FROM
                tbinvoicedetails AS id
                JOIN tbproducts AS p ON id.product_id = p.id
            WHERE id.invoice_id = {$invoice_id}
        ");

        // Combine all item details into a single string for the CSV cell
        $item_details = '';
        foreach ($invoiceItems as $item) {
            $item_details .= "{$item['name']} ({$item['qty']} x \${$item['price']})\n";
        }
        $item_details = rtrim($item_details, "\n"); // Remove trailing newline

        // Write the complete row to the CSV file
        fputcsv($output, array($invoice_id, $amount, $invoice_date, $item_details));
    }

    // Close the file pointer
    fclose($output);
    exit();
?>