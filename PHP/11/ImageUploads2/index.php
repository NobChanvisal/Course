<?php

    require_once './db_connect.php';
    $stmt = $pdo->query("SELECT * FROM tbpersonimage");
    $persons = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            margin: 5px;
        }
        th,td{
            border: 1px solid black;
            padding: 5px;
        }
        img{
            max-width: 200px;
        }
    </style>
</head>
<body>
    <?php if($persons): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
            </tr>
            <?php foreach($persons as $person): ?>
                    <tr>
                        <td> <?= $person['id'] ?> </td>
                        <td> <img src="images/<?= $person['image'] ?>"> </td>
                        <td> <?= $person['name'] ?> </td>
                        <td>
                            <a href="update.php?id=<?= $person['id'] ?>">Edit</a>
                        </td>
                    </tr>
            <?php endforeach; ?>
        </table>
    <?php else:?>
        <p>Person empty !!</p>
    <?php endif;?>
    <a href="./insert.php">Back to insert </a>
</body>
</html>