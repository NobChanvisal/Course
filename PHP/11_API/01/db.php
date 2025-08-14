<?php
// db.php

    $host = 'localhost';
    $user = 'root';
    $pass = 'Visal##SQLite16';
    $db = 'test_php_api';
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        // Set error mode
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>
