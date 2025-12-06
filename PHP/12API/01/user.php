<?php
// Set response header to return JSON content
header("Content-Type: application/json");

require_once "db.php";

// Get the HTTP request method (GET, POST, DELETE, etc.)
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
        $users = dbSelect("tbusers","id, username, email");
        echo json_encode($users);
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true); // Read the JSON input

        if (!$data || !isset($data['username']) || !isset($data['email'])) {
            http_response_code(400);
            echo json_encode(["error" => "Invalid or missing data."]);
            exit;
        }

        $passwordHash = password_hash($data['password'], PASSWORD_BCRYPT);
        $data['password'] = $passwordHash;

        $success = dbInsert("tbusers", $data);

        if ($success) {
            http_response_code(201);
            echo json_encode(["message" => "User created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to create user."]);
        }
        break;

    case 'DELETE':
        $id = isset($_GET['id']) ? intval($_GET['id']) : null;

        if (!$id) {
            http_response_code(400);
            echo json_encode(["error" => "Missing user ID."]);
            exit;
        }

        $success = dbDelete("tbusers", "id = ?", [$id]);

        if ($success) {
            echo json_encode(["message" => "User deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to delete user."]);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Method not allowed."]);
        break;
}

?>
