<?php 
$servername = "127.0.0.1:3308";
 $username = "root";
 $password = "";
 $db = "test";

$mysqli = new mysqli("localhost:3308","root", "","test");

if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
