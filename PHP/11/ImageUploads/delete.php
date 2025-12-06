<?php
require_once 'db_connect.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
try {
    $sql = "SELECT image FROM persons WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $person = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($person) {
        // Delete image file
        if (file_exists($person['image'])) {
            unlink($person['image']);
        }
        // Delete record
        $sql = "DELETE FROM persons WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }
    header("Location: index.php");
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>