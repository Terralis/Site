<?php
session_start();
include_once("../../../../conexao.php");
?>
<?php
	$index_questao = 0;
	$index_alternativa = 0;
	// questão 1
	$pergunta1 = "SELECT * FROM questao WHERE questao.id_questao = 15";
	$id_questao1 = mysqli_query($conexao, $pergunta1);
	$questao1 = mysqli_query($conexao, $pergunta1);
	
	$get_alternativas1 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 15";
	$opcoes1 = mysqli_query($conexao, $get_alternativas1);
	// questão 2
	$pergunta2 = "SELECT * FROM questao WHERE questao.id_questao = 16";
	$id_questao2 = mysqli_query($conexao, $pergunta2);
	$questao2 = mysqli_query($conexao, $pergunta2);
	
	$get_alternativas2 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 16";
	$opcoes2 = mysqli_query($conexao, $get_alternativas2);
	// questão 3
	$pergunta3 = "SELECT * FROM questao WHERE questao.id_questao = 17";
	$id_questao3 = mysqli_query($conexao, $pergunta3);
	$questao3 = mysqli_query($conexao, $pergunta3);
	
	$get_alternativas3 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 17";
	$opcoes3 = mysqli_query($conexao, $get_alternativas3);
	// questão 4
	$pergunta4 = "SELECT * FROM questao WHERE questao.id_questao = 18";
	$id_questao4 = mysqli_query($conexao, $pergunta4);
	$questao4 = mysqli_query($conexao, $pergunta4);
	
	$get_alternativas4 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 18";
	$opcoes4 = mysqli_query($conexao, $get_alternativas4);
	// questão 5
	$pergunta5 = "SELECT * FROM questao WHERE questao.id_questao = 40";
	$id_questao5 = mysqli_query($conexao, $pergunta5);
	$questao5 = mysqli_query($conexao, $pergunta5);
	
	$get_alternativas5 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 40";
	$opcoes5 = mysqli_query($conexao, $get_alternativas5);
	// questão 6
	$pergunta6 = "SELECT * FROM questao WHERE questao.id_questao = 41";
	$id_questao6 = mysqli_query($conexao, $pergunta6);
	$questao6 = mysqli_query($conexao, $pergunta6);
	
	$get_alternativas6 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 41";
	$opcoes6 = mysqli_query($conexao, $get_alternativas6);
	// questão 7
	$pergunta7 = "SELECT * FROM questao WHERE questao.id_questao = 42";
	$id_questao7 = mysqli_query($conexao, $pergunta7);
	$questao7 = mysqli_query($conexao, $pergunta7);
	
	$get_alternativas7 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 42";
	$opcoes7 = mysqli_query($conexao, $get_alternativas7);
	// questão 8
	$pergunta8 = "SELECT * FROM questao WHERE questao.id_questao = 115";
	$id_questao8 = mysqli_query($conexao, $pergunta8);
	$questao8 = mysqli_query($conexao, $pergunta8);
	
	$get_alternativas8 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 115";
	$opcoes8 = mysqli_query($conexao, $get_alternativas8);
	// questão 9
	$pergunta9 = "SELECT * FROM questao WHERE questao.id_questao = 116";
	$id_questao9 = mysqli_query($conexao, $pergunta9);
	$questao9 = mysqli_query($conexao, $pergunta9);
	
	$get_alternativas9 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 116";
	$opcoes9 = mysqli_query($conexao, $get_alternativas9);
	// questão 10
	$pergunta10 = "SELECT * FROM questao WHERE questao.id_questao = 117";
	$id_questao10 = mysqli_query($conexao, $pergunta10);
	$questao10 = mysqli_query($conexao, $pergunta10);
	
	$get_alternativas10 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 117";
	$opcoes10 = mysqli_query($conexao, $get_alternativas10);
	// questão 11
	$pergunta11 = "SELECT * FROM questao WHERE questao.id_questao = 118";
	$id_questao11 = mysqli_query($conexao, $pergunta11);
	$questao11 = mysqli_query($conexao, $pergunta11);
	
	$get_alternativas11 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 118";
	$opcoes11 = mysqli_query($conexao, $get_alternativas11);
	// questão 12
	$pergunta12 = "SELECT * FROM questao WHERE questao.id_questao = 141";
	$id_questao12 = mysqli_query($conexao, $pergunta12);
	$questao12 = mysqli_query($conexao, $pergunta12);
	
	$get_alternativas12 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 141";
	$opcoes12 = mysqli_query($conexao, $get_alternativas12);
	// questão 13
	$pergunta13 = "SELECT * FROM questao WHERE questao.id_questao = 142";
	$id_questao13 = mysqli_query($conexao, $pergunta13);
	$questao13 = mysqli_query($conexao, $pergunta13);
	
	$get_alternativas13 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 142";
	$opcoes13 = mysqli_query($conexao, $get_alternativas13);
	// questão 14
	$pergunta14 = "SELECT * FROM questao WHERE questao.id_questao = 143";
	$id_questao14 = mysqli_query($conexao, $pergunta14);
	$questao14 = mysqli_query($conexao, $pergunta14);
	
	$get_alternativas14 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 143";
	$opcoes14 = mysqli_query($conexao, $get_alternativas14);
	// questão 15
	$pergunta15 = "SELECT * FROM questao WHERE questao.id_questao = 144";
	$id_questao15 = mysqli_query($conexao, $pergunta15);
	$questao15 = mysqli_query($conexao, $pergunta15);
	
	$get_alternativas15 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 144";
	$opcoes15 = mysqli_query($conexao, $get_alternativas15);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../../../css/normalize.css">
		<link rel="stylesheet" href="../../../../css/estilo.css">
		<title>Terrális</title>
	</head>
	<body id="biologia">
		<div class="divisao-menu divisao-menu-biologia divisao-menu-materia">
			<img src="../../../../img/logo interno laranja.jpeg">
			<div class="menu-interno atual-interno">
				<nav>
					<ul>
						<li><a href="../../../inicio.html">Início</a></li>
						<li><a href="">Disciplinas &dtri;</a>
							<ul>
								<li class="pagina-atual-laranja"><a href="../../biologia.html">Biologia</a></li>
								<li><a href="../../fisica.html">Física</a></li>
								<li><a href="../../quimica.html">Química</a></li>
							</ul>
						</li>
						<li><a href="../../../desempenho.html">Desempenho</a></li>
						<li><a href="../../../ajuda.html">Ajuda?</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="divisao-superior divisao-superior-biologia">
			<img src="../../../../img/usuario.png">
			<div>
				<p><a onclick="opcaoPerfil()">Usuário</a></p>
				<img src="../../../../img/escrita laranja.jpeg" id="escrita">
			</div>
			<div class="pesquisa">
				<div class="container">
					<button type="submit" onclick="opcaoPesquisa()">&#8981;</button>  
					<input type="text" id="busca" onkeyup="pesquisar()" placeholder="Conteúdo" title="Pesquise por uma tema" onclick="opcaoPesquisa()">
				</div>
			</div>
		</div>
		<div id="opcaoPerfil">
			<ul>
				<li><a href="../../../perfil.html">Abrir perfil</a></li>
				<li><a href="#">Sair</a></li>
			</ul>
		</div>
		<div class="pesquisa-materias" id="pesquisa-materias">
			<ul id="materias">
				<li><a href="disciplinas/biologia/origemdavida/escolha.html">Origem da vida</a></li>
				<li><a href="disciplinas/biologia/teoriasevolutivas/escolha.html">Teorias evolutivas</a></li>
				<li><a href="disciplinas/biologia/divisaocelular/escolha.html">Divisão celular</a></li>
				<li><a href="disciplinas/biologia/teoriacelular/escolha.html">Teoria celular</a></li>
				<li><a href="disciplinas/biologia/niveisdeorganizacaodosseresvivos/escolha.html">Níveis de organização dos seres vivos</a></li>
				<li><a href="disciplinas/biologia/citologia/escolha.html">Citologia</a></li>
				<li><a href="disciplinas/biologia/histologia/escolha.html">Histologia</a></li>
				<li><a href="disciplinas/fisica/introducaoaoestudodafisica/escolha.html">Introdução ao estudo da física</a></li>
				<li><a href="disciplinas/fisica/gravitacao/escolha.html">Gravitação</a></li>
				<li><a href="disciplinas/fisica/estatica/escolha.html">Estática</a></li>
				<li><a href="disciplinas/fisica/conceitosdeforca/escolha.html">Conceitos de força</a></li>
				<li><a href="disciplinas/fisica/leisdenewton/escolha.html">Leis de Newton</a></li>
				<li><a href="disciplinas/fisica/atrito/escolha.html">Atrito</a></li>
				<li><a href="disciplinas/fisica/cinematica/escolha.html">Cinemática</a></li>
				<li><a href="disciplinas/quimica/conceitosgerais/escolha.html">Conceitos gerais</a></li>
				<li><a href="disciplinas/quimica/materia/escolha.html">Matéria</a></li>
				<li><a href="disciplinas/quimica/atomo/escolha.html">Átomo</a></li>
				<li><a href="disciplinas/quimica/tabelaperiodica/escolha.html">Tabela periódica</a></li>
				<li><a href="disciplinas/quimica/ligacoesquimicas/escolha.html">Ligações químicas</a></li>
				<li><a href="disciplinas/quimica/quimicaorganica/escolha.html">Química orgânica</a></li>
				<li><a href="disciplinas/quimica/estequiometria/escolha.html">Estequiometria</a></li>
			</ul>
		</div>	
		<div class="escolha conteudo">
			<h2>QUESTIONÁRIO</h2>
			<h3><b>Histologia</b></h3>		
			<div class="quiz-box custom-box">
				<!-- início do questionário -->
				<!-- questão 1 -->
				<div class="answers-indicator">
				
				</div>
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao1)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao1)) {
							echo $row_questao['enunciado'];
							echo "<img src=../../../../img/cerebro.png>";
							}
						?>		
					</div>
				</div>
				<div class="option-container">
					<form method="post">
						<?php
							while ($row_alternativa = mysqli_fetch_assoc($opcoes1)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativa['id_alternativa'] == 70) {
									$alternativa1 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 71) {
									$alternativa2 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 72) {
									$alternativa3 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 73) {
									$alternativa4 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 74) {
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
				<!-- questão 2 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao2)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao2)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container">
					<form method="post">
						<?php
							while ($row_alternativaQ2 = mysqli_fetch_assoc($opcoes2)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ2['id_alternativa'] == 75) {
									$alternativa1q2 = $row_alternativaQ2['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ2['id_alternativa'] == 76) {
									$alternativa2q2 = $row_alternativaQ2['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ2['id_alternativa'] == 77) {
									$alternativa3q2 = $row_alternativaQ2['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ2['id_alternativa'] == 78) {
									$alternativa4q2 = $row_alternativaQ2['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ2['id_alternativa'] == 79) {
									$alternativa5q2 = $row_alternativaQ2['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ2['veracidade'] == 1) {
									$corretaQ2 = $row_alternativaQ2['texto'];
								}
							
							}
						?>
						<input type="radio" name="questao2" id="alternativa1q2" value="<?php echo $alternativa1q2 ?>">
						<label for="alternativa1q2"><?php echo $alternativa1q2 ?></label>
						<br>
						<input type="radio" name="questao2" id="alternativa2q2" value="<?php echo $alternativa2q2 ?>">
						<label for="alternativa2q2"><?php echo $alternativa2q2 ?></label>
						<br>
						<input type="radio" name="questao2" id="alternativa3q2" value="<?php echo $alternativa3q2 ?>">
						<label for="alternativa3q2"><?php echo $alternativa3q2 ?></label>
						<br>
						<input type="radio" name="questao2" id="alternativa4q2" value="<?php echo $alternativa4q2 ?>">
						<label for="alternativa4q2"><?php echo $alternativa4q2 ?></label>
						<br>
						<input type="radio" name="questao2" id="alternativa5q2" value="<?php echo $alternativa5q2 ?>">
						<label for="alternativa5q2"><?php echo $alternativa5q2 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha2 = filter_input(INPUT_POST, 'questao2');
						if($escolha2 == $corretaQ2){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 3 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao3)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao3)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container">
					<form method="post">
						<?php
							while ($row_alternativaQ3 = mysqli_fetch_assoc($opcoes3)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ3['id_alternativa'] == 80) {
									$alternativa1q3 = $row_alternativaQ3['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ3['id_alternativa'] == 81) {
									$alternativa2q3 = $row_alternativaQ3['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ3['id_alternativa'] == 82) {
									$alternativa3q3 = $row_alternativaQ3['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ3['id_alternativa'] == 83) {
									$alternativa4q3 = $row_alternativaQ3['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ3['veracidade'] == 1) {
									$corretaQ3 = $row_alternativaQ3['texto'];
								}
							
							}
						?>
						<input type="radio" name="questao3" id="alternativa1q3" value="<?php echo $alternativa1q3 ?>">
						<label for="alternativa1q3"><?php echo $alternativa1q3 ?></label>
						<br>
						<input type="radio" name="questao3" id="alternativa2q3" value="<?php echo $alternativa2q3 ?>">
						<label for="alternativa2q3"><?php echo $alternativa2q3 ?></label>
						<br>
						<input type="radio" name="questao3" id="alternativa3q3" value="<?php echo $alternativa3q3 ?>">
						<label for="alternativa3q3"><?php echo $alternativa3q3 ?></label>
						<br>
						<input type="radio" name="questao3" id="alternativa4q3" value="<?php echo $alternativa4q3 ?>">
						<label for="alternativa4q3"><?php echo $alternativa4q3 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha3 = filter_input(INPUT_POST, 'questao3');
						if($escolha3 == $corretaQ3){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 4 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao4)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao4)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container">
					<form method="post">
						<?php
							while ($row_alternativaQ4 = mysqli_fetch_assoc($opcoes4)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ4['id_alternativa'] == 84) {
									$alternativa1q4 = $row_alternativaQ4['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ4['id_alternativa'] == 85) {
									$alternativa2q4 = $row_alternativaQ4['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ4['id_alternativa'] == 86) {
									$alternativa3q4 = $row_alternativaQ4['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ4['id_alternativa'] == 87) {
									$alternativa4q4 = $row_alternativaQ4['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ4['id_alternativa'] == 88) {
									$alternativa5q4 = $row_alternativaQ4['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ4['veracidade'] == 1) {
									$corretaQ4 = $row_alternativaQ4['texto'];
								}
							
							}
						?>
						<input type="radio" name="questao4" id="alternativa1q4" value="<?php echo $alternativa1q4 ?>">
						<label for="alternativa1q4"><?php echo $alternativa1q4 ?></label>
						<br>
						<input type="radio" name="questao4" id="alternativa2q4" value="<?php echo $alternativa2q4 ?>">
						<label for="alternativa2q4"><?php echo $alternativa2q4 ?></label>
						<br>
						<input type="radio" name="questao4" id="alternativa3q4" value="<?php echo $alternativa3q4 ?>">
						<label for="alternativa3q4"><?php echo $alternativa3q4 ?></label>
						<br>
						<input type="radio" name="questao4" id="alternativa4q4" value="<?php echo $alternativa4q4 ?>">
						<label for="alternativa4q4"><?php echo $alternativa4q4 ?></label>
						<br>
						<input type="radio" name="questao4" id="alternativa5q4" value="<?php echo $alternativa5q4 ?>">
						<label for="alternativa5q4"><?php echo $alternativa5q4 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha4 = filter_input(INPUT_POST, 'questao4');
						if($escolha4 == $corretaQ4){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 5 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao5)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao5)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container">
					<form method="post">
						<?php
							while ($row_alternativaQ5 = mysqli_fetch_assoc($opcoes5)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ5['id_alternativa'] == 187) {
									$alternativa1q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['id_alternativa'] == 188) {
									$alternativa2q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['id_alternativa'] == 189) {
									$alternativa3q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['id_alternativa'] == 190) {
									$alternativa4q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['id_alternativa'] == 191) {
									$alternativa5q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['veracidade'] == 1) {
									$corretaQ5 = $row_alternativaQ5['texto'];
								}
							
							}
						?>
						<input type="radio" name="questao5" id="alternativa1q5" value="<?php echo $alternativa1q5 ?>">
						<label for="alternativa1q5"><?php echo $alternativa1q5 ?></label>
						<br>
						<input type="radio" name="questao5" id="alternativa2q5" value="<?php echo $alternativa2q5 ?>">
						<label for="alternativa2q5"><?php echo $alternativa2q5 ?></label>
						<br>
						<input type="radio" name="questao5" id="alternativa3q5" value="<?php echo $alternativa3q5 ?>">
						<label for="alternativa3q5"><?php echo $alternativa3q5 ?></label>
						<br>
						<input type="radio" name="questao5" id="alternativa4q5" value="<?php echo $alternativa4q5 ?>">
						<label for="alternativa4q5"><?php echo $alternativa4q5 ?></label>
						<br>
						<input type="radio" name="questao5" id="alternativa5q5" value="<?php echo $alternativa5q5 ?>">
						<label for="alternativa5q5"><?php echo $alternativa5q5 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha5 = filter_input(INPUT_POST, 'questao5');
						if($escolha5 == $corretaQ5){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 6 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao6)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao6)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container">
					<form method="post">
						<?php
							while ($row_alternativaQ6 = mysqli_fetch_assoc($opcoes6)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ6['id_alternativa'] == 192) {
									$alternativa1q6 = $row_alternativaQ6['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ6['id_alternativa'] == 193) {
									$alternativa2q6 = $row_alternativaQ6['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ6['id_alternativa'] == 194) {
									$alternativa3q6 = $row_alternativaQ6['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ6['id_alternativa'] == 195) {
									$alternativa4q6 = $row_alternativaQ6['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ6['id_alternativa'] == 196) {
									$alternativa5q6 = $row_alternativaQ6['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ6['veracidade'] == 1) {
									$corretaQ6 = $row_alternativaQ6['texto'];
								}
							
							}
						?>
						<input type="radio" name="questao6" id="alternativa1q6" value="<?php echo $alternativa1q6 ?>">
						<label for="alternativa1q6"><?php echo $alternativa1q6 ?></label>
						<br>
						<input type="radio" name="questao6" id="alternativa2q6" value="<?php echo $alternativa2q6 ?>">
						<label for="alternativa2q6"><?php echo $alternativa2q6 ?></label>
						<br>
						<input type="radio" name="questao6" id="alternativa3q6" value="<?php echo $alternativa3q6 ?>">
						<label for="alternativa3q6"><?php echo $alternativa3q6 ?></label>
						<br>
						<input type="radio" name="questao6" id="alternativa4q6" value="<?php echo $alternativa4q6 ?>">
						<label for="alternativa4q6"><?php echo $alternativa4q6 ?></label>
						<br>
						<input type="radio" name="questao6" id="alternativa5q6" value="<?php echo $alternativa5q6 ?>">
						<label for="alternativa5q6"><?php echo $alternativa5q6 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha6 = filter_input(INPUT_POST, 'questao6');
						if($escolha6 == $corretaQ6){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 7 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao7)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao7)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container">
					<form method="post">
						<?php
							while ($row_alternativaQ7 = mysqli_fetch_assoc($opcoes7)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ7['id_alternativa'] == 197) {
									$alternativa1q7 = $row_alternativaQ7['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ7['id_alternativa'] == 198) {
									$alternativa2q7 = $row_alternativaQ7['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ7['veracidade'] == 1) {
									$corretaQ7 = $row_alternativaQ7['texto'];
								}
							
							}
						?>
						<input type="radio" name="questao7" id="alternativa1q7" value="<?php echo $alternativa1q7 ?>">
						<label for="alternativa1q7"><?php echo $alternativa1q7 ?></label>
						<br>
						<input type="radio" name="questao7" id="alternativa2q7" value="<?php echo $alternativa2q7 ?>">
						<label for="alternativa2q7"><?php echo $alternativa2q7 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha7 = filter_input(INPUT_POST, 'questao7');
						if($escolha7 == $corretaQ7){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 8 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao8)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao8)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ8 = mysqli_fetch_assoc($opcoes8)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ8['id_alternativa'] == 501) {
									$alternativa1q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 502) {
									$alternativa2q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 503) {
									$alternativa3q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 504) {
									$alternativa4q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 505) {
									$alternativa5q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 506) {
									$alternativa6q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 507) {
									$alternativa7q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 508) {
									$alternativa8q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 509) {
									$alternativa9q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 510) {
									$alternativa10q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['id_alternativa'] == 511) {
									$alternativa11q8 = trim($row_alternativaQ8['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['veracidade'] == 1) {
									$corretaQ8 = (string) trim($row_alternativaQ8['texto']);
								}
							}
						?>
						<label for="alternativa1q8">1 -</label>
						<input type="text" name="questao8a" id="alternativa1q8">
						<br>
						<label for="alternativa2q8">2 -</label>
						<input type="text" name="questao8b" id="alternativa2q8">
						<br>
						<label for="alternativa3q8">3 -</label>
						<input type="text" name="questao8c" id="alternativa3q8">
						<br>
						<label for="alternativa4q8">4 -</label>
						<input type="text" name="questao8d" id="alternativa4q8">
						<br>
						<label for="alternativa5q8">5 -</label>
						<input type="text" name="questao8e" id="alternativa5q8">
						<br>
						<label for="alternativa6q8">6 -</label>
						<input type="text" name="questao8f" id="alternativa6q8">
						<br>
						<label for="alternativa7q8">7 -</label>
						<input type="text" name="questao8g" id="alternativa7q8">
						<br>
						<label for="alternativa8q8">8 -</label>
						<input type="text" name="questao8h" id="alternativa8q8">
						<br>
						<label for="alternativa9q8">9 -</label>
						<input type="text" name="questao8i" id="alternativa9q8">
						<br>
						<label for="alternativa10q8">10 -</label>
						<input type="text" name="questao8j" id="alternativa10q8">
						<br>
						<label for="alternativa11q8">11 -</label>
						<input type="text" name="questao8k" id="alternativa11q8">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio8a = filter_input(INPUT_POST, 'questao8a');
						$resposta8a = (string) trim($envio8a);

						$envio8b = filter_input(INPUT_POST, 'questao8b');
						$resposta8b = (string) trim($envio8b);

						$envio8c = filter_input(INPUT_POST, 'questao8c');
						$resposta8c = (string) trim($envio8c);

						$envio8d = filter_input(INPUT_POST, 'questao8d');
						$resposta8d = (string) trim($envio8d);

						$envio8e = filter_input(INPUT_POST, 'questao8e');
						$resposta8e = (string) trim($envio8e);

						$envio8f = filter_input(INPUT_POST, 'questao8f');
						$resposta8f = (string) trim($envio8f);

						$envio8g = filter_input(INPUT_POST, 'questao8g');
						$resposta8g = (string) trim($envio8g);

						$envio8h = filter_input(INPUT_POST, 'questao8h');
						$resposta8h = (string) trim($envio8h);

						$envio8i = filter_input(INPUT_POST, 'questao8i');
						$resposta8i = (string) trim($envio8i);

						$envio8j = filter_input(INPUT_POST, 'questao8j');
						$resposta8j = (string) trim($envio8j);

						$envio8k = filter_input(INPUT_POST, 'questao8k');
						$resposta8k = (string) trim($envio8k);

						if(($resposta8a === $alternativa1q8) && ($resposta8b === $alternativa2q8) && ($resposta8c === $alternativa3q8) && ($resposta8d === $alternativa4q8) && ($resposta8e === $alternativa5q8) && ($resposta8f === $alternativa6q8) && ($resposta8g === $alternativa7q8) && ($resposta8h === $alternativa8q8) && ($resposta8i === $alternativa9q8) && ($resposta8j === $alternativa10q8) && ($resposta8k === $alternativa11q8)){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 9 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao9)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao9)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ9 = mysqli_fetch_assoc($opcoes9)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ9['id_alternativa'] == 512) {
									$alternativa1q9 = trim($row_alternativaQ9['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ9['id_alternativa'] == 513) {
									$alternativa2q9 = trim($row_alternativaQ9['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ9['id_alternativa'] == 514) {
									$alternativa3q9 = trim($row_alternativaQ9['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ9['veracidade'] == 1) {
									$corretaQ9 = (string) trim($row_alternativaQ9['texto']);
								}
							
							}
						?>
						<label for="alternativa1q9">Insira a resposta:</label>
						<input type="text" name="questao9a" id="alternativa1q9">
						<br>
						<label for="alternativa2q9">Insira a resposta:</label>
						<input type="text" name="questao9b" id="alternativa2q9">
						<br>
						<label for="alternativa3q9">Insira a resposta:</label>
						<input type="text" name="questao9c" id="alternativa3q9">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio9a = filter_input(INPUT_POST, 'questao9a');
						$resposta9a = (string) trim($envio9a);

						$envio9b = filter_input(INPUT_POST, 'questao9b');
						$resposta9b = (string) trim($envio9b);

						$envio9c = filter_input(INPUT_POST, 'questao9c');
						$resposta9c = (string) trim($envio9c);

						if(($resposta9a === $alternativa1q9) && ($resposta9b === $alternativa2q9) && ($resposta9c === $alternativa3q9)){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 10 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao10)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao10)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ10 = mysqli_fetch_assoc($opcoes10)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ10['id_alternativa'] == 515) {
									$alternativa1q10 = trim($row_alternativaQ10['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ10['id_alternativa'] == 516) {
									$alternativa2q10 = trim($row_alternativaQ10['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ10['id_alternativa'] == 517) {
									$alternativa3q10 = trim($row_alternativaQ10['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ10['id_alternativa'] == 518) {
									$alternativa4q10 = trim($row_alternativaQ10['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ10['id_alternativa'] == 519) {
									$alternativa5q10 = trim($row_alternativaQ10['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ10['veracidade'] == 1) {
									$corretaQ10 = (string) trim($row_alternativaQ10['texto']);
								}
							
							}
						?>
						<label for="alternativa1q10">Tecido A:</label>
						<input type="text" name="questao10a" id="alternativa1q10">
						<br>
						<label for="alternativa2q10">Tecido B:</label>
						<input type="text" name="questao10b" id="alternativa2q10">
						<br>
						<label for="alternativa3q10">Tecido C:</label>
						<input type="text" name="questao10c" id="alternativa3q10">
						<br>
						<label for="alternativa4q10">Tecido D:</label>
						<input type="text" name="questao10d" id="alternativa4q10">
						<br>
						<label for="alternativa4q10">Tecido E:</label>
						<input type="text" name="questao10e" id="alternativa4q10">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio10a = filter_input(INPUT_POST, 'questao10a');
						$resposta10a = (string) trim($envio10a);

						$envio10b = filter_input(INPUT_POST, 'questao10b');
						$resposta10b = (string) trim($envio10b);

						$envio10c = filter_input(INPUT_POST, 'questao10c');
						$resposta10c = (string) trim($envio10c);
						
						$envio10d = filter_input(INPUT_POST, 'questao10d');
						$resposta10d = (string) trim($envio10d);

						$envio10e = filter_input(INPUT_POST, 'questao10e');
						$resposta10e = (string) trim($envio10e);

						if(($resposta10a === $alternativa1q10) && ($resposta10b === $alternativa2q10) && ($resposta10c === $alternativa3q10) && ($resposta10d === $alternativa4q10) && ($resposta10e === $alternativa5q10)){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 11 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao11)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao11)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ11 = mysqli_fetch_assoc($opcoes11)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ11['id_alternativa'] == 520) {
									$alternativa1q11 = trim($row_alternativaQ11['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ11['id_alternativa'] == 521) {
									$alternativa2q11 = trim($row_alternativaQ11['texto']);
									// echo $alternativa1;
								}
								if ($row_alternativaQ11['veracidade'] == 1) {
									$corretaQ11 = trim($row_alternativaQ11['texto']);
								}
							
							}
						?>
						<label for="alternativa1q11">Insira a resposta:</label>
						<input type="text" name="questao11a" id="alternativa1q11">
						<br>
						<label for="alternativa2q11">Insira a resposta:</label>
						<input type="text" name="questao11b" id="alternativa2q11">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio11a = filter_input(INPUT_POST, 'questao11a');
						$resposta11a = (string) trim($envio11a);

						$envio11b = filter_input(INPUT_POST, 'questao11b');
						$resposta11b = (string) trim($envio11b);

						if(($resposta11a === $alternativa1q11) && ($resposta11b === $alternativa2q11)){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 12 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao12)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao12)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ12 = mysqli_fetch_assoc($opcoes12)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ12['id_alternativa'] == 548) {
									$alternativa1q12 = $row_alternativaQ12['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ12['veracidade'] == 1) {
									$corretaQ12 = $row_alternativaQ12['texto'];
								}
							}
						?>
						<label for="alternativa1q12">Insira a resposta:</label>
						<input type="text" name="questao12" id="alternativa1q12" placeholder="Insira sempre dois algarismos">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio12 = filter_input(INPUT_POST, 'questao12');
						$resposta12 = (string) trim($envio12);

						if($resposta12 === $corretaQ12){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 13 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao13)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao13)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ13 = mysqli_fetch_assoc($opcoes13)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ13['id_alternativa'] == 549) {
									$alternativa1q13 = $row_alternativaQ13['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ13['veracidade'] == 1) {
									$corretaQ13 = $row_alternativaQ13['texto'];
								}
							}
						?>
						<label for="alternativa1q13">Insira a resposta:</label>
						<input type="text" name="questao13" id="alternativa1q13" placeholder="Insira sempre dois algarismos">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio13 = filter_input(INPUT_POST, 'questao13');
						$resposta13 = (string) trim($envio13);

						if($resposta13 === $corretaQ13){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 14 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao14)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao14)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ14 = mysqli_fetch_assoc($opcoes14)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ14['id_alternativa'] == 550) {
									$alternativa1q14 = $row_alternativaQ14['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ14['veracidade'] == 1) {
									$corretaQ14 = $row_alternativaQ14['texto'];
								}
							}
						?>
						<label for="alternativa1q14">Insira a resposta:</label>
						<input type="text" name="questao14" id="alternativa1q14" placeholder="Insira sempre dois algarismos">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio14 = filter_input(INPUT_POST, 'questao14');
						$resposta14 = (string) trim($envio14);

						if($resposta14 === $corretaQ14){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 15 -->
				<div class="question-box">
					<div class="question-number">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao15)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao15)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ15 = mysqli_fetch_assoc($opcoes15)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ15['id_alternativa'] == 551) {
									$alternativa1q15 = $row_alternativaQ15['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ15['veracidade'] == 1) {
									$corretaQ15 = $row_alternativaQ15['texto'];
								}
							}
						?>
						<label for="alternativa1q15">Insira a resposta:</label>
						<input type="text" name="questao15" id="alternativa1q15" placeholder="Insira sempre dois algarismos">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio15 = filter_input(INPUT_POST, 'questao15');
						$resposta15 = (string) trim($envio15);

						if($resposta15 === $corretaQ15){
							echo "foi";
						}
					?>
				</div>
				<!-- fim do questionário -->
				<div class="btn-box">
					<div class="previous-question-btn">
						<button type="button" class="btn-bio btn" onclick="back()">&ltrif; Questão anterior</button>
					</div>
					<div class="confirm-question-btn">
						<button type="button" class="btn-bio btn" onclick="next()">Confirmar resposta</button>
					</div>
					<div class="next-question-btn">
						<button type="button" class="btn-bio btn" onclick="next()">Próxima questão &rtrif;</button>
					</div>
				</div>
			</div>
			<div class="footer footer-size footer-questionario">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div>
		</div>

		<script src="../../../../js/pesquisa.js"></script>

	</body>
</html>