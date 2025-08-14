<?php
    header("Content-Type: application/json");
    require_once "db.php";
    $method = $_SERVER['REQUEST_METHOD'];

    switch($method){
        case 'GET':
            $keyword = isset($_GET['search']) ? $_GET['search'] : null;

            if ($keyword) {
                $stmt = $pdo->prepare("SELECT * FROM tbproducts WHERE name LIKE ? OR email LIKE ?");
                $stmt->execute(["%$keyword%", "%$keyword%"]);
            } else {
                $stmt = $pdo->query("SELECT * FROM tbproducts");
            }

            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($products);
            break;
        case 'POST':
            $data = json_decode(file_get_contents("php://input"), true);
            
            $name = isset($data['name']) ? htmlspecialchars($data['name']) : '';
            $description = isset($data['description']) ? htmlspecialchars($data['description']) : '';
            $price = isset($data['price']) ? floatval($data['price']) : 0.0;
            $stock = isset($data['stock_qty']) ? intval($data['stock_qty']) : 0;
            $categoryId = isset($data['category_id']) ? intval($data['category_id']) : 0;
            $image = isset($data['image']) ? htmlspecialchars($data['image']) : '';

            $stmt = $pdo->prepare("INSERT INTO tbproducts (name, description, price, stock_qty, category_id, image) VALUES (?, ?, ?, ?, ?, ?)");
            $sucess = $stmt->execute([$name, $description, $price, $stock, $categoryId, $image]);
            if($sucess){
                echo json_encode(["message" => "Product created successfully."]);
            } else {
                echo json_encode(["error" => "Failed to create product: " . $pdo->errorInfo()[2]]);
            }
            break;
        case 'PUT':
            $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
            $data = json_decode(file_get_contents("php://input"), true);
            $name = isset($data['name']) ? htmlspecialchars($data['name']) : '';
            $description = isset($data['description']) ? htmlspecialchars($data['description']) : '';
            $price = isset($data['price']) ? floatval($data['price']) : 0.0;
            $stock = isset($data['stock_qty']) ? intval($data['stock_qty']) : 0;
            $categoryId = isset($data['category_id']) ? intval($data['category_id']) : 0;
            $image = isset($data['image']) ? htmlspecialchars($data['image']) : '';

            $stmt = $pdo->prepare("UPDATE tbproducts SET name = ?, description = ?, price = ?, stock_qty = ?, category_id = ?, image = ? WHERE id = ?");
            $success = $stmt->execute([$name, $description, $price, $stock, $categoryId, $image, $id]);
            if($success){
                echo json_encode(["message" => "Product updated successfully."]);
            } else {
                echo json_encode(["error" => "Failed to update product"]);
            }       
            break;
        
    }
?>