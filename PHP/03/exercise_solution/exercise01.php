<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Report</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
    // Student details
    $id = "S001";
    $name = "Chan socheata";
    $score1 = 85;
    $score2 = 78;
    $score3 = 92;

    // Calculate total and average
    $total_score = $score1 + $score2 + $score3;
    $average = $total_score / 3;

    // Determine grade
    if ($average >= 90 && $average <= 100) {
        $grade = "A";
        $description = "Excellent";
    } elseif ($average >= 81 && $average < 90) {
        $grade = "B";
        $description = "Very Good";
    } elseif ($average >= 71 && $average < 81) {
        $grade = "C";
        $description = "Good";
    } elseif ($average >= 61 && $average < 71) {
        $grade = "D";
        $description = "Average";
    } elseif ($average >= 50 && $average < 61) {
        $grade = "E";
        $description = "Pass";
    } else {
        $grade = "F";
        $description = "Fail";
    }
?>

<h2>Student Grade Report</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Total Score</th>
        <th>Average</th>
        <th>Grade</th>
        <th>Description</th>
    </tr>
    <tr>
        <td><?= $id ?></td>
        <td><?= $name ?></td>
        <td><?= $total_score ?></td>
        <td><?= number_format($average, 2) ?></td>
        <td><?= $grade ?></td>
        <td><?= $description ?></td>
    </tr>
</table>

</body>
</html>
