<?php
session_start();
include_once("conexao.php");
echo "teste";
$nome = filter_input(INPUT_POST, 'nome');
$nome = trim($nome);
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$sobrenome = trim($sobrenome);
$datanascimento = filter_input(INPUT_POST, 'datanascimento');
$email = filter_input(INPUT_POST, 'email');
$email = trim($email);
$senha = filter_input(INPUT_POST, 'senha');
$senha = trim(md5($senha));
$confirmar_senha = filter_input(INPUT_POST, 'confirmarsenha');
$confirmar_senha = trim(md5($confirmar_senha));


$validar = "SELECT COUNT(*) AS total FROM usuario WHERE email = '$email'";
$result = mysqli_query($conexao, $validar);
$row = mysqli_fetch_assoc($result);
$_SESSION['usuario_existe'] = false;
$_SESSION['status_cadastro'] = false;
if($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

// if($senha == $confirmar_senha)
$sql = "INSERT INTO usuario (nome, sobrenome, data_nascimento, email, senha) VALUES ('$nome', '$sobrenome', '$datanascimento', '$email', '$senha')";

if($conexao->query($sql) === true){
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: cadastro.php');
exit;

// $cadastrar = mysqli_query($conexao, $sql);

// mysqli_close($conexao);

?>