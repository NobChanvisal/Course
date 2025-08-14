<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file info</title>
</head>
<body>
    <h1>File Information</h1>
    <ul>
        <li> name - <?= $_FILES['myfile']['name'] ?></li>
        <li> tmpname - <?= $_FILES['myfile']['tmp_name']?></li>
        <li> size -<?= $_FILES['myfile']['size'] ?> bytes</li>  
        <li> type -<?= $_FILES['myfile']['type'] ?></li>
        <li><?= strtolower(pathinfo($_FILES['myfile']['type'], PATHINFO_EXTENSION)); ?></li>
    </ul>
</body>
</html>