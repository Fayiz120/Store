<?php
session_start();

// Destroy the session and unset all session variables
session_destroy();

// Redirect the user to the login page or any other page as needed
header("Location: index.php"); // Replace with the URL of your login page
exit();
?>
