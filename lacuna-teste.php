<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/estilo.css">
		<title>Terrális</title>
	</head>
	<body id="biologia">
		<h1>Funciona pelo amor de Deus</h1>
		<?php 
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}

			$get = "SELECT * FROM alternativa WHERE id_alternativa = 518";
			$vamove = mysqli_query($conexao, $get);
			while($row = mysqli_fetch_assoc($vamove)){
				echo $banco1 = (string) trim($row['texto'])."<br>";	
			}
			$get = "SELECT * FROM alternativa WHERE id_alternativa = 519";
			$vamove2 = mysqli_query($conexao, $get);
			while($row = mysqli_fetch_assoc($vamove2)){
				echo $banco2 = (string) trim($row['texto'])."<br>";	
			}
			$get = "SELECT * FROM alternativa WHERE id_alternativa = 517";
			$vamove3 = mysqli_query($conexao, $get);
			while($row = mysqli_fetch_assoc($vamove3)){
				echo $banco3 = (string) trim($row['texto'])."<br>";	
			}
			

			$result = "SELECT * FROM questao";
			// $id_result = "SELECT id_questao FROM questao";
			$pergunta = mysqli_query($conexao, $result);
			// $id_pergunta = mysqli_query($conexao, $id_result);
			$index_questao = 0;
			$index_alternativa = 0;
			$get_resposta = "SELECT * FROM alternativa WHERE alternativa.id_questao = 1";
			$resultado = mysqli_query($conexao, $get_resposta);
			// while ($row_usuario = mysqli_fetch_assoc($id_pergunta)) {
			// 	$id = (string) trim($row_usuario['id_questao']);
			// 	echo $row_usuario['id_questao']."<br>";
			// }
			while ($row_questao = mysqli_fetch_assoc($pergunta)) {
				$index_questao++;
				$id = (string) trim($row_questao['id_questao']);
				echo $index_questao.". ".$row_questao['enunciado']."<br><br>";

				while ($row_alternativa = mysqli_fetch_assoc($resultado)) {
				// $id = (string) trim($row_alternativa['id_questao']);
				echo $index_alternativa.". ".$row_alternativa['texto']."<br><br>";
				}
			}
		?>
		<form action="" method="post">
			<input type="text" name="resposta">
			<br>
			<input type="submit" value="Confirmar">
		</form>
		<?php 
			$resposta = filter_input(INPUT_POST, 'resposta');
			$get_resposta = "SELECT texto FROM alternativa WHERE alternativa.id_questao = $id";
			$resultado = mysqli_query($conexao, $get_resposta);
			while ($row_usuario = mysqli_fetch_assoc($resultado)) {
				// echo strval($resultado);
				// $veracidade = strcmp($resposta, $resultado);
				// echo $veracidade;
				echo $banco = (string) trim($row_usuario['texto']);
				echo "<br>";
				echo $vai = "$banco";
				echo "<br>";
				echo "$vai";
				echo "<br>";
				echo $ans = (string) trim($resposta);
				echo "<br>";
				echo $foi = "$ans";
				echo "<br>";
				echo $num = strcmp($foi, $vai);
				echo "<br>";
				echo $num;
				if ($banco === $resposta) {
				// echo $row_usuario['texto']."<br>";
					echo "<br>";
					echo "funfou";
					$score = "insert into desempenho (id_usuario, id_questionario, qtd_questao_correta) values (1, 1, 1)";
					$pontua = mysqli_query($conexao, $score);
				}
			// echo $row_usuario['texto']."<br>";
			// echo $resposta;
				$ver = "SELECT qtd_questao_correta FROM desepenho";
				$ver_ponto = mysqli_query($conexao, $ver);
				echo $ver_ponto;
			}
			
			
		?>
	</body>
</html>