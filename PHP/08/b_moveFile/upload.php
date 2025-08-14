<?php
// upload.php

// Target directory to save the file
$targetDir = "images/";

// Create uploads folder if it doesn't exist
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Get file info
$fileName = basename($_FILES["myfile"]["name"]);
$targetFile = $targetDir . $fileName;

// Optional validation
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check file size (limit to 5MB)
if ($_FILES["myfile"]["size"] > 5 * 1024 * 1024) {
    echo "File is too large.";
    $uploadOk = 0;
}

// Allow only certain file types
$allowedTypes = ["jpg", "png", "pdf", "docx"];
if (!in_array($fileType, $allowedTypes)) {
    echo "Only JPG, PNG, PDF, DOCX files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is 1
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
        echo "<img src='$targetFile' style='max-width:300px;'><br>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
