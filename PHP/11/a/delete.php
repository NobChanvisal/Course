<?php
    require_once './connectdb.php';
    $bookid = isset($_GET['id'])? (int)$_GET['id'] : 0;

    if($bookid){
        $check = $pdo->prepare("SELECT * FROM tbbooks WHERE book_id = ?");
        $check->execute([$bookid]);
        $book = $check->fetch(PDO::FETCH_ASSOC);
        
        if($book){
            $stmt = $pdo->prepare("DELETE FROM tbbooks WHERE book_id = ?");
            $success = $stmt->execute([$bookid]);
            if($success){
                echo '<p>Book Delete successfull !</p>';
            }
        }
        else{
            echo '<p> Book not found !!</p>';
        }
    }
    else{
        echo '<p> Invalid book ID.</p>';
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
    <a href="./index.php">Back to book list !!</a>
</body>
</html>