<?php
// db.php

    $host = 'localhost';
    $user = 'root';
    $pass = 'Visal#123';
    $db = 'todo_list_db';
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        // Set error mode
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>