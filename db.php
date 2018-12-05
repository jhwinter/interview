<?php
  // DB Credentials
  define('DB_SERVER', 'localhost');
  define('DB_NAME', 'login');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', 'passWord1');

  // Attempt to connect to MySQL
  try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
  }
?>