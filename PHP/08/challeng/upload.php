
<?php 
$targetDir = "images/";

//if don't have folder images , create it.
if(!is_dir($targetDir)){
    mkdir($targetDir,0777,true);
}

//When user enters their username in the form get username value to php
$username = htmlspecialchars($_POST['name']);

//if don't have folder username folder in images , create it.
$userNameDir = $targetDir . $username . "/";
if(!is_dir($userNameDir)){
    mkdir($userNameDir,0777,true);
}

$fileName = basename($_FILES['myfile']['name']);
$movePath = $userNameDir . $fileName;//  images/food/photo.jpg

$check = 1;


$imageType = strtolower(pathinfo($movePath, PATHINFO_EXTENSION));//ex. name.jpg => jpg
$allowedType = ['jpg','png'];
//check upload file type
if(!in_array($imageType, $allowedType)){
    echo "you can uploads only jpg and png !!";
    $check = 0;
}

//check upload 
$imageSize = 2 * 1024 * 1024;
if($_FILES['myfile']['size'] > $imageSize){
    echo "Your file size is too large !!";
    $check = 0;
}

if($check === 1){
   $sucess = move_uploaded_file($_FILES['myfile']['tmp_name'],$movePath);
   if($sucess){
        echo "<p>File move successfull .</p>";
   }
   else{
        echo "<p>File move unsuccessfull .</p>";

   }
}

?>