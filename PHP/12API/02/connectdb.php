<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'Visal#123';
    $dbname = 'school_api';
    $port = 3308;

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connection success";
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>

