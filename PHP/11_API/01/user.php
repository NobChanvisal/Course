<?php
// Set response header to return JSON content
header("Content-Type: application/json");

require_once "db.php";

// Get the HTTP request method (GET, POST, DELETE, etc.)
$method = $_SERVER['REQUEST_METHOD'];

//get user
//real_escape_string function : use for Escapes special characters like ', ", \, etc.,to prevent SQL injection
if ($method === 'GET') {
    $keyword = isset($_GET['search']) ? $_GET['search'] : null;

    if ($keyword) {
        $stmt = $pdo->prepare("SELECT * FROM tbusers WHERE name LIKE ? OR email LIKE ?");
        $stmt->execute(["%$keyword%", "%$keyword%"]);
    } else {
        $stmt = $pdo->query("SELECT * FROM tbusers"); // already executed, no need for execute()
    }

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($users);
}


// insert new user
elseif ($method === 'POST') {
    // Read the JSON input and convert it to an associative array
    $data = json_decode(file_get_contents("php://input"), true);

    
    if (!empty($data['name']) && !empty($data['email'])) {
        // Use prepared statements to prevent SQL injection
        $stmt = $pdo->prepare("INSERT INTO tbusers (name, email) VALUES (?, ?)");
        $success = $stmt->execute([$data['name'], $data['email']]);
        if ($success) {
            echo json_encode(["message" => "User created successfully."]);
        } else {
            echo json_encode(["error" => "Failed to create user: " . $pdo->errorInfo()[2]]);
        }
    } else {
      
        echo json_encode(["error" => "Missing name or email"]);
    }
}
// update
elseif ($method === 'PUT') {
    // Get user ID from query string
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $data = json_decode(file_get_contents("php://input"), true);

    if (!empty($data['name']) && !empty($data['email'])) {
        $stmt = $pdo->prepare("UPDATE tbusers SET name = ?, email = ? WHERE id = ?");
        $success = $stmt->execute([$data['name'], $data['email'], $id]);
        if ($success) {
            echo json_encode(["message" => "User updated successfully."]);
        } else {
            echo json_encode(["error" => "Failed to update user"]);
        }
    } else {
        echo json_encode(["error" => "Missing id, name, or email"]);
    }
}
// delete
elseif ($method === 'DELETE') {
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']); // Convert ID to integer for safety
        
        $stmt = $pdo->prepare("DELETE FROM tbusers WHERE id = ?");
        $success = $stmt->execute([$id]);
        if ($success) {
            echo json_encode(["message" => "User deleted successfully."]);
        } else {
            echo json_encode(["error" => "Failed to delete user"]);
        }
    } else {
       
        echo json_encode(["error" => "Missing id"]);
    }
}

// if other request method 
else {
    echo json_encode(["error" => "Unsupported request method"]);
}

?>
