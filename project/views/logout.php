<?php
session_start();

// Unset specific session variable(s)
$_SESSION['email'] == null;
unset($_SESSION['email']);

// Destroy the entire session (optional)
// session_destroy();

// Redirect to the login page
  header("Location: page.php");
  exit();
?>
