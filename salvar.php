<?php

$nome = $_POST['nome']; 
$email = $_POST['email'];
$senha = $_POST['senha'];

echo json_encode( array('status' => 1, 'msg' => 'Cadastro efetuado com sucesso!'));
/*
$con = mysql_connect('localhost', 'root', '');
mysql_select_db('angularDB', $con);

//$ins = mysql_query("INSERT INTO users (name, email, pass) VALUES (NULL, '$nome', '$email', '$senha')");
$ins = "INSERT INTO users (name, email, pass) VALUES (NULL, '$nome', '$email', '$senha')";
echo $ins;*/
?>
