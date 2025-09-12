<?php
require_once '../../db.php';
include '../include/function.php';
//insert product
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category_id = $_POST['category'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];

        if($image){
            $targetDir = "../../image/";
            $isMoved = MoveIMage($_FILES['image'], $targetDir);
            if(!$isMoved){
                $image = null;
            }
        } else {
            $image = null;
        }

        $data = [
            'name' => $name,
            'price' => $price,
            'category_id' => $category_id,
            'description' => $description,
            'image' => $image
        ];
        if(dbInsert('tbproducts', $data)) {
            $message = true;
            $_POST = [];
        } else {
            $message = false;
        }
            
    }
    header("Location: ../products.php?bool=$message&message=" . ($message === true ? 'insert_success' : 'insert_failed'));
        exit;
?>