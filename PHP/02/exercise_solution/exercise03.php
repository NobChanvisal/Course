<?php
// Declare and assign values
$id = 1;
$name = "Sok Dara";
$gender = "Male";
$salary = 1100; 
$tax_rate = 0.001;

//Calculate tax amount and total salary
$taxAmount = $salary * $tax_rate;
$total_salary = $salary - $taxAmount;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Staff Salary</title>
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

<h2>Staff Salary Details</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Gross Salary ($)</th>
        <th>Tax Rate (%)</th>
        <th>Tax Amount ($)</th>
        <th>Total Salary ($)</th>
    </tr>
    <tr>
        <td><?=$id; ?></td>
        <td><?= $name; ?></td>
        <td><?= $gender; ?></td>
        <td><?= number_format($salary, 2); ?></td>
        <td><?= ($tax_rate * 100) . "%"; ?></td>
        <td><?= number_format($taxAmount, 2); ?></td>
        <td><?= number_format($total_salary, 2); ?></td>
    </tr>
</table>

</body>
</html>
