<?php 
    require_once 'connectDb.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $addr = $_POST['address'];
        $salary = $_POST['salary'];

        $stmt = $conn->prepare("INSERT INTO tbemployee(fullname, gender, adress, salary) VALUES(:fullname, :gender, :address, :salary)");
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':address', $addr);
        $stmt->bindParam(':salary', $salary);
        $sucess = $stmt->execute();
        if($sucess){
            header("Location: ./index.php?message=Insert success");
        }else{
            echo "Insert fail";
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
    <h1>Insert New Employee</h1>
    <form action="" method="POST">
        <table border="1" cellpadding="4">
            <tr>
                <th>fullname</th>
                <td>
                    <input type="text" name="fullname">
                </td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    <div>
                        <input type="radio" name="gender" value="Male" id="">
                        <label for="">Male</label>
                    </div>
                    <div>
                        <input type="radio" name="gender" value="Female" id="">
                        <label for="">Female</label>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>
                    <input type="number" name="salary">
                </td>
            </tr>
            <tr>
                <th>Address</th>
                <td>
                    <textarea name="address" id="" cols="30" rows="10"></textarea>
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