<?php
session_start();

// If no username in session, redirect to login page
if (!isset($_SESSION['username'])) {
    echo "No user, please login !!";
    echo "<a href='./index.php'>back to login</a>";
    exit();
}

// Store username and cart items for display
$username = $_SESSION['username'];
$cart_items = $_SESSION['cart_items'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>

    <h2>Your Cart Items:</h2>
    <ul>
        <?php foreach ($cart_items as $item): ?>
            <li><?php echo htmlspecialchars($item); ?></li>
        <?php endforeach; ?>
    </ul>

    <form action="remove.php" method="post">
        <button type="submit">remove account</button>
    </form>
</body>
</html>
