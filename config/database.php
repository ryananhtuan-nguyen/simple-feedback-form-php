<?php
  define("DB_HOST", "localhost");
  define("DB_USER", "ryan");
  define("DB_PASS", "Abc123");
  define("DB_NAME", "php_dev");

  //Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


//Check connection
if ($conn->connect_error) {
  die("Connection Failed". $conn->connect_error);
}




?>