<?php 
    require_once 'connectDb.php';
    $employeeID = intval($_GET['id']);
    $stmt = $conn->query("SELECT * FROM tbemployee WHERE id = $employeeID");
    $employee = $stmt->fetch(PDO::FETCH_ASSOC);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $addr = $_POST['address'];
        $salary = $_POST['salary'];
        $stmt = $conn->prepare("UPDATE tbemployee SET fullname = :fullname, gender = :gender, adress = :address, salary = :salary WHERE id = :id");
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':address', $addr);
        $stmt->bindParam(':salary', $salary);
        $stmt->bindParam(':id', $employeeID);
        if($stmt->execute()){
            header("Location: ./index.php?message=Update success");
            exit;
        }else{
            echo "Update fail";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Employee - <?= $employee['fullname'] ?></h1>
    <form action="" method="POST">
        <table border="1" cellpadding="4">
            <tr>
                <th>fullname</th>
                <td>
                    <input type="text" value="<?= $employee['fullname'] ?>" name="fullname">
                </td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    <div>
                        <input type="radio"
                         <?php if($employee['gender'] == 'Male') echo 'checked'; ?>
                         name="gender" value="Male" id="">
                        <label for="">Male</label>
                    </div>
                    <div>   
                        <input type="radio"
                         <?php if($employee['gender'] == 'Female') echo 'checked'; ?>
                         name="gender" value="Female" id="">
                        <label for="">Female</label>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>
                    <input type="number" value="<?= $employee['salary'] ?>" name="salary">
                </td>
            </tr>
            <tr>
                <th>Address</th>
                <td>
                    <textarea name="address" id="" cols="30" rows="10">
                        <?= $employee['adress'] ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="5" style=" text-align: center;">
                    <button type="submit">Save</button>

                </td>
            </tr>
            <tr>
                <td colspan="5" style=" text-align: center;">
                    <a href="./index.php">Back to list</a>
                </td>
            </tr>
        </table>

    </form>
</body>
</html>