<!-- upload_form.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label>Select file to upload:</label><br>
        <input type="file" name="myfile"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
