<html>
<body>

<?php
if (isset($_GET['username']) && isset($_GET['email'])) {
    $username = htmlspecialchars($_GET['username']);
    $email = htmlspecialchars($_GET['email']);
} 
?>
<p>Welcome <?= $username ?>!</p>
<p>Your email is <?= $email ?>.</p>

</body>
</html>
