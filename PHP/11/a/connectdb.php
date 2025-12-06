<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'Visal#123';
    $db = 'book_db';

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "connection sucesss";
    }
    catch(PDOException $e){
        die("Connection failed" . $e->getMessage());
    }

?>