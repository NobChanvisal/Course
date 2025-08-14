<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
            margin: 20px auto;
        }
        input[type="text"]{
            padding: 8px 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label>Category :</label>
    <input type="text" name="name" required><br><br>

    <label>Select Image:</label>
    <input type="file" name="myfile" required><br><br>

    <input type="submit" value="Upload">
</form>

</body>
</html>