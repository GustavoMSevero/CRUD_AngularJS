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

if (!isset($_GET['id'])) {
    exit;
}

$id = $_GET['id'];

$del = mysqli_query($con, "DELETE FROM users WHERE id='$id'");


?>
