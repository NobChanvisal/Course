<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Visal##SQL16";
$db = "php_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection successfully<br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>