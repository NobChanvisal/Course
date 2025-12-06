<?php

    require_once 'db.php';
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
  

    $method = $_SERVER['REQUEST_METHOD'];

    switch($method){
        case "GET":
            $keyword = isset($_GET['search'])? $_GET['search'] : null;

            if($keyword){
                $categories = dbSelect("tbcategories","*","name LIKE '%$keyword%'");
            }
            else{

                $categories = dbSelect("tbcategories");
            }

            echo json_encode($categories);
            break;
        case "POST":
            $data = json_decode(file_get_contents('php://input'),true);
            if(!$data){
                http_response_code(400);
                echo json_encode(["error" => "Invalid or missing data."]);
                exit;
            }

            $sucess = dbInsert("tbcategories",$data);
            if($sucess){
                http_response_code(201);
                echo json_encode(["message" => "Categories add successfull."]);
            }
            else{
                http_response_code(500);
                echo json_encode(["message" => "Failed to created categories."]);
                
            }
            break;
        case "PUT":
            $data = json_decode(file_get_contents('php://input'),true);
            $id = isset($_GET['id']) ? intval($_GET['id']) : null;
            if(!$data){
                http_response_code(400);
                echo json_encode(["error" => "Invalid or missing data."]);
                exit;
            }
            $sucess = dbUpdate("tbcategories",$data,"id = $id");
            if($sucess){
                echo json_encode(["message" => "Categories updated successfully."]);
            }
            else{
                http_response_code(500);
                echo json_encode(["message" => "Failed to update categories."]);
            }
            break;
        case "DELETE":
            $id = isset($_GET['id']) ? intval($_GET['id']) : null;
            $sucess = dbDelete("tbcategories","id = ?",[$id]);
            if($sucess){
                echo json_encode(["message" => "Categories deleted successfully."]);
            }
            else{
                http_response_code(500);
                echo json_encode(["message" => "Failed to delete categories."]);
            }
            break;
    }

?>