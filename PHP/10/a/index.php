<?php 
    require_once './connectdb.php';
    $stmt = $pdo->query("SELECT * FROM tbbooks ORDER BY book_id");
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books</title>
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
           
            font-weight: bold;
        }
       
        th:last-child,.remove_button,.edit_button{
            text-align: center;
        }
        .add_new{
            margin: 10px 0;
            
            padding: 8px 25px;
            background-color: #3b4fe1ff;
            text-decoration: none;
            color: whitesmoke;
            display: inline-block;
            border-radius: 5px;
            cursor: pointer;
            &:hover{
                background-color: #3b4ee1d4;
            }
        }
        
    </style>
</head>
<body>
    <div class=" container">
        <h1>Book lists</h1>
       
            <a class="add_new" href="./bookform.php">Add new book</a>
      
        <?php if ($books): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Book</th>
                    <th>Price</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php foreach($books as $book): ?>
                    <tr>
                        <td>
                            <a href=""><?= $book['book_id'] ?></a> 
                        </td>
                        <td> <?= $book['title'] ?> </td>
                        <td>$<?= $book['price'] ?> </td>
                        <td class="edit_button">
                            <a href="./Updateform.php?id=<?= $book['book_id'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#061fddff">
                                    <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/>
                                </svg>
                            </a>
                        </td>
                        <td class="remove_button">
                            <a href="./delete.php?id=<?= $book['book_id'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#ae0f0fff">
                                    <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        <?php else: ?>
            <p>Book list empty please insert !!</p>
        <?php endif; ?>
        <a href="./bookform.php"></a>
    </div>
</body>
</html>