<?php
//LOCAL
$user = 'root';
$password = 'root';
$db = 'angularDB';
$host = 'localhost';

$con = mysqli_connect("localhost", $user, $password, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$nome = $request->nome;
$email = $request->email;
$pass = $request->pass;

$ins = mysqli_query($con, "INSERT INTO users VALUES (NULL, '$nome', '$email', '$pass')");
if($ins == 1){
	echo json_encode( array('status' => 200, 'msg' => 'Cadastro efetuado com sucesso!'));

}else{
	echo json_encode( array('status' => 0, 'msg' => 'Erro ao cadastrar no banco.'));
}
?>
