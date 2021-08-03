<?php

//$db = mysqli_connected("localhost","root","","royalpunch") or die("You Are Not Connected To database");


$servername = "localhost";
$username = "root";
$password = "";
$database = "royalpunch";

// Create connection
$db = new mysqli($servername, $username, $password,$database);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
// echo "Connected successfully";

?>