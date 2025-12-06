<?php
require_once '../../db.php';
include '../include/function.php';
//update product
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_id'])){
        $update_id = $_POST['update_id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category_id = $_POST['category'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];
        

        if($image){
            $targetDir = "../../image/";
            $isMoved = MoveIMage($_FILES['image'], $targetDir);
            if ($isMoved) {
                    $existingProduct = dbSelect('tbproducts', 'image', "id = $update_id","", true);
                    $oldImage = $existingProduct['image'] ?? null;
                    if ($oldImage && file_exists($targetDir . $oldImage) && $oldImage !== 'landing.jpg') {
                        unlink($targetDir . $oldImage);
                    }
                } else {
                    $image = null;
                }
        } else {
            // keep the old image if no new image is uploaded
            $existingProduct = dbSelect('tbproducts', '*', "id = $update_id","",true);
            $image = $existingProduct['image'] ?? null;
        }


        $data = [
            'name' => $name,
            'price' => $price,
            'category_id' => $category_id,
            'description' => $description,
            'image' => $image
        ];
        if (dbUpdate('tbproducts', $data, "id = $update_id")) {
            $message = true;
            $_POST = [];
        } else {
            $message = false;
            error_log("Failed to update product ID $update_id");
        }
        header("Location: ../products.php?bool=$message&message=" . ($message === true ? 'update_success' : 'update_failed'));
        exit;
    }
?>