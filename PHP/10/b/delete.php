<?php
require_once "connectdb.php";

// Get and validate the student ID
$studentId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($studentId > 0) {

    $check = $pdo->prepare("SELECT * FROM student WHERE student_id = ?");
    $check->execute([$studentId]);

    if ($check->rowCount() > 0) {
        $stmt = $pdo->prepare("DELETE FROM student WHERE student_id = ?");
        $stmt->execute([$studentId]);

        echo "<p style='color: green;'>Student deleted successfully.</p>";
    } else {
        echo "<p style='color: red;'>Student not found.</p>";
    }
} else {
    echo "<p style='color: red;'>Invalid student ID.</p>";
}
?>
<a href="./index.php">Back to Student List</a>
