<?php
session_start();
include_once("conexao.php");
?>
<?php
	$result = "SELECT * FROM questao WHERE questao.id_questao = 1";
	$id_pergunta = mysqli_query($conexao, $result);
	$pergunta = mysqli_query($conexao, $result);
	$index_questao = 0;
	$index_alternativa = 0;
	$get_resposta = "SELECT * FROM alternativa WHERE alternativa.id_questao = 1";
	$resultado = mysqli_query($conexao, $get_resposta);
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
		<div class="quiz-box custom-box">
				<div class="answers-indicator">
				
				</div>
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_pergunta)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($pergunta)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container">
					<form method="post">
						<?php
							while ($row_alternativa = mysqli_fetch_assoc($resultado)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativa['id_alternativa'] == 1) {
									$alternativa1 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 2) {
									$alternativa2 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 3) {
									$alternativa3 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 4) {
									$alternativa4 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 5) {
									$alternativa5 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['veracidade'] == 1) {
									$correta = $row_alternativa['texto'];
								}
							
							}
						?>
						<input type="radio" name="questao1" id="alternativa1" value="<?php echo $alternativa1 ?>">
						<label for="alternativa1"><?php echo $alternativa1 ?></label>
						<br>
						<input type="radio" name="questao1" id="alternativa2" value="<?php echo $alternativa2 ?>">
						<label for="alternativa2"><?php echo $alternativa2 ?></label>
						<br>
						<input type="radio" name="questao1" id="alternativa3" value="<?php echo $alternativa3 ?>">
						<label for="alternativa3"><?php echo $alternativa3 ?></label>
						<br>
						<input type="radio" name="questao1" id="alternativa4" value="<?php echo $alternativa4 ?>">
						<label for="alternativa4"><?php echo $alternativa4 ?></label>
						<br>
						<input type="radio" name="questao1" id="alternativa5" value="<?php echo $alternativa5 ?>">
						<label for="alternativa5"><?php echo $alternativa5 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha = filter_input(INPUT_POST, 'questao1');
						if($escolha == $correta){
							echo "foi";
						}
					?>
				</div>
				<div class="btn-box">
					<div class="previous-question-btn">
						<button type="button" class="btn" onclick="back()">&ltrif; Questão anterior</button>
					</div>
					<div class="confirm-question-btn">
						<button type="button" class="btn" onclick="next()">Confirmar resposta</button>
					</div>
					<div class="next-question-btn">
						<button type="button" class="btn" onclick="next()">Próxima questão &rtrif;</button>
					</div>
				</div>
			</div>
	</body>
</html>