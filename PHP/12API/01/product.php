<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
require_once "db.php";

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $keyword = isset($_GET['search']) ? trim($_GET['search']) : null;
        $pdo = getConnection();
        if ($keyword) {
            
            $stmt = $pdo->prepare("
                SELECT p.id, p.name, p.description, p.price, 
                c.name AS category_name 
                FROM tbproducts p
                LEFT JOIN tbcategories c ON p.category_id = c.id
                WHERE p.name LIKE ? OR c.name LIKE ?");
            $stmt->execute(["%$keyword%", "%$keyword%"]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $stmt = $pdo->query("
                SELECT p.id, p.name, p.description, p.price, 
                c.name AS category_name 
                FROM tbproducts p
                LEFT JOIN tbcategories c ON p.category_id = c.id");
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        echo json_encode($result);
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);// Read the JSON input

        if (!$data || !isset($data['name'])) {
            http_response_code(400);
            echo json_encode(["error" => "Invalid or missing data."]);
            exit;
        }

        $success = dbInsert("tbproducts", $data);

        if ($success) {
            http_response_code(201);
            echo json_encode(["message" => "Product created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to create product."]);
        }
        break;
    case 'PUT':
        $id = isset($_GET['id']) ? intval($_GET['id']) : null;
        $data = json_decode(file_get_contents('php://input'), true);

        if (!$data || !isset($data['name'])) {
            http_response_code(400);
            echo json_encode(["error" => "Invalid or missing data."]);
            exit;
        }

        $success = dbUpdate("tbproducts", $data, "id = $id");

        if ($success) {
            echo json_encode(["message" => "Product updated successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to update product."]);
        }
        break;
    case 'DELETE':
        $id = isset($_GET['id']) ? intval($_GET['id']) : null;

        $success = dbDelete("tbproducts", "id = $id");

        if ($success) {
            echo json_encode(["message" => "Product deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to delete product."]);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Method not allowed."]);
}
?>
