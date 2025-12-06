<?php
require_once "db.php";
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];

switch($method) {
    case 'GET':
        $pdo = getConnection();
        $sql = "
            SELECT
                o.id AS order_id,
                o.user_id,
                o.total_amount,
                o.order_date,
                o.order_status,
                od.product_id,
                od.qty,
                c.name AS category_name,
                p.name AS product_name,
                p.price AS product_price
            FROM tborders o
            JOIN tborder_details od ON o.id = od.order_id
            JOIN tbproducts p ON od.product_id = p.id
            LEFT JOIN tbcategories c ON p.category_id = c.id
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $orders = [];

        foreach ($result as $row) {
            $orderId = (int) $row['order_id'];

            if (!isset($orders[$orderId])) {
                $orders[$orderId] = [
                    'order_id' => $orderId,
                    'user_id' => (int) $row['user_id'],
                    'total_amount' => (float) $row['total_amount'],
                    'order_date' => $row['order_date'],
                    'order_status' => $row['order_status'],
                    'items' => []
                ];
            }

            $orders[$orderId]['items'][] = [
                'product_id' => (int) $row['product_id'],
                'name' => $row['product_name'],
                'price' => (float) $row['product_price'],
                'qty' => (int) $row['qty'],
                'category_name' => $row['category_name'] ?? null
            ];
        }

        echo json_encode(array_values($orders));
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);

        if (!isset($data['user_id'], $data['total_amount'], $data['items']) || !is_array($data['items'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Invalid input']);
            exit;
        }

        $pdo = getConnection();
        $pdo->beginTransaction();

        try {
            $sqlOrder = "INSERT INTO tborders (user_id, total_amount, order_date) VALUES (?, ?, NOW())";
            $stmtOrder = $pdo->prepare($sqlOrder);
            $stmtOrder->execute([$data['user_id'], $data['total_amount']]);
            $orderId = $pdo->lastInsertId();

            $sqlDetail = "INSERT INTO tborder_details (order_id, product_id, qty) VALUES (?, ?, ?)";
            $stmtDetail = $pdo->prepare($sqlDetail);

            foreach ($data['items'] as $item) {
                if (!isset($item['product_id'], $item['qty'])) {
                    throw new Exception('Invalid item data');
                }
                $stmtDetail->execute([$orderId, $item['product_id'], $item['qty']]);
            }

            $pdo->commit();
            http_response_code(201);
            echo json_encode(['message' => 'Order created', 'order_id' => (int)$orderId]);
        } catch (Exception $e) {
            $pdo->rollBack();
            http_response_code(500);
            echo json_encode(['error' => 'Failed to create order', 'details' => $e->getMessage()]);
        }
        break;
    case 'DELETE':
        $orderId = isset($_GET['id']) ? intval($_GET['id']) : null;
        if (!$orderId) {
            http_response_code(400);
            echo json_encode(['error' => 'Order ID is required']);
            exit;
        }
       
        $pdo = getConnection();
        $pdo->beginTransaction();

        try {
            $stmtDetail = $pdo->prepare("DELETE FROM tborder_details WHERE order_id = :id");
            $stmtDetail->execute([':id' => $orderId]);

            $stmtOrder = $pdo->prepare("DELETE FROM tborders WHERE id = :id");
            $stmtOrder->execute([':id' => $orderId]);

            $pdo->commit();
            echo json_encode(['message' => 'Order deleted']);
        } catch (Exception $e) {
            $pdo->rollBack();
            http_response_code(500);
            echo json_encode(['error' => 'Failed to delete order', 'details' => $e->getMessage()]);
        }
        break;
    default:
        http_response_code(405);
        echo json_encode(['error' => 'Method Not Allowed']);
        break;
}

?>