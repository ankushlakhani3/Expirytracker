<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
include("logoutloader.php");
header("refresh: 2; url=../index.html");
exit;
?>