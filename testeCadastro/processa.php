<?php
echo $_SERVER['REQUEST_METHOD'];
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$profissao = filter_input(INPUT_POST, 'profissao');

$sql = "insert into 'usuarios' (nome, email, profissao) values ('$nome, $email, $profissao')";
$cadastrar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>