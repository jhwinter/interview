<?php
  // Init session
  session_start();

  // Unset all session values
  session_unset();
  
  // Destroy session
  session_destroy();
  
  // Redirect to login
  header('location: login.php');
  die;
?>