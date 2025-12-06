<?php
    require_once 'connectdb.php';
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");

    $method = $_SERVER['REQUEST_METHOD'];

    switch($method){
        case "GET":
            $keyword = isset($_GET['search'])? $_GET['search'] : null;

            if($keyword){
                $stmt = $pdo->prepare("SELECT * FROM tbcategory WHERE name LIKE :search");
                $search = "%{$keyword}%";
                $stmt->bindParam(':search',$search);
            }
            else{
                $stmt = $pdo->prepare("SELECT * FROM tbcategory");
            }
            $stmt->execute();
            $category = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($category);
            break; 
        case "POST":
            // Common validation for name and description
            if(!isset($_POST['name']) || !isset($_POST['description']) || empty(trim($_POST['name'])) || empty(trim($_POST['description']))){
                http_response_code(400);
                echo json_encode(["error" => "invalid or missing data"]);
                exit;
            }

            // Determine if this is an update (id provided) or insert
            $id = isset($_GET['id']) ? $_GET['id'] : (isset($_POST['id']) ? $_POST['id'] : null);
            $uploadDir = "uploads/";
            $filename = null;
            $oldImage = null;
            $newImage = null;
            $uploadedFilePath = null;

            if (!$id) {
                // INSERT logic (create new category)
                if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }

                    $file = $_FILES['image'];
                    $filename = time() . '_' . basename($file['name']);
                    $filePath = $uploadDir . $filename;
                    if (!move_uploaded_file($file['tmp_name'], $filePath)) {
                        http_response_code(500);
                        echo json_encode(["error" => "Failed to upload image"]);
                        exit;
                    }
                    $newImage = $filename;
                }

                $sql = "INSERT INTO tbcategory(name, description, image) VALUES (:name, :des, :image)";
                $stmt = $pdo->prepare($sql);
                $param = [
                    ':name' => trim($_POST['name']),
                    ':des' => trim($_POST['description']),
                    ':image' => $newImage
                ];

                if($stmt->execute($param)){
                    http_response_code(201); // Created
                    echo json_encode(["message" => "Category created successfully."]);
                }
                else{
                    http_response_code(500);
                    // Clean up uploaded file if DB insert failed
                    if ($newImage && file_exists($uploadDir . $newImage)) {
                        unlink($uploadDir . $newImage);
                    }
                    echo json_encode(["error" => "Failed to create category."]);
                }
            } else {
                // UPDATE logic
                // Get existing category
                $st = $pdo->prepare("SELECT image FROM tbcategory WHERE id = :id");
                $st->execute([":id" => $id]);
                $category = $st->fetch(PDO::FETCH_ASSOC);

                if (!$category) {
                    http_response_code(404);
                    echo json_encode(["error" => "Category not found"]);
                    exit;
                }

                $oldImage = $category['image'];
                $newImage = $oldImage; // keep old image unless new one uploaded

                // If new image uploaded
                if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }

                    // Upload new image
                    $file = $_FILES['image'];
                    $newImage = time() . '_' . basename($file['name']);
                    $uploadedFilePath = $uploadDir . $newImage;

                    if (move_uploaded_file($file['tmp_name'], $uploadedFilePath)) {
                        // Delete old image if exists
                        if ($oldImage && file_exists($uploadDir . $oldImage)) {
                            unlink($uploadDir . $oldImage);
                        }
                    } else {
                        http_response_code(500);
                        echo json_encode(["error" => "Failed to move new uploaded image."]);
                        exit;
                    }
                }
                
                $sql = "UPDATE tbcategory SET name = :name, description = :des, image = :image WHERE id = :id";
                $stmt = $pdo->prepare($sql);

                $param = [
                    ':name' => trim($_POST['name']),
                    ':des' => trim($_POST['description']),
                    ':image' => $newImage,
                    ':id' => $id
                ];
                
                if($stmt->execute($param)){
                    http_response_code(200); // OK
                    echo json_encode([
                        "message" => "Category updated successfully.",
                        "new_image" => $newImage
                    ]);
                }
                else{
                    http_response_code(500);
                    // Clean up new file if DB update failed
                    if ($uploadedFilePath && file_exists($uploadedFilePath) && $newImage !== $oldImage) {
                        unlink($uploadedFilePath);
                    }
                    echo json_encode(["error" => "Failed to update category."]);
                }
            }
            break;
        case "DELETE":
            $id = isset($_GET['id'])? $_GET['id'] : null;
            if(!$id){
                http_response_code(400);
                echo json_encode(["error" => "invalid or missing data."]);
                exit;
            }

            $st = $pdo->prepare("SELECT image FROM tbcategory WHERE id = :id");
            $st->execute([":id" => $id]);
            $category = $st->fetch(PDO::FETCH_ASSOC);

            if (!$category) {
                http_response_code(404);
                echo json_encode(["error" => "Category not found"]);
                exit;
            }

            $image = $category['image'];
            $uploadDir = "uploads/";

            // Delete image file if exists
            if ($image && file_exists($uploadDir . $image)) {
                unlink($uploadDir . $image);
            }
            $sql = "DELETE FROM tbcategory WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id);

            if($stmt->execute()){
                http_response_code(200); // OK
                echo json_encode(["message" => "category deleted successfully."]);
            }
            else {
                http_response_code(500);
                echo json_encode(["error" => "Failed to delete category."]);
            }
            break;
    }

?>