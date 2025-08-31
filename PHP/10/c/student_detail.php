<?php
    require_once "connectdb.php";
   $studentId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    if ($studentId > 0) {
        // $stmt = $pdo->prepare("SELECT stu_university_id, student_name, stu_faculty_id, stu_province_id FROM student WHERE student_id = ?");
        $stmt = $pdo->prepare("
        SELECT 
            s.student_name,
            u.university_name,
            f.faculty_name, 
            p.province_name 
            FROM student s
            JOIN university u ON s.stu_university_id = u.university_id
            JOIN faculty f ON s.stu_faculty_id = f.faculty_id
            JOIN province p ON s.stu_province_id = p.province_id
            WHERE s.student_id = ?
         ");
         
         $stmt->execute([$studentId]);
    $studentData = $stmt->fetch(PDO::FETCH_ASSOC);
       
    } else {
        die("Student ID is required.");
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            max-width: 500px;
            margin: 20px auto;
        }
       table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        
            font-weight: bold;
        }
        p {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        h1 {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Name : <?= htmlspecialchars($studentData['student_name']) ?></h1>
        <p>Student Detail</p>
        <table>

            <tr>
                <th>University</th>
                <td><?= htmlspecialchars($studentData['university_name']) ?></td>
            </tr>
            <tr>
                <th>Faculty</th>
                <td><?= htmlspecialchars($studentData['faculty_name']) ?></td>
            </tr>
            <tr>
                <th>Province</th>
                <td><?= htmlspecialchars($studentData['province_name']) ?></td>
            </tr>
        </table>
    </div>
    
</body>
</html>