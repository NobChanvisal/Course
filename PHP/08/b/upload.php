<?php
$upload_dir = 'uploads/';

// Create the upload directory if it doesn't exist
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

$file_name = basename($_FILES['my_file']['name']);
$temp_path = $_FILES['my_file']['tmp_name'];
$destination_path = $upload_dir . $file_name;

if (move_uploaded_file($temp_path, $destination_path)) {
    echo "The file has been uploaded and moved successfully.";
} else {
    echo "There was an error moving the file.";
}
?>