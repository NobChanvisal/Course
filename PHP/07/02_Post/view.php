
<?php
    if(isset($_POST['username']) && isset($_POST['email'])) {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
    } else {
        $username = '';
        $email = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Welcome <?= $username ?>!</p>
    <p>Your email is <?= $email ?>.</p>
</body>
</html>