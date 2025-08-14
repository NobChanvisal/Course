<?php
// Start the session. This must be called at the very beginning of the script.
session_start();

// Set session variables
$_SESSION['username'] = 'john_doe';
$_SESSION['user_id'] = 123;
$_SESSION['logged_in'] = true;

echo "Session variables set successfully.";
?>