<?php
    require_once './db_connect.php';
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['username'];
        $image = $_FILES['imagefile']['name'];
        $fileDir = "images/";
        if(!is_dir($fileDir)){
            mkdir($fileDir,0777, true);
            exit();
        }

        $targetFile = $fileDir . basename($image);

        if(empty($name) || empty($image)){
            $error = "All fields are required.";
        }
        else{
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $allowType = ["jpg","png"];
            if(!in_array($fileType,$allowType)){
                $error = "Only JPG, PNG are allowed !!";
            }
            else{
                if(move_uploaded_file($_FILES['imagefile']['tmp_name'],$targetFile)){
                    $stmt = $pdo->prepare("INSERT INTO tbpersonimage(name, image) VALUE (?, ?)");
                    $stmt->execute([$name, $image]);
                    $success = "Record add successfully.";
                }
                else {
                    $error = "Failed to upload image."; 
                }
            }
        }
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
    <?php if (isset($error)): ?>
            <p class="text-red-500 mb-4"><?php echo $error; ?></p>
        <?php elseif (isset($success)): ?>
            <p class="text-green-500 mb-4"><?php echo $success; ?></p>
        <?php endif; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="enter username"> <br>
        <input type="file" name="imagefile">
        <input type="submit" value="submit">
    </form>
</body>
</html>