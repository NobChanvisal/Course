<?php   
    require_once 'connectdb.php';
    header("Content-Type: application/json");
    header('Access-Control-Allow-Origin: *');

    $method = $_SERVER['REQUEST_METHOD'];

    switch($method){
        case "GET":
            $keyword = isset($_GET['search'])? $_GET['search'] : null;
            
            $sql = "
                SELECT tbcourse.*, c.name AS category_name
                FROM tbcourse
                INNER JOIN tbcategory c ON tbcourse.category_id = c.id
                WHERE 1
            ";

            if ($keyword) {
                $sql .= " AND tbcourse.name LIKE :search ";
                $stmt = $pdo->prepare($sql);
                $search = "%{$keyword}%";
                $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            }
            else{
                $stmt = $pdo->prepare($sql);
            }
            $stmt->execute();
            $course = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $result = [];
            foreach($course as $row){
                $result[] = [
                    'id' => (int) $row['id'],
                    'name' => $row['name'],
                    'description' => $row['description'],
                    'price' => (float) $row['price'],
                    'category'    => [
                        'category_id'   => (int) $row['category_id'],
                        'category_name' => $row['category_name']
                    ]
                ];
            }
            echo json_encode($result);
            break;
        case "POST":
            $data = json_decode(file_get_contents('php://input'), true);
            if(!$data){
                http_response_code(400);
                echo json_encode(["error" => "invalid or missing data"]);
                exit;
            }
            $sql = "INSERT INTO tbcourse(name, description, price, category_id) VALUE (:name, :des, :price, :cat_id)";
            $stmt = $pdo->prepare($sql);

            $param = [
                ':name' => $data['name'],
                ':des' => $data['description'],
                ':price' => $data['price'],
                ':cat_id' => $data['category_id']
            ];


            if($stmt->execute($param)){
                echo json_encode(["message" => "Course created successfully."]);
            }
            else{
                http_response_code(500);
                echo json_encode(["error" => "Failed to create course."]);
            }
            break;
        case "PUT":
            $data = json_decode(file_get_contents('php://input'), true);
            $id = isset($_GET['id'])? $_GET['id'] : null;
            if(!$data || !$id){
                http_response_code(400);
                echo json_encode(["error" => "invalid or missing data."]);
                exit;
            }
            $sql = "UPDATE tbcourse SET name = :name, description = :des, price = :price, category_id = :cat_id WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $param = [
                ':name' => $data['name'],
                ':des' => $data['description'],
                ':price' => $data['price'],
                ':cat_id' => $data['category_id'],
                ':id' => $id
            ];
            if($stmt->execute($param)){
                echo json_encode(["message" => "Course updated successfully."]);
            }
            else{
                http_response_code(500);
                echo json_encode(["error" => "Failed to update product."]);
            }
            break;
        case "DELETE":
            $id = isset($_GET['id'])? $_GET['id'] : null;
            if(!$id){
                http_response_code(400);
                echo json_encode(["error" => "invalid or missing data."]);
                exit;
            }
            $sql = "DELETE FROM tbcourse WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            if($stmt->execute()){
                echo json_encode(["message" => "Course deleted successfully."]);
            }
            else {
                http_response_code(500);
                echo json_encode(["error" => "Failed to delete course."]);
            }
            break;
    default:
        http_response_code(405);
        echo json_encode(["error" => "Method not allowed."]);
        break;
    }

?>