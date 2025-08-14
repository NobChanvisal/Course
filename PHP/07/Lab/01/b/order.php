<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Order Summary</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 20px auto; padding: 20px; background-color: #f4f4f4; }
        .output { padding: 20px; background-color: #fff; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        a { display: inline-block; margin-top: 20px; text-decoration: none; color: #007bff; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="output">
        <?php
        if (isset($_GET['product'], $_GET['quantity'])) {
            $product = htmlspecialchars($_GET['product']);
            $quantity = (int)$_GET['quantity'];

            $prices = [
                'laptop' => 1000,
                'phone' => 500,
                'tablet' => 300
            ];

            if (!array_key_exists($product, $prices)) {
                echo '<p style="color:red;">Invalid product selected.</p>';
            } elseif ($quantity <= 0) {
                echo '<p style="color:red;">Quantity must be a positive number.</p>';
            } else {
                $product_name = ucfirst($product);
                $unit_price = $prices[$product];
                $total_price = $unit_price * $quantity;

                echo "<h2>Order Summary</h2>";
                echo "<p><strong>Product:</strong> $product_name</p>";
                echo "<p><strong>Unit Price:</strong> $$unit_price</p>";
                echo "<p><strong>Quantity:</strong> $quantity</p>";
                echo "<p><strong>Total Price:</strong> $$total_price</p>";
            }
        } else {
            echo '<p style="color:red;">Please submit the order form correctly.</p>';
        }
        ?>
        <a href="index.php">Back to order form</a>
    </div>
</body>
</html>
