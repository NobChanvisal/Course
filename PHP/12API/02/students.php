<?php
    require_once 'connectdb.php';
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    
    $method = $_SERVER['REQUEST_METHOD'];

    switch($method){
        case "GET":

            $sql = "
                SELECT 
                    S.*, 
                    C.name AS course_name,
                    C.id AS course_id,
                    C.price,
                    cate.name AS category_name,
                    stu_C.enrollment_date
                FROM tbstudents S
                JOIN tbstudent_courses stu_C ON S.id = stu_C.student_id
                JOIN tbcourse C ON stu_C.course_id = C.id
                LEFT JOIN tbcategory cate ON C.category_id = cate.id
            ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $result = [];
            foreach($students as $stu){
                $studentId = (int) $stu['id'];

                //ពិនិត្យមើលថា តើធាតុសម្រាប់ $studentId ជាក់លាក់នេះមានរួចហើយនៅក្នុង ​array $result ដែរឬទេ។
                    
                if(!isset($result[$studentId])){//If it does NOT exist create a new entry in $result using the $studentId as the key
                    $result[$studentId] = [
                        'id' => $studentId,
                        'name' => $stu['name'],
                        'gender' => $stu['gender'],
                        'DOB' => $stu['DOB'],
                        'phone' => $stu['phone'],
                        'address' => $stu['address'],
                        'courses' => []
                    ];
                }
                $result[$studentId]['courses'][] = [
                    'course_id' => (int) $stu['course_id'],
                    'course_name' => $stu['course_name'],
                    'price' => (float) $stu['price'],
                    'category_name' => $stu['category_name'],
                    'enrollment_date' => $stu['enrollment_date']
                ];
            }
            echo json_encode(array_values($result));
            break; 
        case "POST":
            $data = json_decode(file_get_contents('php://input'), true);

            if(!$data){
                http_response_code(400);
                echo json_encode(["error" => "invalid or missing data"]);
                exit;
            }

            // Insert student info
            $sql = "INSERT INTO tbstudents(name, gender, DOB, phone, address) 
                    VALUES (:name, :gender, :DOB, :phone, :address)";
            $stmt = $pdo->prepare($sql);

            $param = [
                ':name' => $data['name'],
                ':gender' => $data['gender'],
                ':DOB' => $data['DOB'],
                ':phone' => $data['phone'],
                ':address' => $data['address']
            ];

            $stmt->execute($param);
            $studentId = $pdo->lastInsertId();

            if($studentId){

                $courseIds = is_array($data['course_id']) ? $data['course_id'] : [$data['course_id']];

                $sql = "INSERT INTO tbstudent_courses(student_id, course_id) 
                        VALUES (:stu_id, :course_id)";
                $stmtCourse = $pdo->prepare($sql);

                foreach($courseIds as $cid){
                    $stmtCourse->execute([
                        ':stu_id' => $studentId,
                        ':course_id' => $cid
                    ]);
                }

                http_response_code(201);
                echo json_encode([
                    "message" => "Student created successfully",
                    "student_id" => (int)$studentId,
                    "courses_added" => $courseIds
                ]);
            } else {
                http_response_code(500);
                echo json_encode(["error" => "Failed to create student"]);
            }
            break;

        default:
            http_response_code(405);
            echo json_encode(["error" => "Method not allowed"]);
            break;
    }


?>