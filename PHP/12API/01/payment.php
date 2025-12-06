<?php
require_once "db.php";
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
switch($method) {
    case 'GET':
        $pdo = getConnection();
        $start_date = $_GET['start_date'] ?? null;
        $end_date = $_GET['end_date'] ?? null;

        $sql = "
            SELECT
                p.id AS payment_id,
                p.order_id,
                p.amount,
                p.payment_date,
                p.type,
                o.user_id
            FROM tbpayments p
            JOIN tborders o ON p.order_id = o.id
            WHERE 1
        ";

        // Add filters dynamically
        if ($start_date && $end_date) {
            $sql .= " AND p.payment_date BETWEEN :start_date AND :end_date";
        } elseif ($start_date) {
            $sql .= " AND p.payment_date >= :start_date";
        } elseif ($end_date) {
            $sql .= " AND p.payment_date <= :end_date";
        }

        $stmt = $pdo->prepare($sql);

      
        if ($start_date) $stmt->bindParam(':start_date', $start_date);
        if ($end_date) $stmt->bindParam(':end_date', $end_date);

        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $show_result = [];
        foreach ($result as $row) {
            $show_result[] = [
                'payment_id' => (int) $row['payment_id'],
                'order_id' => (int) $row['order_id'],
                'amount' => (float) $row['amount'],
                'payment_date' => $row['payment_date'],
                'type' => $row['type'],
                'user_id' => (int) $row['user_id']
            ];
        }

        echo json_encode($show_result);
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);

        if (!isset($data['order_id'], $data['amount'])) {
            http_response_code(400);
            echo json_encode(["error" => "Invalid or missing data."]);
            exit;
        }

        $success = dbInsert("tbpayments", $data);

        if ($success) {
            http_response_code(201);
            $orderid = intval($data['order_id']);
            dbUpdate("tborders", ["order_status" => "Paid"], "id = $orderid");
            echo json_encode(["message" => "Payment recorded successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to record payment."]);
        }
        break;
    case 'DELETE':
        $paymentId = intval($_GET['payment_id']) ?? null;

        if (!isset($paymentId)) {
            http_response_code(400);
            echo json_encode(["error" => "Missing payment_id."]);
            exit;
        }
        
        $success = dbDelete("tbpayments", "id = $paymentId");

        if ($success) {
            echo json_encode(["message" => "Payment deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to delete payment."]);
        }
        break;
}

?>