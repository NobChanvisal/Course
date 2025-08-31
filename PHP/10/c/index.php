<?php
    require_once "connectdb.php";
    $stmt = $pdo->query("SELECT student_id, student_name, gender FROM student ORDER BY student_id");
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .add_link_content {
            text-align: center;
            margin: 20px 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=" container">
        <h1>Student list</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th colspan="2">Option</th>
        </tr>
        <tr>
            <td class="add_link_content" colspan="5">
                <a  href="./form.php">add (a student )</a>
            </td>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><a href="student_detail.php?id=<?=$student['student_id']?>"><?= htmlspecialchars($student['student_id']); ?></a></td>
            <td><?= htmlspecialchars($student['student_name']); ?></td>
            <td><?= htmlspecialchars($student['gender']); ?></td>  
            <td>
                <a href="./update.php?id=<?= $student['student_id'] ?>">Edit</a>
            </td>
            <td>
                <a href="delete.php?id=<?= $student['student_id'] ?>" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>