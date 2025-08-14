

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
   <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
    $code = "P001";
    $name = "T-Shirt";
    $qty = 5;
    $price = 60;

    $total = $qty * $price;

    // Calculate discount
    if ($total > 500) {
        $discount = 0.2;
    } elseif ($total > 400) {
        $discount = 0.15;
    } elseif ($total > 300) {
        $discount = 0.1;
    } elseif ($total > 200) {
        $discount = 0.05;
    } else {
        $discount = 0;
    }

    // Calculate save
    $save = $total *  $discount;

    // Calculate payment
    $payment = $total - $discount;
?>


<table>
    <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Discount</th>
            <th>Save</th>
            <th>Payment</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    
            <td><?= $code ?></td> 
            <td><?= $name ?></td>
            <td><?= $qty ?></td>
            <td>$<?= $price ?></td>
            <td>$<?= $total ?></td>
            <td><?= $discount * 100 ?> %</td>
             <td>$<?= $save ?></td>
             <td>$<?= $payment ?></td>
        </tr>
    </tbody>
</table>
</body> 
</html>