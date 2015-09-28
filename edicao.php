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


$id = $_POST['id'];

$usuario = mysqli_query($con, "SELECT * FROM users WHERE id='$id'");

header('Content-Type: application/json');

$return = array();

while ($dados = mysqli_fetch_assoc($usuario)) {
	array_push($return, $dados);
}

echo json_encode($return);


?>
