<?php
require_once "db.php";
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];

function getCart($userId = null) {
    $pdo = getConnection();

    $sql = "
        SELECT
            cart.user_id,
            ci.qty,
            p.id AS product_id,
            p.name,
            p.description,
            p.price,
            c.name AS category_name
        FROM tbcart_items ci
        JOIN tbcarts cart ON ci.cart_id = cart.id
        JOIN tbproducts p ON ci.product_id = p.id
        LEFT JOIN tbcategories c ON p.category_id = c.id
    ";

    if ($userId) {
        $sql .= " WHERE cart.user_id = ?";
    } else {
        $sql .= " ORDER BY cart.user_id ASC";
    }

    $stmt = $pdo->prepare($sql);
    $userId ? $stmt->execute([$userId]) : $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

switch ($method) {
    case 'GET':
        $userId = isset($_GET['user_id']) ? intval($_GET['user_id']) : null;
        $result = $userId ? getCart($userId) : getCart();

        $userCarts = [];

        foreach ($result as $row) {
            $uid = (int) $row['user_id'];

            if (!isset($userCarts[$uid])) {
                $userCarts[$uid] = [
                    'user_id' => $uid,
                    'cart_items' => []
                ];
            }

            $userCarts[$uid]['cart_items'][] = [
                'product_id' => (int) $row['product_id'],
                'name' => $row['name'],
                'description' => $row['description'],
                'price' => (float) $row['price'],
                'qty' => (int) $row['qty'],
                'category_name' => $row['category_name'] ?? null
            ];
        }

        echo json_encode(array_values($userCarts), JSON_PRETTY_PRINT);
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $userId = isset($data['user_id']) ? intval($data['user_id']) : null;
        $productId = isset($data['product_id']) ? intval($data['product_id']) : null;
        $qty = isset($data['qty']) ? intval($data['qty']) : 1;

        $pdo = getConnection();

        $cartId = dbSelect("tbcarts", "id", "user_id = $userId", "", true);
        // Step 1: Check if user already has a cart
        $stmt = $pdo->prepare("SELECT id FROM tbcarts WHERE user_id = :user_id LIMIT 1");
        $stmt->execute(['user_id' => $userId]);
        $cartId = $stmt->fetchColumn();

        if (!$cartId) {
            // Create new cart if not found
            $stmt = $pdo->prepare("INSERT INTO tbcarts (user_id) VALUES (:user_id)");
            $stmt->execute(['user_id' => $userId]);
            $cartId = $pdo->lastInsertId();
        }

        // Step 2: Check if item already in cart
       $stmt = $pdo->prepare("SELECT qty FROM tbcart_items WHERE cart_id = :cart_id AND product_id = :product_id");
       $stmt->execute(['cart_id' => $cartId, 'product_id' => $productId]);
       $existingQty = $stmt->fetchColumn();

        if ($existingQty !== false && $existingQty !== null) {
            // Item exists – update qty
            $newQty = $existingQty + $qty;
            $cartItemData = ['qty' => $newQty];
            dbUpdate("tbcart_items", $cartItemData, "cart_id = $cartId AND product_id = $productId");
            $action = 'updated';
        } else {
            // New item – insert
            $cartItemData = [
                'cart_id' => $cartId,
                'product_id' => $productId,
                'qty' => $qty
            ];
            dbInsert("tbcart_items", $cartItemData);
            $action = 'inserted';
        }

        // Step 3: Return response
        $response = [
            'success' => true,
            'message' => "Item {$action} in cart.",
            'cart_id' => (int) $cartId
        ];

        echo json_encode($response, JSON_PRETTY_PRINT);
        break;
    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        $userId = isset($data['user_id']) ? intval($data['user_id']) : null;
        $productId = isset($data['product_id']) ? intval($data['product_id']) : null;

        if (!$userId) {
            http_response_code(400);
            echo json_encode(['error' => 'user_id and product_id are required']);
            exit;
        }

        $pdo = getConnection();

        // Get cart ID
        $stmt = $pdo->prepare("SELECT id FROM tbcarts WHERE user_id = :user_id LIMIT 1");
        $stmt->execute(['user_id' => $userId]);
        $cartId = $stmt->fetchColumn();

        if (!$cartId) {
            http_response_code(404);
            echo json_encode(['error' => 'Cart not found for user']);
            exit;
        }

        // Delete item from cart
       if(!$productId){
            $stmt = $pdo->prepare("DELETE FROM tbcart_items WHERE cart_id = :cart_id");
            $stmt->execute(['cart_id' => $cartId]);
       }
       else{
            $stmt = $pdo->prepare("DELETE FROM tbcart_items WHERE cart_id = :cart_id AND product_id = :product_id");
            $stmt->execute(['cart_id' => $cartId, 'product_id' => $productId]);
       }

        echo json_encode(['success' => true, 'message' => 'Item removed from cart']);
        break;

    default:
        http_response_code(405);
        echo json_encode(["message" => "Method not allowed"]);
        break;
}
?>
