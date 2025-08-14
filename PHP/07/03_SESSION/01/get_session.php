<?php
// Start the session to access session variables.
session_start();

// Check if session variables are set before accessing them
if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
    $username = $_SESSION['username'];
    $userId = $_SESSION['user_id'];

    echo "Welcome, " . $username . "! Your User ID is: " . $userId;
} else {
    echo "No session data found.";
}
?>