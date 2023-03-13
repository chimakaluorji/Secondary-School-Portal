<?php
$servername   = "localhost:3306";
$database = "kendimky_gma_db";
$username = "kendimky_gma_user";
$password = "P@ssw0r";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?>