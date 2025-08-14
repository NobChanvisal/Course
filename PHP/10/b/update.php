<?php
require_once "connectdb.php";

// Get student ID
$studentId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$updateMessage = false;

$stmt = $pdo->prepare("SELECT * FROM student WHERE student_id = ?");
$stmt->execute([$studentId]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$student) {
    die("Student not found.");
}


$universities = $pdo->query("SELECT university_id, university_name FROM university")->fetchAll();
$faculties = $pdo->query("SELECT faculty_id, faculty_name FROM faculty")->fetchAll();
$provinces = $pdo->query("SELECT province_id, province_name FROM province")->fetchAll();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['student_id'];
    $name = $_POST['student_name'];
    $gender = $_POST['gender'];
    $university = (int)$_POST['university'];
    $faculty = (int)$_POST['faculty'];
    $province = (int)$_POST['province'];

    if ($name && $gender && $university && $faculty && $province) {
        $updateStmt = $pdo->prepare("
            UPDATE student SET 
                student_id = ?,
                student_name = ?, 
                gender = ?, 
                stu_university_id = ?, 
                stu_faculty_id = ?, 
                stu_province_id = ?
            WHERE student_id = ?
        ");
        $updateStmt->execute([$id,$name, $gender, $university, $faculty, $province, $studentId]);
        $updateMessage = true;

        
        $stmt->execute([$studentId]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "<p style='color:red;'>All fields are required.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <style>
        table {
            border: 1px solid black;
           
        }
        td,th {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
  

    <?php if ($updateMessage): ?>
        <p style="color: green;">Student updated successfully!</p>  
        <a href="./index.php">Return to student list</a>
    <?php else:?>
        <h2>Edit Student</h2>
        <form method="POST" action="">
            <table>
                <tr>
                    <td><label for="student_id">Student ID:</label></td>
                    <td><input type="text" name="student_id" value="<?= htmlspecialchars($student['student_id']) ?>" readonly></td>
                </tr>
                <tr>
                    <td><label for="student_name">Student Name:</label></td>
                    <td><input type="text" name="student_name" value="<?= htmlspecialchars($student['student_name']) ?>" required></td>
                </tr>
                <tr>
                    <td>Student Gender</td>
                    <td><input type="text" name="gender" value="<?= htmlspecialchars($student['gender']) ?>" required></td>
                </tr>  
                <tr>
                    <td>University</td>
                    <td>
                        <select name="university" required>
                            <?php foreach ($universities as $u): ?>
                                <option value="<?= $u['university_id'] ?>" <?= $student['stu_university_id'] == $u['university_id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($u['university_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Faculty</td>
                    <td>
                        <select name="faculty" required>
                        <?php foreach ($faculties as $f): ?>
                            <option value="<?= $f['faculty_id'] ?>" <?= $student['stu_faculty_id'] == $f['faculty_id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($f['faculty_name']) ?>
                            </option>
                        <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Province</td>
                    <td>
                        <select name="province" required>
                            <?php foreach ($provinces as $p): ?>
                                <option value="<?= $p['province_id'] ?>" <?= $student['stu_province_id'] == $p['province_id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($p['province_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"><button type="submit">Update Student</button></td>
                </tr>
            </table>
        </form>
    <?php endif; ?>

    
</body>
</html>
