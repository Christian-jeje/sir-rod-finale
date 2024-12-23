<?php
session_start(); // Start the session

// Destroy all session variables
session_unset();
session_destroy();

// Redirect to the login page (or any other desired page)
header('Location: signin.php');
exit;
?>
