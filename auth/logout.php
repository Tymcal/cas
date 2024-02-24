<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page (change 'index.html' to your login page)
header("Location: index.html");
exit();
?>
