<?php
session_start();
include_once("conexao.php");

if(empty($_POST['email']) || empty($_POST['senha'])){
	header('Location: login.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT id_usuario, nome FROM usuario WHERE email = '{$email}' AND senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

while($row_name = mysqli_fetch_assoc($result)){
	$name = $row_name['nome'];
}

if($row == 1){
	$_SESSION['usuario'] = $name;
	header('Location: user/inicio.php');
	exit();
}
else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}




// while ($row_alternativaQ2 = mysqli_fetch_assoc($opcoes2)){
// 		if ($row_alternativaQ2 = mysqli_fetch_assoc($opcoes2)) {
// 		if ($row_alternativaQ2['id_alternativa'] == 6) {
// 		$alternativa1q2 = $row_alternativaQ2['texto'];
// }



?>