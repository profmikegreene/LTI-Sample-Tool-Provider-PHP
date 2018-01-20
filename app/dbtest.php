<?php
error_reporting(0);
ini_set('display_errors', true);
define('APP_NAME', 'Rating');
define('SESSION_NAME', 'php-rating');
define('VERSION', '3.0.00');

###
###  Database connection settings
###
define('DB_NAME', 'mysql:dbname=app;host=mysql');  // e.g. 'mysql:dbname=MyDb;host=localhost' or 'sqlite:php-rating.sqlitedb'
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('DB_TABLENAME_PREFIX', '');

try {
    $db = new PDO(DB_NAME, DB_USERNAME, DB_PASSWORD);
    echo 'connected';
  } catch(PDOException $e) {
    $db = FALSE;
    echo $e;
    $_SESSION['error_message'] = "Database error {$e->getCode()}: {$e->getMessage()}";
    //echo $_SESSION['error_message'];
  }



?>