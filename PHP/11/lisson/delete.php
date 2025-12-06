<?php
    require_once 'connectDb.php'; 

    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        $stmt = $conn->prepare("DELETE FROM tbemployee WHERE id = :id");
        $stmt->bindParam(':id', $id);
        if($stmt->execute()){
            header("Location: ./index.php?message=Delete success");
        } else {
            echo "Error deleting record.";
        }
    } else {
        echo "No ID specified.";
    }
?>