<?php
    echo $_SERVER['PHP_SELF'] . "<br>";
    echo basename($_SERVER['PHP_SELF']);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $data = [$username, $email, $subject, $message];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th{
            padding: 5px;
            border: 1px solid black;

        }
    </style>
</head>
<body>
    <?php if(!is_array($data)): ?>
        <p>Data empty</p>
    <?php else:?>

        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            <tr>
                <td> <?= $username ?> </td>
                <td> <?= $email ?> </td>
                <td> <?= $subject ?> </td>
                <td> <?= $message ?> </td>
            </tr>
        </table>
    <?php endif?>
</body>
</html>