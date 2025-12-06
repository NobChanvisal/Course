<?php 
    require_once 'connectDb.php'; 
    $stmt = $conn->query("SELECT * FROM tbemployee");
    $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!$employees): ?>
        <h1>No Employee please register !!</h1>
    <?php else:?>
        <h1>Employee list</h1>
        <table border="1" cellpadding="4">
            <tr>
                <td colspan="5" style=" text-align: center;">
                    <a href="./insert.php">insert new</a>
                </td>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
            <tbody>
                <?php foreach($employees as $emp):  ?>
                    <tr>
                        <td> <?= $emp['id'] ?> </td>
                        <td><?= $emp['fullname'] ?></td>
                        <td><?= $emp['gender'] ?></td>
                        <td><?= $emp['adress'] ?></td>
                        <td>
                            <a href="./update.php?id=<?= $emp['id'] ?>">Edit</a>
                            <a href="./delete.php?id=<?= $emp['id'] ?>" style="color: red;" onclick="return confirm('Are you sure to delete this record ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    <?php endif; ?>
</body>
</html>