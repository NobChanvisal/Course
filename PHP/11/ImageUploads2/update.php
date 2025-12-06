<?php
    require_once './db_connect.php';

    if(!isset($_GET['id'])){
        header("Location: index.php");
        exit();
    }

    $id = $_GET['id'];

    try{
        $stmt = $pdo->prepare("SELECT * FROM tbpersonimage WHERE id = ?");
        $stmt->execute([$id]);
        $person = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$person) {
            header("Location: index.php");
            exit();
        }
    }
    catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        exit();
    }
    
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
                        if (file_exists($person['image'])) {
                            unlink($person['image']);
                        }
                        $stmt = $pdo->prepare("UPDATE tbpersonimage SET name = ?, image = ? WHERE id = ?");
                        $stmt->execute([$name, $image,$id]);
                        $success = "Record update successfully.";
                        
                        header("Location: update.php?id=" . $person['id']);
                        exit();
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
        <input type="text" value="<?= $person['name'] ?>" name="username" placeholder="enter username"> <br>
        <input type="file" name="imagefile" id="image">
        <input type="submit" value="submit">
    </form>
    <?php if (!empty($person['image'])): ?>
        <img width="200" id="preview" src="images/<?= $person['image'] ?>" alt="Person Image" class="mb-4">
    <?php endif; ?>

    <a href="./index.php">Back to list</a>
</body>
</html>