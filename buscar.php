<?php
//LOCAL
$user = 'root';
$password = 'root';
$db = 'angularDB';
$host = 'localhost';

$con = mysqli_connect("localhost", $user, $password, $db);

// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$usuario = mysqli_query($con, "SELECT *  FROM users");

header('Content-Type: application/json');

echo json_encode(pg_fetch_assoc($usuario));


?>
