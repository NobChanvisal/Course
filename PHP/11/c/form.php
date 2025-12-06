
<?php
require_once "connectdb.php";

// Fetch dropdown data
$universities = $pdo->query("SELECT university_id, university_name FROM university")->fetchAll();
$faculties = $pdo->query("SELECT faculty_id, faculty_name FROM faculty")->fetchAll();
$provinces = $pdo->query("SELECT province_id, province_name FROM province")->fetchAll();

$Message = false;
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['student_name'];
    $gender = $_POST['gender'];
    $university = (int)$_POST['university'];
    $faculty = (int)$_POST['faculty'];
    $province = (int)$_POST['province'];

    if ($name && $gender && $university && $faculty && $province) {
        $stmt = $pdo->prepare("
            INSERT INTO student (student_name, gender, stu_university_id, stu_faculty_id, stu_province_id)
            VALUES (?, ?, ?, ?, ?)
        ");
        $stmt->execute([$name, $gender, $university, $faculty, $province]);
        $Message = true;
    } else {
        echo "<p style='color: red;'>All fields are required.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>
<body>
    
    <?php if ($Message): ?>
        <p style="color: green;">Student added successfully!</p>
        <a href="./index.php">Return to student list</a>
    <?php else: ?>
        <h2>Add New Student</h2>
        <form method="POST" action="">
            <label>Student Name:</label><br>
            <input type="text" name="student_name" required><br><br>

            <label>Gender:</label><br>
            <input type="text" name="gender" required><br><br>

            <label>University:</label><br>
            <select name="university" required>
                <option value="">-- Select University --</option>
                <?php foreach ($universities as $u): ?>
                    <option value="<?= $u['university_id'] ?>"><?= htmlspecialchars($u['university_name']) ?></option>
                <?php endforeach; ?>
            </select><br><br>

            <label>Faculty:</label><br>
            <select name="faculty" required>
                <option value="">-- Select Faculty --</option>
                <?php foreach ($faculties as $f): ?>
                    <option value="<?= $f['faculty_id'] ?>"><?= htmlspecialchars($f['faculty_name']) ?></option>
                <?php endforeach; ?>
            </select><br><br>

            <label>Province:</label><br>
            <select name="province" required>
                <option value="">-- Select Province --</option>
                <?php foreach ($provinces as $p): ?>
                    <option value="<?= $p['province_id'] ?>"><?= htmlspecialchars($p['province_name']) ?></option>
                <?php endforeach; ?>
            </select><br><br>

            <button type="submit">Add Student</button>
        </form>
    <?php endif; ?>
</body>
</html>
