<?php
session_start();
include_once("../../../../conexao.php");
?>
<?php
	$index_questao = 0;
	$index_alternativa = 0;
	// questão 1
	$pergunta1 = "SELECT * FROM questao WHERE questao.id_questao = 76";
	$id_questao1 = mysqli_query($conexao, $pergunta1);
	$questao1 = mysqli_query($conexao, $pergunta1);
	
	$get_alternativas1 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 76";
	$opcoes1 = mysqli_query($conexao, $get_alternativas1);
	// questão 2
	$pergunta2 = "SELECT * FROM questao WHERE questao.id_questao = 77";
	$id_questao2 = mysqli_query($conexao, $pergunta2);
	$questao2 = mysqli_query($conexao, $pergunta2);
	
	$get_alternativas2 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 77";
	$opcoes2 = mysqli_query($conexao, $get_alternativas2);
	// questão 3
	$pergunta3 = "SELECT * FROM questao WHERE questao.id_questao = 78";
	$id_questao3 = mysqli_query($conexao, $pergunta3);
	$questao3 = mysqli_query($conexao, $pergunta3);
	
	$get_alternativas3 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 78";
	$opcoes3 = mysqli_query($conexao, $get_alternativas3);
	// questão 4
	$pergunta4 = "SELECT * FROM questao WHERE questao.id_questao = 79";
	$id_questao4 = mysqli_query($conexao, $pergunta4);
	$questao4 = mysqli_query($conexao, $pergunta4);
	
	$get_alternativas4 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 79";
	$opcoes4 = mysqli_query($conexao, $get_alternativas4);
	// questão 5
	$pergunta5 = "SELECT * FROM questao WHERE questao.id_questao = 80";
	$id_questao5 = mysqli_query($conexao, $pergunta5);
	$questao5 = mysqli_query($conexao, $pergunta5);
	
	$get_alternativas5 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 80";
	$opcoes5 = mysqli_query($conexao, $get_alternativas5);
	// questão 6
	$pergunta6 = "SELECT * FROM questao WHERE questao.id_questao = 176";
	$id_questao6 = mysqli_query($conexao, $pergunta6);
	$questao6 = mysqli_query($conexao, $pergunta6);
	
	$get_alternativas6 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 176";
	$opcoes6 = mysqli_query($conexao, $get_alternativas6);
	// questão 7
	$pergunta7 = "SELECT * FROM questao WHERE questao.id_questao = 177";
	$id_questao7 = mysqli_query($conexao, $pergunta7);
	$questao7 = mysqli_query($conexao, $pergunta7);
	
	$get_alternativas7 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 177";
	$opcoes7 = mysqli_query($conexao, $get_alternativas7);
	// questão 8
	$pergunta8 = "SELECT * FROM questao WHERE questao.id_questao = 178";
	$id_questao8 = mysqli_query($conexao, $pergunta8);
	$questao8 = mysqli_query($conexao, $pergunta8);
	
	$get_alternativas8 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 178";
	$opcoes8 = mysqli_query($conexao, $get_alternativas8);
	// questão 9
	$pergunta9 = "SELECT * FROM questao WHERE questao.id_questao = 179";
	$id_questao9 = mysqli_query($conexao, $pergunta9);
	$questao9 = mysqli_query($conexao, $pergunta9);
	
	$get_alternativas9 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 179";
	$opcoes9 = mysqli_query($conexao, $get_alternativas9);
	// questão 10
	$pergunta10 = "SELECT * FROM questao WHERE questao.id_questao = 180";
	$id_questao10 = mysqli_query($conexao, $pergunta10);
	$questao10 = mysqli_query($conexao, $pergunta10);
	
	$get_alternativas10 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 180";
	$opcoes10 = mysqli_query($conexao, $get_alternativas10);
	// questão 11
	$pergunta11 = "SELECT * FROM questao WHERE questao.id_questao = 201";
	$id_questao11 = mysqli_query($conexao, $pergunta11);
	$questao11 = mysqli_query($conexao, $pergunta11);
	
	$get_alternativas11 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 201";
	$opcoes11 = mysqli_query($conexao, $get_alternativas11);
	// questão 12
	$pergunta12 = "SELECT * FROM questao WHERE questao.id_questao = 202";
	$id_questao12 = mysqli_query($conexao, $pergunta12);
	$questao12 = mysqli_query($conexao, $pergunta12);
	
	$get_alternativas12 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 202";
	$opcoes12 = mysqli_query($conexao, $get_alternativas12);
	// questão 13
	$pergunta13 = "SELECT * FROM questao WHERE questao.id_questao = 203";
	$id_questao13 = mysqli_query($conexao, $pergunta13);
	$questao13 = mysqli_query($conexao, $pergunta13);
	
	$get_alternativas13 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 203";
	$opcoes13 = mysqli_query($conexao, $get_alternativas13);
	// questão 14
	$pergunta14 = "SELECT * FROM questao WHERE questao.id_questao = 204";
	$id_questao14 = mysqli_query($conexao, $pergunta14);
	$questao14 = mysqli_query($conexao, $pergunta14);
	
	$get_alternativas14 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 204";
	$opcoes14 = mysqli_query($conexao, $get_alternativas14);
	// questão 15
	$pergunta15 = "SELECT * FROM questao WHERE questao.id_questao = 205";
	$id_questao15 = mysqli_query($conexao, $pergunta15);
	$questao15 = mysqli_query($conexao, $pergunta15);
	
	$get_alternativas15 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 205";
	$opcoes15 = mysqli_query($conexao, $get_alternativas15);
	// questão 16
	$pergunta16 = "SELECT * FROM questao WHERE questao.id_questao = 276";
	$id_questao16 = mysqli_query($conexao, $pergunta16);
	$questao16 = mysqli_query($conexao, $pergunta16);
	
	$get_alternativas16 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 276";
	$opcoes16 = mysqli_query($conexao, $get_alternativas16);
	// questão 17
	$pergunta17 = "SELECT * FROM questao WHERE questao.id_questao = 277";
	$id_questao17 = mysqli_query($conexao, $pergunta17);
	$questao17 = mysqli_query($conexao, $pergunta17);
	
	$get_alternativas17 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 277";
	$opcoes17 = mysqli_query($conexao, $get_alternativas17);
	// questão 18
	$pergunta18 = "SELECT * FROM questao WHERE questao.id_questao = 278";
	$id_questao18 = mysqli_query($conexao, $pergunta18);
	$questao18 = mysqli_query($conexao, $pergunta18);
	
	$get_alternativas18 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 278";
	$opcoes18 = mysqli_query($conexao, $get_alternativas18);
	// questão 19
	$pergunta19 = "SELECT * FROM questao WHERE questao.id_questao = 279";
	$id_questao19 = mysqli_query($conexao, $pergunta19);
	$questao19 = mysqli_query($conexao, $pergunta19);
	
	$get_alternativas19 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 279";
	$opcoes19 = mysqli_query($conexao, $get_alternativas19);
	// questão 20
	$pergunta20 = "SELECT * FROM questao WHERE questao.id_questao = 280";
	$id_questao20 = mysqli_query($conexao, $pergunta20);
	$questao20 = mysqli_query($conexao, $pergunta20);
	
	$get_alternativas20 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 280";
	$opcoes20 = mysqli_query($conexao, $get_alternativas20);
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
		<div class="divisao-menu divisao-menu-quimica divisao-menu-materia">
			<img src="../../../../img/logo interno vermelho.jpeg">
			<div class="menu-interno atual-interno">
				<nav>
					<ul>
						<li><a href="../../../inicio.html">Início</a></li>
						<li><a href="">Disciplinas &dtri;</a>
							<ul>
								<li><a href="../../biologia.html">Biologia</a></li>
								<li><a href="../../fisica.html">Física</a></li>
								<li class="pagina-atual-vermelho"><a href="../../quimica.html">Química</a></li>
							</ul>
						</li>
						<li><a href="../../../desempenho.html">Desempenho</a></li>
						<li><a href="../../../ajuda.html">Ajuda?</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="divisao-superior divisao-superior-quimica">
			<<img src="../../../../img/usuario.png">
			<div>
				<p><a onclick="opcaoPerfil()">Usuário</a></p>
				<img src="../../../../img/escrita vermelho.jpeg" id="escrita">
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
				<li><a href="disciplinas/biologia/caracteristicasdosseresvivos/escolha.html">Características dos seres vivos</a></li>
				<li><a href="disciplinas/biologia/anatomia-morfologia-fisiologia/escolha.html">Anatomia, morfologia e fisiologia</a></li>
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
		<div class="escolha conteudo conteudo-qui">
			<h2>QUESTIONÁRIO</h2>
			<h3><b>Conceitos gerais</b></h3>		
			<div class="quiz-box custom-box">
				<!-- início do questionário -->
				<!-- questão 1 -->
				<div class="answers-indicator">
				
				</div>
				<div class="question-box">
					<div class="question-number-qui">
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
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativa = mysqli_fetch_assoc($opcoes1)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativa['id_alternativa'] == 354) {
									$alternativa1 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 355) {
									$alternativa2 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 356) {
									$alternativa3 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 357) {
									$alternativa4 = $row_alternativa['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativa['id_alternativa'] == 358) {
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
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativaQ2 = mysqli_fetch_assoc($opcoes2)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ2['id_alternativa'] == 359) {
									$alternativa1q2 = $row_alternativaQ2['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ2['id_alternativa'] == 360) {
									$alternativa2q2 = $row_alternativaQ2['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ2['id_alternativa'] == 361) {
									$alternativa3q2 = $row_alternativaQ2['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ2['id_alternativa'] == 362) {
									$alternativa4q2 = $row_alternativaQ2['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ2['id_alternativa'] == 363) {
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
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativaQ3 = mysqli_fetch_assoc($opcoes3)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ3['id_alternativa'] == 364) {
									$alternativa1q3 = $row_alternativaQ3['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ3['id_alternativa'] == 365) {
									$alternativa2q3 = $row_alternativaQ3['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ3['id_alternativa'] == 366) {
									$alternativa3q3 = $row_alternativaQ3['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ3['id_alternativa'] == 367) {
									$alternativa4q3 = $row_alternativaQ3['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ3['id_alternativa'] == 368) {
									$alternativa5q3 = $row_alternativaQ3['texto'];
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
						<input type="radio" name="questao3" id="alternativa5q3" value="<?php echo $alternativa5q3 ?>">
						<label for="alternativa5q3"><?php echo $alternativa5q3 ?></label>
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
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativaQ4 = mysqli_fetch_assoc($opcoes4)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ4['id_alternativa'] == 369) {
									$alternativa1q4 = $row_alternativaQ4['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ4['id_alternativa'] == 370) {
									$alternativa2q4 = $row_alternativaQ4['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ4['id_alternativa'] == 371) {
									$alternativa3q4 = $row_alternativaQ4['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ4['id_alternativa'] == 372) {
									$alternativa4q4 = $row_alternativaQ4['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ4['id_alternativa'] == 373) {
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
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativaQ5 = mysqli_fetch_assoc($opcoes5)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ5['id_alternativa'] == 374) {
									$alternativa1q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['id_alternativa'] == 375) {
									$alternativa2q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['id_alternativa'] == 376) {
									$alternativa3q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['id_alternativa'] == 377) {
									$alternativa4q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['id_alternativa'] == 378) {
									$alternativa5q5 = $row_alternativaQ5['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ5['veracidade'] == 1) {
									$corretaQ5 = (string) trim($row_alternativaQ5['texto']);
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
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ6 = mysqli_fetch_assoc($opcoes6)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ6['id_alternativa'] == 587) {
									$alternativa1q6 = $row_alternativaQ6['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ6['veracidade'] == 1) {
									$corretaQ6 = (string) trim($row_alternativaQ6['texto']);
								}
							
							}
						?>
						<label for="alternativa1q6">Insira a resposta:</label>
						<input type="text" name="questao6" id="alternativa1q6">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio6 = filter_input(INPUT_POST, 'questao6');
						$resposta6 = (string) trim($envio6);

						if($resposta6 === $corretaQ6){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 7 -->
				<div class="question-box">
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ7 = mysqli_fetch_assoc($opcoes7)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ7['id_alternativa'] == 588) {
									$alternativa1q7x = $row_alternativaQ7['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ7['id_alternativa'] == 589) {
									$alternativa1q7y = $row_alternativaQ7['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ7['veracidade'] == 1) {
									$corretaQ7 = (string) trim($row_alternativaQ7['texto']);
								}
							
							}
						?>
						<label for="alternativa1q7x">Espaço 1:</label>
						<input type="text" name="questao7x" id="alternativa1q7x">
						<br>
						<label for="alternativa1q7y">Espaço 2:</label>
						<input type="text" name="questao7y" id="alternativa1q7y">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio7x = filter_input(INPUT_POST, 'questao7x');
						$resposta7x = (string) trim($envio7x);

						$envio7y = filter_input(INPUT_POST, 'questao7y');
						$resposta7y = (string) trim($envio7y);

						if(($resposta7x === $alternativa1q7x) && ($resposta7y === $alternativa1q7y)){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 8 -->
				<div class="question-box">
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ8 = mysqli_fetch_assoc($opcoes8)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ8['id_alternativa'] == 590) {
									$alternativa1q8 = $row_alternativaQ8['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ8['veracidade'] == 1) {
									$corretaQ8 = trim($row_alternativaQ8['texto']);
								}
							
							}
						?>
						<label for="alternativa1q8">Insira a resposta:</label>
						<input type="text" name="questao8" id="alternativa1q8">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio8 = filter_input(INPUT_POST, 'questao8');
						$resposta8 = (string) trim($envio8);

						if($resposta8 === $corretaQ8){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 9 -->
				<div class="question-box">
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ9 = mysqli_fetch_assoc($opcoes9)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ9['id_alternativa'] == 591) {
									$alternativa1q9 = $row_alternativaQ9['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ9['veracidade'] == 1) {
									$corretaQ9 = trim($row_alternativaQ9['texto']);
								}
							
							}
						?>
						<label for="alternativa1q9">Insira a resposta:</label>
						<input type="text" name="questao9" id="alternativa1q9">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio9 = filter_input(INPUT_POST, 'questao9');
						$resposta9 = (string) trim($envio9);

						if($resposta9 === $corretaQ9){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 10 -->
				<div class="question-box">
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ10 = mysqli_fetch_assoc($opcoes10)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ10['id_alternativa'] == 592) {
									$alternativa1q10 = $row_alternativaQ10['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ10['veracidade'] == 1) {
									$corretaQ10 = trim($row_alternativaQ10['texto']);
								}
							
							}
						?>
						<label for="alternativa1q10">Insira a resposta:</label>
						<input type="text" name="questao10" id="alternativa1q10">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio10 = filter_input(INPUT_POST, 'questao10');
						$resposta10 = (string) trim($envio10);

						if($resposta10 === $corretaQ10){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 11 -->
				<div class="question-box">
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativaQ11 = mysqli_fetch_assoc($opcoes11)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ11['id_alternativa'] == 620) {
									$alternativa1q11 = $row_alternativaQ11['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ11['id_alternativa'] == 621) {
									$alternativa2q11 = $row_alternativaQ11['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ11['veracidade'] == 1) {
									$corretaQ11 = $row_alternativaQ11['texto'];
								}
							
							}
						?>
						<input type="radio" name="questao11" id="alternativa1q11" value="<?php echo $alternativa1q11 ?>">
						<label for="alternativa1q11"><?php echo $alternativa1q11 ?></label>
						<br>
						<input type="radio" name="questao11" id="alternativa2q11" value="<?php echo $alternativa2q11 ?>">
						<label for="alternativa2q11"><?php echo $alternativa2q11 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha11 = filter_input(INPUT_POST, 'questao11');
						if($escolha11 == $corretaQ11){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 12 -->
				<div class="question-box">
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativaQ12 = mysqli_fetch_assoc($opcoes12)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ12['id_alternativa'] == 622) {
									$alternativa1q12 = $row_alternativaQ12['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ12['id_alternativa'] == 623) {
									$alternativa2q12 = $row_alternativaQ12['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ12['id_alternativa'] == 624) {
									$alternativa3q12 = $row_alternativaQ12['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ12['id_alternativa'] == 625) {
									$alternativa4q12 = $row_alternativaQ12['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ12['id_alternativa'] == 626) {
									$alternativa5q12 = $row_alternativaQ12['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ12['veracidade'] == 1) {
									$corretaQ12 = $row_alternativaQ12['texto'];
								}
							}
						?>
						<input type="radio" name="questao12" id="alternativa1q12" value="<?php echo $alternativa1q12 ?>">
						<label for="alternativa1q12"><?php echo $alternativa1q12 ?></label>
						<br>
						<input type="radio" name="questao12" id="alternativa2q12" value="<?php echo $alternativa2q12 ?>">
						<label for="alternativa2q12"><?php echo $alternativa2q12 ?></label>
						<br>
						<input type="radio" name="questao12" id="alternativa3q12" value="<?php echo $alternativa3q12 ?>">
						<label for="alternativa3q12"><?php echo $alternativa3q12 ?></label>
						<br>
						<input type="radio" name="questao12" id="alternativa4q12" value="<?php echo $alternativa4q12 ?>">
						<label for="alternativa4q12"><?php echo $alternativa4q12 ?></label>
						<br>
						<input type="radio" name="questao12" id="alternativa5q12" value="<?php echo $alternativa5q12 ?>">
						<label for="alternativa5q12"><?php echo $alternativa5q12 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha12 = filter_input(INPUT_POST, 'questao12');
						if($escolha12 == $corretaQ12){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 13 -->
				<div class="question-box">
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativaQ13 = mysqli_fetch_assoc($opcoes13)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ13['id_alternativa'] == 627) {
									$alternativa1q13 = $row_alternativaQ13['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ13['id_alternativa'] == 628) {
									$alternativa2q13 = $row_alternativaQ13['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ13['id_alternativa'] == 629) {
									$alternativa3q13 = $row_alternativaQ13['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ13['id_alternativa'] == 630) {
									$alternativa4q13 = $row_alternativaQ13['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ13['id_alternativa'] == 631) {
									$alternativa5q13 = $row_alternativaQ13['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ13['veracidade'] == 1) {
									$corretaQ13 = $row_alternativaQ13['texto'];
								}
							}
						?>
						<input type="radio" name="questao13" id="alternativa1q13" value="<?php echo $alternativa1q13 ?>">
						<label for="alternativa1q13"><?php echo $alternativa1q13 ?></label>
						<br>
						<input type="radio" name="questao13" id="alternativa2q13" value="<?php echo $alternativa2q13 ?>">
						<label for="alternativa2q13"><?php echo $alternativa2q13 ?></label>
						<br>
						<input type="radio" name="questao13" id="alternativa3q13" value="<?php echo $alternativa3q13 ?>">
						<label for="alternativa3q13"><?php echo $alternativa3q13 ?></label>
						<br>
						<input type="radio" name="questao13" id="alternativa4q13" value="<?php echo $alternativa4q13 ?>">
						<label for="alternativa4q13"><?php echo $alternativa4q13 ?></label>
						<br>
						<input type="radio" name="questao13" id="alternativa5q13" value="<?php echo $alternativa5q13 ?>">
						<label for="alternativa5q13"><?php echo $alternativa5q13 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha13 = filter_input(INPUT_POST, 'questao13');
						if($escolha13 == $corretaQ13){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 14 -->
				<div class="question-box">
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativaQ14 = mysqli_fetch_assoc($opcoes14)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ14['id_alternativa'] == 632) {
									$alternativa1q14 = $row_alternativaQ14['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ14['id_alternativa'] == 633) {
									$alternativa2q14 = $row_alternativaQ14['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ14['id_alternativa'] == 634) {
									$alternativa3q14 = $row_alternativaQ14['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ14['id_alternativa'] == 635) {
									$alternativa4q14 = $row_alternativaQ14['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ14['id_alternativa'] == 636) {
									$alternativa5q14 = $row_alternativaQ14['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ14['veracidade'] == 1) {
									$corretaQ14 = $row_alternativaQ14['texto'];
								}
							}
						?>
						<input type="radio" name="questao14" id="alternativa1q14" value="<?php echo $alternativa1q14 ?>">
						<label for="alternativa1q14"><?php echo $alternativa1q14 ?></label>
						<br>
						<input type="radio" name="questao14" id="alternativa2q14" value="<?php echo $alternativa2q14 ?>">
						<label for="alternativa2q14"><?php echo $alternativa2q14 ?></label>
						<br>
						<input type="radio" name="questao14" id="alternativa3q14" value="<?php echo $alternativa3q14 ?>">
						<label for="alternativa3q14"><?php echo $alternativa3q14 ?></label>
						<br>
						<input type="radio" name="questao14" id="alternativa4q14" value="<?php echo $alternativa4q14 ?>">
						<label for="alternativa4q14"><?php echo $alternativa4q14 ?></label>
						<br>
						<input type="radio" name="questao14" id="alternativa5q14" value="<?php echo $alternativa5q14 ?>">
						<label for="alternativa5q14"><?php echo $alternativa5q14 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha14 = filter_input(INPUT_POST, 'questao14');
						if($escolha14 == $corretaQ14){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 15 -->
				<div class="question-box">
					<div class="question-number-qui">
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
				<div class="option-container option-container-qui">
					<form method="post">
						<?php
							while ($row_alternativaQ15 = mysqli_fetch_assoc($opcoes15)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ15['id_alternativa'] == 637) {
									$alternativa1q15 = $row_alternativaQ15['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ15['id_alternativa'] == 638) {
									$alternativa2q15 = $row_alternativaQ15['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ15['id_alternativa'] == 639) {
									$alternativa3q15 = $row_alternativaQ15['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ15['id_alternativa'] == 640) {
									$alternativa4q15 = $row_alternativaQ15['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ15['id_alternativa'] == 641) {
									$alternativa5q15 = $row_alternativaQ15['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ15['veracidade'] == 1) {
									$corretaQ15 = $row_alternativaQ15['texto'];
								}
							}
						?>
						<input type="radio" name="questao15" id="alternativa1q15" value="<?php echo $alternativa1q15 ?>">
						<label for="alternativa1q15"><?php echo $alternativa1q15 ?></label>
						<br>
						<input type="radio" name="questao15" id="alternativa2q15" value="<?php echo $alternativa2q15 ?>">
						<label for="alternativa2q15"><?php echo $alternativa2q15 ?></label>
						<br>
						<input type="radio" name="questao15" id="alternativa3q15" value="<?php echo $alternativa3q15 ?>">
						<label for="alternativa3q15"><?php echo $alternativa3q15 ?></label>
						<br>
						<input type="radio" name="questao15" id="alternativa4q15" value="<?php echo $alternativa4q15 ?>">
						<label for="alternativa4q15"><?php echo $alternativa4q15 ?></label>
						<br>
						<input type="radio" name="questao15" id="alternativa5q15" value="<?php echo $alternativa5q15 ?>">
						<label for="alternativa5q15"><?php echo $alternativa5q15 ?></label>
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$escolha15 = filter_input(INPUT_POST, 'questao15');
						if($escolha15 == $corretaQ15){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 16 -->
				<div class="question-box">
					<div class="question-number-qui">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao16)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao16)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ16 = mysqli_fetch_assoc($opcoes16)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ16['id_alternativa'] == 807) {
									$alternativa1q16 = $row_alternativaQ16['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ16['veracidade'] == 1) {
									$corretaQ16 = $row_alternativaQ16['texto'];
								}
							}
						?>
						<label for="alternativa1q16">Insira a resposta:</label>
						<input type="text" name="questao16" id="alternativa1q16" placeholder="Insira sempre dois algarismos">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio16 = filter_input(INPUT_POST, 'questao16');
						$resposta16 = (string) trim($envio16);

						if($resposta16 === $corretaQ16){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 17 -->
				<div class="question-box">
					<div class="question-number-qui">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao17)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao17)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ17 = mysqli_fetch_assoc($opcoes17)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ17['id_alternativa'] == 808) {
									$alternativa1q17 = $row_alternativaQ17['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ17['veracidade'] == 1) {
									$corretaQ17 = $row_alternativaQ17['texto'];
								}
							}
						?>
						<label for="alternativa1q17">Insira a resposta:</label>
						<input type="text" name="questao17" id="alternativa1q17" placeholder="Insira sempre dois algarismos">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio17 = filter_input(INPUT_POST, 'questao17');
						$resposta17 = (string) trim($envio17);

						if($resposta17 === $corretaQ17){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 18 -->
				<div class="question-box">
					<div class="question-number-qui">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao18)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao18)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ18 = mysqli_fetch_assoc($opcoes18)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ18['id_alternativa'] == 809) {
									$alternativa1q18 = $row_alternativaQ18['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ18['veracidade'] == 1) {
									$corretaQ18 = $row_alternativaQ18['texto'];
								}
							}
						?>
						<label for="alternativa1q18">Insira a resposta:</label>
						<input type="text" name="questao18" id="alternativa1q18" placeholder="Insira sempre dois algarismos">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio18 = filter_input(INPUT_POST, 'questao18');
						$resposta18 = (string) trim($envio18);

						if($resposta18 === $corretaQ18){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 19 -->
				<div class="question-box">
					<div class="question-number-qui">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao19)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao19)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ19 = mysqli_fetch_assoc($opcoes19)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ19['id_alternativa'] == 810) {
									$alternativa1q19 = $row_alternativaQ19['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ19['veracidade'] == 1) {
									$corretaQ19 = $row_alternativaQ19['texto'];
								}
							}
						?>
						<label for="alternativa1q19">Insira a resposta:</label>
						<input type="text" name="questao19" id="alternativa1q19" placeholder="Insira sempre dois algarismos">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio19 = filter_input(INPUT_POST, 'questao19');
						$resposta19 = (string) trim($envio19);

						if($resposta19 === $corretaQ19){
							echo "foi";
						}
					?>
				</div>
				<!-- questão 20 -->
				<div class="question-box">
					<div class="question-number-qui">
						<?php
							while ($row_id_questao = mysqli_fetch_assoc($id_questao20)) {
							$index_questao++;
							$id = (string) trim($row_id_questao['id_questao']);
							echo $index_questao;
							}
						?>
					</div>
					<div class="question-text">
						<?php
							while ($row_questao = mysqli_fetch_assoc($questao20)) {
							echo $row_questao['enunciado'];
							}
						?>		
					</div>
				</div>
				<div class="option-container option-container-qui lacuna">
					<form method="post">
						<?php
							while ($row_alternativaQ20 = mysqli_fetch_assoc($opcoes20)) {
							// $id = (string) trim($row_alternativa['id_questao']);
								if ($row_alternativaQ20['id_alternativa'] == 811) {
									$alternativa1q20 = $row_alternativaQ20['texto'];
									// echo $alternativa1;
								}
								if ($row_alternativaQ20['veracidade'] == 1) {
									$corretaQ20 = $row_alternativaQ20['texto'];
								}
							}
						?>
						<label for="alternativa1q20">Insira a resposta:</label>
						<input type="text" name="questao20" id="alternativa1q20" placeholder="Insira sempre dois algarismos">
						<br>
						<input type="submit" name="confirmar" value="Confirmar resposta">
					</form>
					<?php
						$envio20 = filter_input(INPUT_POST, 'questao20');
						$resposta20 = (string) trim($envio20);

						if($resposta20 === $corretaQ20){
							echo "foi";
						}
					?>
				</div>
				<!-- fim do questionário -->
				<div class="btn-box">
					<div class="previous-question-btn">
						<button type="button" class="btn-qui btn" onclick="back()">&ltrif; Questão anterior</button>
					</div>
					<div class="confirm-question-btn">
						<button type="button" class="btn-qui btn" onclick="next()">Confirmar resposta</button>
					</div>
					<div class="next-question-btn">
						<button type="button" class="btn-qui btn" onclick="next()">Próxima questão &rtrif;</button>
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