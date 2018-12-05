<?php
  // DB Credentials
  define('DB_SERVER', 'localhost');
  define('DB_PASSWORD', 'startup.sc');
  define('DB_NAME', 'login');

  // Attempt to connect to MySQL
  try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  } catch(PDOException $e) {
    die("ERROR: Could not connect. " . $exception->getMessage());
  }