<<<<<<< HEAD
<?php
session_start();
include_once("../../../../conexao.php");
?>
<?php
	$index_questao = 0;
	$index_alternativa = 0;

	$get_pontuacao_correta = "SELECT * FROM desempenho WHERE desempenho.id_usuario = 1 AND desempenho.id_questionario = 1";
	$pontuacao_correta = mysqli_query($conexao, $get_pontuacao_correta);

	$get_pontuacao_errada = "SELECT * FROM desempenho WHERE desempenho.id_usuario = 1 AND desempenho.id_questionario = 1";
	$pontuacao_errada = mysqli_query($conexao, $get_pontuacao_errada);

	// questão 1
	$pergunta1 = "SELECT * FROM questao WHERE questao.id_questao = 51";
	$id_questao1 = mysqli_query($conexao, $pergunta1);
	$questao1 = mysqli_query($conexao, $pergunta1);
	
	$get_alternativas1 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 51";
	$opcoes1 = mysqli_query($conexao, $get_alternativas1);
	// questão 2
	$pergunta2 = "SELECT * FROM questao WHERE questao.id_questao = 52";
	$id_questao2 = mysqli_query($conexao, $pergunta2);
	$questao2 = mysqli_query($conexao, $pergunta2);
	
	$get_alternativas2 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 52";
	$opcoes2 = mysqli_query($conexao, $get_alternativas2);
	// questão 3
	$pergunta3 = "SELECT * FROM questao WHERE questao.id_questao = 53";
	$id_questao3 = mysqli_query($conexao, $pergunta3);
	$questao3 = mysqli_query($conexao, $pergunta3);
	
	$get_alternativas3 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 53";
	$opcoes3 = mysqli_query($conexao, $get_alternativas3);
	// questão 4
	$pergunta4 = "SELECT * FROM questao WHERE questao.id_questao = 54";
	$id_questao4 = mysqli_query($conexao, $pergunta4);
	$questao4 = mysqli_query($conexao, $pergunta4);
	
	$get_alternativas4 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 54";
	$opcoes4 = mysqli_query($conexao, $get_alternativas4);
	// questão 5
	$pergunta5 = "SELECT * FROM questao WHERE questao.id_questao = 151";
	$id_questao5 = mysqli_query($conexao, $pergunta5);
	$questao5 = mysqli_query($conexao, $pergunta5);
	
	$get_alternativas5 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 151";
	$opcoes5 = mysqli_query($conexao, $get_alternativas5);
	// questão 6
	$pergunta6 = "SELECT * FROM questao WHERE questao.id_questao = 152";
	$id_questao6 = mysqli_query($conexao, $pergunta6);
	$questao6 = mysqli_query($conexao, $pergunta6);
	
	$get_alternativas6 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 152";
	$opcoes6 = mysqli_query($conexao, $get_alternativas6);
	// questão 7
	$pergunta7 = "SELECT * FROM questao WHERE questao.id_questao = 153";
	$id_questao7 = mysqli_query($conexao, $pergunta7);
	$questao7 = mysqli_query($conexao, $pergunta7);
	
	$get_alternativas7 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 153";
	$opcoes7 = mysqli_query($conexao, $get_alternativas7);
	// questão 8
	$pergunta8 = "SELECT * FROM questao WHERE questao.id_questao = 226";
	$id_questao8 = mysqli_query($conexao, $pergunta8);
	$questao8 = mysqli_query($conexao, $pergunta8);
	
	$get_alternativas8 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 226";
	$opcoes8 = mysqli_query($conexao, $get_alternativas8);
	// questão 9
	$pergunta9 = "SELECT * FROM questao WHERE questao.id_questao = 227";
	$id_questao9 = mysqli_query($conexao, $pergunta9);
	$questao9 = mysqli_query($conexao, $pergunta9);
	
	$get_alternativas9 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 227";
	$opcoes9 = mysqli_query($conexao, $get_alternativas9);
	// questão 10
	$pergunta10 = "SELECT * FROM questao WHERE questao.id_questao = 228";
	$id_questao10 = mysqli_query($conexao, $pergunta10);
	$questao10 = mysqli_query($conexao, $pergunta10);
	
	$get_alternativas10 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 228";
	$opcoes10 = mysqli_query($conexao, $get_alternativas10);
	// questão 11
	$pergunta11 = "SELECT * FROM questao WHERE questao.id_questao = 229";
	$id_questao11 = mysqli_query($conexao, $pergunta11);
	$questao11 = mysqli_query($conexao, $pergunta11);
	
	$get_alternativas11 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 229";
	$opcoes11 = mysqli_query($conexao, $get_alternativas11);
	// questão 12
	$pergunta12 = "SELECT * FROM questao WHERE questao.id_questao = 251";
	$id_questao12 = mysqli_query($conexao, $pergunta12);
	$questao12 = mysqli_query($conexao, $pergunta12);
	
	$get_alternativas12 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 251";
	$opcoes12 = mysqli_query($conexao, $get_alternativas12);
	// questão 13
	$pergunta13 = "SELECT * FROM questao WHERE questao.id_questao = 252";
	$id_questao13 = mysqli_query($conexao, $pergunta13);
	$questao13 = mysqli_query($conexao, $pergunta13);
	
	$get_alternativas13 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 252";
	$opcoes13 = mysqli_query($conexao, $get_alternativas13);
	// questão 14
	$pergunta14 = "SELECT * FROM questao WHERE questao.id_questao = 253";
	$id_questao14 = mysqli_query($conexao, $pergunta14);
	$questao14 = mysqli_query($conexao, $pergunta14);
	
	$get_alternativas14 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 253";
	$opcoes14 = mysqli_query($conexao, $get_alternativas14);
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
		<div class="divisao-menu divisao-menu-fisica divisao-menu-materia">
			<img src="../../../../img/logo interno rosa.jpeg">
			<div class="menu-interno atual-interno">
				<nav>
					<ul>
						<li><a href="../../../inicio.php">Início</a></li>
						<li><a href="">Disciplinas &dtri;</a>
							<ul>
								<li><a href="../../biologia.html">Biologia</a></li>
								<li class="pagina-atual-rosa"><a href="../../fisica.html">Física</a></li>
								<li><a href="../../quimica.html">Química</a></li>
							</ul>
						</li>
						<li><a href="../../../desempenho.html">Desempenho</a></li>
						<li><a href="../../../ajuda.html">Ajuda?</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="divisao-superior divisao-superior-fisica">
			<<img src="../../../../img/usuario.png">
			<div>
				<p><a onclick="opcaoPerfil()">Usuário</a></p>
				<img src="../../../../img/escrita rosa.jpeg" id="escrita">
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
		<div class="escolha conteudo conteudo-fis">
			<h2>QUESTIONÁRIO</h2>
			<h3><b>Introdução ao estudo da física</b></h3>		
			<div class="quiz-box custom-box">
				<!-- início do questionário -->
				<!-- questão 1 -->
				<div class="whole-question active" id="1">
					<div class="answers-indicator">
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativa = mysqli_fetch_assoc($opcoes1)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativa['id_alternativa'] == 232) {
										$alternativa1 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['id_alternativa'] == 233) {
										$alternativa2 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['id_alternativa'] == 234) {
										$alternativa3 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['id_alternativa'] == 235) {
										$alternativa4 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['id_alternativa'] == 236) {
										$alternativa5 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['veracidade'] == 1) {
										$correta = $row_alternativa['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao1" id="alternativa1" value="<?php echo $alternativa1 ?>">
							<label for="alternativa1" id="alternativa1"><?php echo $alternativa1 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa2" value="<?php echo $alternativa2 ?>">
							<label for="alternativa2" id="alternativa2"><?php echo $alternativa2 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa3" value="<?php echo $alternativa3 ?>">
							<label for="alternativa3" id="alternativa3"><?php echo $alternativa3 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa4" value="<?php echo $alternativa4 ?>">
							<label for="alternativa4" id="alternativa4"><?php echo $alternativa4 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa5" value="<?php echo $alternativa5 ?>">
							<label for="alternativa5" id="alternativa5"><?php echo $alternativa5 ?></label>
							<br>
							<div class="btn-box">
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q1">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion2()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha = filter_input(INPUT_POST, 'questao1');
							if(isset($escolha)){
								if($escolha == $correta){
									echo '<style type/css>
									#alternativa5{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 
									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa5{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha) {
										case $alternativa1:
											echo '<style type/css>
											#alternativa1{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
												break;
										case $alternativa2:
											echo '<style type/css>
												#alternativa2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
												break;
										case $alternativa3:
											echo '<style type/css>
												#alternativa3{
													border: 2px solid red;
														background-color:  #ff6347;
													}
												</style>';
											break;
										case $alternativa4:
											echo '<style type/css>
												#alternativa4{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5:
												echo '<style type/css>
												#alternativa5{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
							?>
						<script >
							var bt_q1 = document.getElementById("bt-q1");
						</script>
						<?php
							if(isset($escolha)){
						?>
						<script>
							bt_q1.style.display = "none";
						</script>
						<?php
							}
						?>
					</div>
				</div>
				<!-- questão 2 -->
				<div class="whole-question" id="2">
					<div class="answers-indicator">
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ2 = mysqli_fetch_assoc($opcoes2)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ2['id_alternativa'] == 237) {
										$alternativa1q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 238) {
										$alternativa2q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 239) {
										$alternativa3q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 240) {
										$alternativa4q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 241) {
										$alternativa5q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['veracidade'] == 1) {
										$corretaQ2 = $row_alternativaQ2['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao2" id="alternativa1q2" value="<?php echo $alternativa1q2 ?>">
							<label for="alternativa1q2" id="alternativa1q2"><?php echo $alternativa1q2 ?></label>
							<br>
							<input type="radio" name="questao2" id="alternativa2q2" value="<?php echo $alternativa2q2 ?>">
							<label for="alternativa2q2" id="alternativa2q2"><?php echo $alternativa2q2 ?></label>
							<br>
							<input type="radio" name="questao2" id="alternativa3q2" value="<?php echo $alternativa3q2 ?>">
							<label for="alternativa3q2" id="alternativa3q2"><?php echo $alternativa3q2 ?></label>
							<br>
							<input type="radio" name="questao2" id="alternativa4q2" value="<?php echo $alternativa4q2 ?>">
							<label for="alternativa4q2" id="alternativa4q2"><?php echo $alternativa4q2 ?></label>
							<br>
							<input type="radio" name="questao2" id="alternativa5q2" value="<?php echo $alternativa5q2 ?>">
							<label for="alternativa5q2" id="alternativa5q2"><?php echo $alternativa5q2 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion1()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q2" onclick="here2()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion3()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha2 = filter_input(INPUT_POST, 'questao2');
							if(isset($escolha2)){
								if($escolha2 == $corretaQ2){
									echo '<style type/css>
									#alternativa1q2{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1"); 

									echo '<style type/css>
									#alternativa1q2{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha2) {
										case $alternativa1q2:
											echo '<style type/css>
												#alternativa1q2{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q2:
											echo '<style type/css>
												#alternativa2q2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q2:
											echo '<style type/css>
												#alternativa3q2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q2:
											echo '<style type/css>
												#alternativa4q2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q2:
											echo '<style type/css>
												#alternativa5q2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual2 = false;
								var bt_q2 = document.getElementById("bt-q2");
							</script>
							<?php
							if(isset($escolha2)){
								if($escolha2 == $corretaQ2){
									?>
									<script>
										atual2 = true;
										bt_q2.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual2 = true;
										bt_q2.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 3 -->
				<div class="whole-question" id="3">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id53.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ3 = mysqli_fetch_assoc($opcoes3)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ3['id_alternativa'] == 242) {
										$alternativa1q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 243) {
										$alternativa2q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 244) {
										$alternativa3q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 245) {
										$alternativa4q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 246) {
										$alternativa5q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['veracidade'] == 1) {
										$corretaQ3 = $row_alternativaQ3['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao3" id="alternativa1q3" value="<?php echo $alternativa1q3 ?>">
							<label for="alternativa1q3" id="alternativa1q3"><?php echo $alternativa1q3 ?></label>
							<br>
							<input type="radio" name="questao3" id="alternativa2q3" value="<?php echo $alternativa2q3 ?>">
							<label for="alternativa2q3" id="alternativa2q3"><?php echo $alternativa2q3 ?></label>
							<br>
							<input type="radio" name="questao3" id="alternativa3q3" value="<?php echo $alternativa3q3 ?>">
							<label for="alternativa3q3" id="alternativa3q3"><?php echo $alternativa3q3 ?></label>
							<br>
							<input type="radio" name="questao3" id="alternativa4q3" value="<?php echo $alternativa4q3 ?>">
							<label for="alternativa4q3" id="alternativa4q3"><?php echo $alternativa4q3 ?></label>
							<br>
							<input type="radio" name="questao3" id="alternativa5q3" value="<?php echo $alternativa5q3 ?>">
							<label for="alternativa5q3" id="alternativa5q3"><?php echo $alternativa5q3 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion2()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q3" onclick="here3()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion4()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
								$escolha3 = filter_input(INPUT_POST, 'questao3');
								if(isset($escolha3)){
									if($escolha3 == $corretaQ3){
										echo '<style type/css>
										#alternativa1q3{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									else{ 

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
										#alternativa1q3{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';
										switch ($escolha3) {
											case $alternativa1q3:
												echo '<style type/css>
													#alternativa1q3{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
												break;
											case $alternativa2q3:
												echo '<style type/css>
													#alternativa2q3{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa3q3:
												echo '<style type/css>
													#alternativa3q3{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa4q3:
												echo '<style type/css>
													#alternativa4q3{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa5q3:
												echo '<style type/css>
													#alternativa5q3{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
										}
									}
								}
							?>
								<script >
									var atual3 = false;
									var bt_q3 = document.getElementById("bt-q3");
								</script>
								<?php
								if(isset($escolha3)){
									if($escolha3 == $corretaQ3){
										?>
										<script>
											atual3 = true;
											bt_q3.style.display = "none";
										</script>
										<?php
									}
									else{
										?>
										<script>
											atual3 = true;
											bt_q3.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- questão 4 -->
				<div class="whole-question" id="4">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ4 = mysqli_fetch_assoc($opcoes4)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ4['id_alternativa'] == 247) {
										$alternativa1q4 = $row_alternativaQ4['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ4['id_alternativa'] == 248) {
										$alternativa2q4 = $row_alternativaQ4['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ4['id_alternativa'] == 249) {
										$alternativa3q4 = $row_alternativaQ4['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ4['id_alternativa'] == 250) {
										$alternativa4q4 = $row_alternativaQ4['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ4['veracidade'] == 1) {
										$corretaQ4 = $row_alternativaQ4['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao4" id="alternativa1q4" value="<?php echo $alternativa1q4 ?>">
							<label for="alternativa1q4" id="alternativa1q4"><?php echo $alternativa1q4 ?></label>
							<br>
							<input type="radio" name="questao4" id="alternativa2q4" value="<?php echo $alternativa2q4 ?>">
							<label for="alternativa2q4" id="alternativa2q4"><?php echo $alternativa2q4 ?></label>
							<br>
							<input type="radio" name="questao4" id="alternativa3q4" value="<?php echo $alternativa3q4 ?>">
							<label for="alternativa3q4" id="alternativa3q4"><?php echo $alternativa3q4 ?></label>
							<br>
							<input type="radio" name="questao4" id="alternativa4q4" value="<?php echo $alternativa4q4 ?>">
							<label for="alternativa4q4" id="alternativa4q4"><?php echo $alternativa4q4 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion3()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q4" onclick="here4()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion5()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
								$escolha4 = filter_input(INPUT_POST, 'questao4');
								if(isset($escolha4)){
									if($escolha4 == $corretaQ4){
										echo '<style type/css>
										#alternativa2q4{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									else{ 

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
										#alternativa2q4{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';
										switch ($escolha4) {
											case $alternativa1q4:
												echo '<style type/css>
													#alternativa1q4{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
												break;
											case $alternativa2q4:
												echo '<style type/css>
													#alternativa2q4{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa3q4:
												echo '<style type/css>
													#alternativa3q4{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa4q4:
												echo '<style type/css>
													#alternativa4q4{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
										}
									}
								}
							?>
								<script >
									var atual4 = false;
									var bt_q4 = document.getElementById("bt-q4");
								</script>
								<?php
								if(isset($escolha4)){
									if($escolha4 == $corretaQ4){
										?>
										<script>
											atual4 = true;
											bt_q4.style.display = "none";
										</script>
										<?php
									}
									else{
										?>
										<script>
											atual4 = true;
											bt_q4.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- questão 5 -->
				<div class="whole-question" id="5">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ5 = mysqli_fetch_assoc($opcoes5)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ5['id_alternativa'] == 558) {
										$alternativa1q5 = $row_alternativaQ5['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ5['veracidade'] == 1) {
										$corretaQ5 = (string) trim($row_alternativaQ5['texto']);
									}
								
								}
							?>
							<label for="alternativa1q5">Insira a resposta:</label>
							<input type="text" name="questao5" id="alternativa1q5">
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion4()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-fis" id="bt-q5" onclick="here5()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion6()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio5 = filter_input(INPUT_POST, 'questao5');
							$resposta5 = (string) trim($envio5);
								if(isset($resposta5)){
								if($resposta5 === $corretaQ5){
								echo '<style type/css>
									#alternativa1q5{
											border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								elseif(isset($_POST['questao5'])){

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
												#alternativa1q5{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
								}
							}
						?>
							<script >
								var atual5 = false;
								var bt_q5 = document.getElementById("bt-q5");
							</script>
							<?php
							if(isset($resposta5)){
								if($resposta5 == $corretaQ5){
									?>
									<script>
										atual5 = true;
										bt_q5.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao5'])){
									?>
									<script>
										atual5 = true;
										bt_q5.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 6 -->
				<div class="whole-question" id="6">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ6 = mysqli_fetch_assoc($opcoes6)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ6['id_alternativa'] == 559) {
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion5()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-fis" id="bt-q6" onclick="here6()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion7()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio6 = filter_input(INPUT_POST, 'questao6');
							$resposta6= (string) trim($envio6);
							if(isset($resposta6)){
								if($resposta6 === $corretaQ6){
								echo '<style type/css>
									#alternativa1q6{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								elseif(isset($_POST['questao6'])){

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
												#alternativa1q6{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
								}
							}
						?>
							<script >
								var atual6 = false;
								var bt_q6 = document.getElementById("bt-q6");
							</script>
							<?php
							if(isset($resposta6)){
								if($resposta6 == $corretaQ6){
									?>
									<script>
										atual6 = true;
										bt_q6.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao6'])){
									?>
									<script>
										atual6 = true;
										bt_q6.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 7 -->
				<div class="whole-question" id="7">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id153.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ7 = mysqli_fetch_assoc($opcoes7)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ7['id_alternativa'] == 560) {
										$alternativa1q7 = $row_alternativaQ7['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ7['veracidade'] == 1) {
										$corretaQ7 = (string) trim($row_alternativaQ7['texto']);
									}
								
								}
							?>
							<label for="alternativa1q7">Insira a resposta:</label>
							<input type="text" name="questao7" id="alternativa1q7">
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion6()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-fis" id="bt-q7" onclick="here7()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion8()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio7 = filter_input(INPUT_POST, 'questao7');
							$resposta7 = (string) trim($envio7);
							if(isset($resposta7)){
								if($resposta7 === $corretaQ7){
									echo '<style type/css>
										#alternativa1q7{
										border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
								elseif(isset($_POST['questao7'])){

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
										#alternativa1q7{
											border: 2px solid red;
											background-color: #ff6347;
										}
										</style>';
								}
							}
						?>
							<script >
								var atual7 = false;
								var bt_q7 = document.getElementById("bt-q7");
							</script>
							<?php
							if(isset($resposta7)){
								if($resposta7 == $corretaQ7){
									?>
									<script>
										atual7 = true;
										bt_q7.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao7'])){
									?>
									<script>
										atual7 = true;
										bt_q7.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 8 -->
				<div class="whole-question" id="8">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id226.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ8 = mysqli_fetch_assoc($opcoes8)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ8['id_alternativa'] == 694) {
										$alternativa1q8 = $row_alternativaQ8['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ8['id_alternativa'] == 695) {
										$alternativa2q8 = $row_alternativaQ8['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ8['veracidade'] == 1) {
										$corretaQ8 = $row_alternativaQ8['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao8" id="alternativa1q8" value="<?php echo $alternativa1q8 ?>">
							<label for="alternativa1q8" id="alternativa1q8"><?php echo $alternativa1q8 ?></label>
							<br>
							<input type="radio" name="questao8" id="alternativa2q8" value="<?php echo $alternativa2q8 ?>">
							<label for="alternativa2q8" id="alternativa2q8"><?php echo $alternativa2q8 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion7()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-fis" id="bt-q8" onclick="here8()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion9()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha8 = filter_input(INPUT_POST, 'questao8');
							if(isset($escolha8)){
								if($escolha8 == $corretaQ8){
									echo '<style type/css>
									#alternativa1q8{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa1q8{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha8) {
										case $alternativa1q8:
											echo '<style type/css>
												#alternativa1q8{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q8:
											echo '<style type/css>
												#alternativa2q8{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual8 = false;
								var bt_q8 = document.getElementById("bt-q8");
							</script>
							<?php
							if(isset($escolha8)){
								if($escolha8 == $corretaQ8){
									?>
									<script>
										atual8 = true;
										bt_q8.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual8 = true;
										bt_q8.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 9 -->
				<div class="whole-question" id="9">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ9 = mysqli_fetch_assoc($opcoes9)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ9['id_alternativa'] == 696) {
										$alternativa1q9 = $row_alternativaQ9['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ9['id_alternativa'] == 697) {
										$alternativa2q9 = $row_alternativaQ9['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ9['veracidade'] == 1) {
										$corretaQ9 = $row_alternativaQ9['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao9" id="alternativa1q9" value="<?php echo $alternativa1q9 ?>">
							<label for="alternativa1q9" id="alternativa1q9"><?php echo $alternativa1q9 ?></label>
							<br>
							<input type="radio" name="questao9" id="alternativa2q9" value="<?php echo $alternativa2q9 ?>">
							<label for="alternativa2q9" id="alternativa2q9"><?php echo $alternativa2q9 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion8()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q9" onclick="here9()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion10()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha9 = filter_input(INPUT_POST, 'questao9');
							if(isset($escolha9)){
								if($escolha9 == $corretaQ9){
									echo '<style type/css>
									#alternativa1q9{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa1q9{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha9) {
										case $alternativa1q9:
											echo '<style type/css>
												#alternativa1q9{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q9:
											echo '<style type/css>
												#alternativa2q9{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual9 = false;
								var bt_q9 = document.getElementById("bt-q9");
							</script>
							<?php
							if(isset($escolha9)){
								if($escolha9 == $corretaQ9){
									?>
									<script>
										atual9 = true;
										bt_q9.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual9 = true;
										bt_q9.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 10 -->
				<div class="whole-question" id="10">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ10 = mysqli_fetch_assoc($opcoes10)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ10['id_alternativa'] == 698) {
										$alternativa1q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['id_alternativa'] == 699) {
										$alternativa2q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['id_alternativa'] == 700) {
										$alternativa3q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['id_alternativa'] == 701) {
										$alternativa4q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['id_alternativa'] == 702) {
										$alternativa5q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['veracidade'] == 1) {
										$corretaQ10 = $row_alternativaQ10['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao10" id="alternativa1q10" value="<?php echo $alternativa1q10 ?>">
							<label for="alternativa1q10" id="alternativa1q10"><?php echo $alternativa1q10 ?></label>
							<br>
							<input type="radio" name="questao10" id="alternativa2q10" value="<?php echo $alternativa2q10 ?>">
							<label for="alternativa2q10" id="alternativa2q10"><?php echo $alternativa2q10 ?></label>
							<br>
							<input type="radio" name="questao10" id="alternativa3q10" value="<?php echo $alternativa3q10 ?>">
							<label for="alternativa3q10" id="alternativa3q10"><?php echo $alternativa3q10 ?></label>
							<br>
							<input type="radio" name="questao10" id="alternativa4q10" value="<?php echo $alternativa4q10 ?>">
							<label for="alternativa4q10" id="alternativa4q10"><?php echo $alternativa4q10 ?></label>
							<br>
							<input type="radio" name="questao10" id="alternativa5q10" value="<?php echo $alternativa5q10 ?>">
							<label for="alternativa5q10" id="alternativa5q10"><?php echo $alternativa5q10 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion9()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q10" onclick="here10()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion11()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha10 = filter_input(INPUT_POST, 'questao10');
							if(isset($escolha10)){
								if($escolha10 == $corretaQ10){
									echo '<style type/css>
									#alternativa3q10{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa3q10{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha10) {
										case $alternativa1q10:
											echo '<style type/css>
												#alternativa1q10{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q10:
											echo '<style type/css>
												#alternativa2q10{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q10:
											echo '<style type/css>
												#alternativa3q10{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q10:
											echo '<style type/css>
												#alternativa4q10{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q10:
											echo '<style type/css>
												#alternativa5q10{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual10 = false;
								var bt_q10 = document.getElementById("bt-q10");
							</script>
							<?php
							if(isset($escolha10)){
								if($escolha10 == $corretaQ10){
									?>
									<script>
										atual10 = true;
										bt_q10.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual10 = true;
										bt_q10.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 11 -->
				<div class="whole-question" id="11">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ11 = mysqli_fetch_assoc($opcoes11)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ11['id_alternativa'] == 703) {
										$alternativa1q11 = $row_alternativaQ11['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ11['id_alternativa'] == 704) {
										$alternativa2q11 = $row_alternativaQ11['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ11['veracidade'] == 1) {
										$corretaQ11 = $row_alternativaQ11['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao11" id="alternativa1q11" value="<?php echo $alternativa1q11 ?>">
							<label for="alternativa1q11" id="alternativa1q11"><?php echo $alternativa1q11 ?></label>
							<br>
							<input type="radio" name="questao11" id="alternativa2q11" value="<?php echo $alternativa2q11 ?>">
							<label for="alternativa2q11" id="alternativa2q11"><?php echo $alternativa2q11 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion10()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q11" onclick="here11()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion12()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha11 = filter_input(INPUT_POST, 'questao11');
							if(isset($escolha11)){
								if($escolha11 == $corretaQ11){
									echo '<style type/css>
									#alternativa2q11{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa2q11{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha11) {
										case $alternativa1q11:
											echo '<style type/css>
												#alternativa1q11{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q11:
											echo '<style type/css>
												#alternativa2q11{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual11 = false;
								var bt_q11 = document.getElementById("bt-q11");
							</script>
							<?php
							if(isset($escolha11)){
								if($escolha11 == $corretaQ11){
									?>
									<script>
										atual11 = true;
										bt_q11.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual11 = true;
										bt_q11.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 12 -->
				<div class="whole-question" id="12">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id251.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ12 = mysqli_fetch_assoc($opcoes12)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ12['id_alternativa'] == 782) {
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion11()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q12" onclick="here12()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion13()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
								$envio12 = filter_input(INPUT_POST, 'questao12');
								$resposta12 = (string) trim($envio12);

								if(isset($resposta12)){
									if($resposta12 === $corretaQ12){
									echo '<style type/css>
										#alternativa1q12{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									elseif(isset($_POST['questao12'])){

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
													#alternativa1q12{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
									}
								}
							?>
								<script >
									var atual12 = false;
									var bt_q12 = document.getElementById("bt-q12");
								</script>
								<?php
								if(isset($resposta12)){
									if($resposta12 == $corretaQ12){
										?>
										<script>
											atual12 = true;
											bt_q12.style.display = "none";
										</script>
										<?php
									}
									elseif(isset($_POST['questao12'])){
										?>
										<script>
											atual12 = true;
											bt_q12.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- questão 13 -->
				<div class="whole-question" id="13">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ13 = mysqli_fetch_assoc($opcoes13)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ13['id_alternativa'] == 783) {
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion12()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q13" onclick="here13()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion14()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
								$envio13 = filter_input(INPUT_POST, 'questao13');
								$resposta13 = (string) trim($envio13);

								if(isset($resposta13)){
									if($resposta13 === $corretaQ13){
									echo '<style type/css>
										#alternativa1q13{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									elseif(isset($_POST['questao13'])){

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
													#alternativa1q13{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
									}
								}
							?>
								<script >
									var atual13 = false;
									var bt_q13 = document.getElementById("bt-q13");
								</script>
								<?php
								if(isset($resposta13)){
									if($resposta13 == $corretaQ13){
										?>
										<script>
											atual13 = true;
											bt_q13.style.display = "none";
										</script>
										<?php
									}
									elseif(isset($_POST['questao13'])){
										?>
										<script>
											atual13 = true;
											bt_q13.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- questão 14 -->
				<div class="whole-question" id="14">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id253.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ14 = mysqli_fetch_assoc($opcoes14)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ14['id_alternativa'] == 784) {
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion13()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q14" onclick="here14()">Confirmar resposta</button>
								</div>
							</div>
						</form>
						<?php
								$envio14 = filter_input(INPUT_POST, 'questao14');
								$resposta14 = (string) trim($envio14);

								if(isset($resposta14)){
									if($resposta14 === $corretaQ14){
									echo '<style type/css>
										#alternativa1q14{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									elseif(isset($_POST['questao14'])){

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
													#alternativa1q14{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
										
									}
								}
							?>
								<script >
									var atual14 = false;
									var bt_q14 = document.getElementById("bt-q14");
								</script>
								<?php
								if(isset($resposta14)){
									if($resposta14 == $corretaQ14){
										?>
										<script>
											atual14 = true;
											bt_q11.style.display = "none";
										</script>
										<?php
									}
									elseif(isset($_POST['questao14'])){
										?>
										<script>
											atual14 = true;
											bt_q14.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- fim do questionário -->
				<?php
					while ($row_pontuacao_correta = mysqli_fetch_assoc($pontuacao_correta)) {
						// echo "corretas: ";
						$corretas = $row_pontuacao_correta['qtd_questao_correta'];
						// echo "<br>";
					}
					while ($row_pontuacao_errada = mysqli_fetch_assoc($pontuacao_errada)) {
						// echo "erradas: ";
						$erradas = $row_pontuacao_errada['qtd_questao_errada'];
					}
					$total = $corretas + $erradas;
					if ($total > 0) {
						$porcentagem = number_format($corretas / $total * 100, 2, ',');
					}
					else{
						$porcentagem = 0;
					}
				?>

				<!-- resultado -->
				<div class="result active">
					<h3><b>Resultado do teste</b></h3>
					<table>
						<tr>
							<td>Quantidade de questões</td>
							<td><?php echo $total ?></td>
						</tr>
						<tr>
							<td>Quantidade de acertos</td>
							<td><?php echo $corretas ?></td>
						</tr>
						<tr>
							<td>Quantidade de erros</td>
							<td><?php echo $erradas ?></td>
						</tr>
						<tr>
							<td>Porcentagem de aproveitamento</td>
							<td><?php echo $porcentagem ?></td>
						</tr>
					</table>
				</div>
				<!-- fim do resultado -->
			</div>
			<div class="footer footer-size footer-questionario">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div>
		</div>

		<script src="../../../../js/pesquisa.js"></script>
		<script src="../../../../js/paginacao.js"></script>

	</body>
=======
<?php
session_start();
include_once("../../../../conexao.php");
?>
<?php
	$index_questao = 0;
	$index_alternativa = 0;

	$get_pontuacao_correta = "SELECT * FROM desempenho WHERE desempenho.id_usuario = 1 AND desempenho.id_questionario = 1";
	$pontuacao_correta = mysqli_query($conexao, $get_pontuacao_correta);

	$get_pontuacao_errada = "SELECT * FROM desempenho WHERE desempenho.id_usuario = 1 AND desempenho.id_questionario = 1";
	$pontuacao_errada = mysqli_query($conexao, $get_pontuacao_errada);

	// questão 1
	$pergunta1 = "SELECT * FROM questao WHERE questao.id_questao = 51";
	$id_questao1 = mysqli_query($conexao, $pergunta1);
	$questao1 = mysqli_query($conexao, $pergunta1);
	
	$get_alternativas1 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 51";
	$opcoes1 = mysqli_query($conexao, $get_alternativas1);
	// questão 2
	$pergunta2 = "SELECT * FROM questao WHERE questao.id_questao = 52";
	$id_questao2 = mysqli_query($conexao, $pergunta2);
	$questao2 = mysqli_query($conexao, $pergunta2);
	
	$get_alternativas2 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 52";
	$opcoes2 = mysqli_query($conexao, $get_alternativas2);
	// questão 3
	$pergunta3 = "SELECT * FROM questao WHERE questao.id_questao = 53";
	$id_questao3 = mysqli_query($conexao, $pergunta3);
	$questao3 = mysqli_query($conexao, $pergunta3);
	
	$get_alternativas3 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 53";
	$opcoes3 = mysqli_query($conexao, $get_alternativas3);
	// questão 4
	$pergunta4 = "SELECT * FROM questao WHERE questao.id_questao = 54";
	$id_questao4 = mysqli_query($conexao, $pergunta4);
	$questao4 = mysqli_query($conexao, $pergunta4);
	
	$get_alternativas4 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 54";
	$opcoes4 = mysqli_query($conexao, $get_alternativas4);
	// questão 5
	$pergunta5 = "SELECT * FROM questao WHERE questao.id_questao = 151";
	$id_questao5 = mysqli_query($conexao, $pergunta5);
	$questao5 = mysqli_query($conexao, $pergunta5);
	
	$get_alternativas5 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 151";
	$opcoes5 = mysqli_query($conexao, $get_alternativas5);
	// questão 6
	$pergunta6 = "SELECT * FROM questao WHERE questao.id_questao = 152";
	$id_questao6 = mysqli_query($conexao, $pergunta6);
	$questao6 = mysqli_query($conexao, $pergunta6);
	
	$get_alternativas6 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 152";
	$opcoes6 = mysqli_query($conexao, $get_alternativas6);
	// questão 7
	$pergunta7 = "SELECT * FROM questao WHERE questao.id_questao = 153";
	$id_questao7 = mysqli_query($conexao, $pergunta7);
	$questao7 = mysqli_query($conexao, $pergunta7);
	
	$get_alternativas7 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 153";
	$opcoes7 = mysqli_query($conexao, $get_alternativas7);
	// questão 8
	$pergunta8 = "SELECT * FROM questao WHERE questao.id_questao = 226";
	$id_questao8 = mysqli_query($conexao, $pergunta8);
	$questao8 = mysqli_query($conexao, $pergunta8);
	
	$get_alternativas8 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 226";
	$opcoes8 = mysqli_query($conexao, $get_alternativas8);
	// questão 9
	$pergunta9 = "SELECT * FROM questao WHERE questao.id_questao = 227";
	$id_questao9 = mysqli_query($conexao, $pergunta9);
	$questao9 = mysqli_query($conexao, $pergunta9);
	
	$get_alternativas9 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 227";
	$opcoes9 = mysqli_query($conexao, $get_alternativas9);
	// questão 10
	$pergunta10 = "SELECT * FROM questao WHERE questao.id_questao = 228";
	$id_questao10 = mysqli_query($conexao, $pergunta10);
	$questao10 = mysqli_query($conexao, $pergunta10);
	
	$get_alternativas10 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 228";
	$opcoes10 = mysqli_query($conexao, $get_alternativas10);
	// questão 11
	$pergunta11 = "SELECT * FROM questao WHERE questao.id_questao = 229";
	$id_questao11 = mysqli_query($conexao, $pergunta11);
	$questao11 = mysqli_query($conexao, $pergunta11);
	
	$get_alternativas11 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 229";
	$opcoes11 = mysqli_query($conexao, $get_alternativas11);
	// questão 12
	$pergunta12 = "SELECT * FROM questao WHERE questao.id_questao = 251";
	$id_questao12 = mysqli_query($conexao, $pergunta12);
	$questao12 = mysqli_query($conexao, $pergunta12);
	
	$get_alternativas12 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 251";
	$opcoes12 = mysqli_query($conexao, $get_alternativas12);
	// questão 13
	$pergunta13 = "SELECT * FROM questao WHERE questao.id_questao = 252";
	$id_questao13 = mysqli_query($conexao, $pergunta13);
	$questao13 = mysqli_query($conexao, $pergunta13);
	
	$get_alternativas13 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 252";
	$opcoes13 = mysqli_query($conexao, $get_alternativas13);
	// questão 14
	$pergunta14 = "SELECT * FROM questao WHERE questao.id_questao = 253";
	$id_questao14 = mysqli_query($conexao, $pergunta14);
	$questao14 = mysqli_query($conexao, $pergunta14);
	
	$get_alternativas14 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 253";
	$opcoes14 = mysqli_query($conexao, $get_alternativas14);
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
		<div class="divisao-menu divisao-menu-fisica divisao-menu-materia">
			<img src="../../../../img/logo interno rosa.jpeg">
			<div class="menu-interno atual-interno">
				<nav>
					<ul>
						<li><a href="../../../inicio.php">Início</a></li>
						<li><a href="">Disciplinas &dtri;</a>
							<ul>
								<li><a href="../../biologia.html">Biologia</a></li>
								<li class="pagina-atual-rosa"><a href="../../fisica.html">Física</a></li>
								<li><a href="../../quimica.html">Química</a></li>
							</ul>
						</li>
						<li><a href="../../../desempenho.html">Desempenho</a></li>
						<li><a href="../../../ajuda.html">Ajuda?</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="divisao-superior divisao-superior-fisica">
			<<img src="../../../../img/usuario.png">
			<div>
				<p><a onclick="opcaoPerfil()">Usuário</a></p>
				<img src="../../../../img/escrita rosa.jpeg" id="escrita">
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
		<div class="escolha conteudo conteudo-fis">
			<h2>QUESTIONÁRIO</h2>
			<h3><b>Introdução ao estudo da física</b></h3>		
			<div class="quiz-box custom-box">
				<!-- início do questionário -->
				<!-- questão 1 -->
				<div class="whole-question active" id="1">
					<div class="answers-indicator">
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativa = mysqli_fetch_assoc($opcoes1)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativa['id_alternativa'] == 232) {
										$alternativa1 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['id_alternativa'] == 233) {
										$alternativa2 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['id_alternativa'] == 234) {
										$alternativa3 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['id_alternativa'] == 235) {
										$alternativa4 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['id_alternativa'] == 236) {
										$alternativa5 = $row_alternativa['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativa['veracidade'] == 1) {
										$correta = $row_alternativa['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao1" id="alternativa1" value="<?php echo $alternativa1 ?>">
							<label for="alternativa1" id="alternativa1"><?php echo $alternativa1 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa2" value="<?php echo $alternativa2 ?>">
							<label for="alternativa2" id="alternativa2"><?php echo $alternativa2 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa3" value="<?php echo $alternativa3 ?>">
							<label for="alternativa3" id="alternativa3"><?php echo $alternativa3 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa4" value="<?php echo $alternativa4 ?>">
							<label for="alternativa4" id="alternativa4"><?php echo $alternativa4 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa5" value="<?php echo $alternativa5 ?>">
							<label for="alternativa5" id="alternativa5"><?php echo $alternativa5 ?></label>
							<br>
							<div class="btn-box">
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q1">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion2()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha = filter_input(INPUT_POST, 'questao1');
							if(isset($escolha)){
								if($escolha == $correta){
									echo '<style type/css>
									#alternativa5{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 
									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa5{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha) {
										case $alternativa1:
											echo '<style type/css>
											#alternativa1{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
												break;
										case $alternativa2:
											echo '<style type/css>
												#alternativa2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
												break;
										case $alternativa3:
											echo '<style type/css>
												#alternativa3{
													border: 2px solid red;
														background-color:  #ff6347;
													}
												</style>';
											break;
										case $alternativa4:
											echo '<style type/css>
												#alternativa4{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5:
												echo '<style type/css>
												#alternativa5{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
							?>
						<script >
							var bt_q1 = document.getElementById("bt-q1");
						</script>
						<?php
							if(isset($escolha)){
						?>
						<script>
							bt_q1.style.display = "none";
						</script>
						<?php
							}
						?>
					</div>
				</div>
				<!-- questão 2 -->
				<div class="whole-question" id="2">
					<div class="answers-indicator">
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ2 = mysqli_fetch_assoc($opcoes2)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ2['id_alternativa'] == 237) {
										$alternativa1q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 238) {
										$alternativa2q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 239) {
										$alternativa3q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 240) {
										$alternativa4q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 241) {
										$alternativa5q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['veracidade'] == 1) {
										$corretaQ2 = $row_alternativaQ2['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao2" id="alternativa1q2" value="<?php echo $alternativa1q2 ?>">
							<label for="alternativa1q2" id="alternativa1q2"><?php echo $alternativa1q2 ?></label>
							<br>
							<input type="radio" name="questao2" id="alternativa2q2" value="<?php echo $alternativa2q2 ?>">
							<label for="alternativa2q2" id="alternativa2q2"><?php echo $alternativa2q2 ?></label>
							<br>
							<input type="radio" name="questao2" id="alternativa3q2" value="<?php echo $alternativa3q2 ?>">
							<label for="alternativa3q2" id="alternativa3q2"><?php echo $alternativa3q2 ?></label>
							<br>
							<input type="radio" name="questao2" id="alternativa4q2" value="<?php echo $alternativa4q2 ?>">
							<label for="alternativa4q2" id="alternativa4q2"><?php echo $alternativa4q2 ?></label>
							<br>
							<input type="radio" name="questao2" id="alternativa5q2" value="<?php echo $alternativa5q2 ?>">
							<label for="alternativa5q2" id="alternativa5q2"><?php echo $alternativa5q2 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion1()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q2" onclick="here2()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion3()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha2 = filter_input(INPUT_POST, 'questao2');
							if(isset($escolha2)){
								if($escolha2 == $corretaQ2){
									echo '<style type/css>
									#alternativa1q2{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1"); 

									echo '<style type/css>
									#alternativa1q2{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha2) {
										case $alternativa1q2:
											echo '<style type/css>
												#alternativa1q2{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q2:
											echo '<style type/css>
												#alternativa2q2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q2:
											echo '<style type/css>
												#alternativa3q2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q2:
											echo '<style type/css>
												#alternativa4q2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q2:
											echo '<style type/css>
												#alternativa5q2{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual2 = false;
								var bt_q2 = document.getElementById("bt-q2");
							</script>
							<?php
							if(isset($escolha2)){
								if($escolha2 == $corretaQ2){
									?>
									<script>
										atual2 = true;
										bt_q2.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual2 = true;
										bt_q2.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 3 -->
				<div class="whole-question" id="3">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id53.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ3 = mysqli_fetch_assoc($opcoes3)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ3['id_alternativa'] == 242) {
										$alternativa1q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 243) {
										$alternativa2q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 244) {
										$alternativa3q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 245) {
										$alternativa4q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 246) {
										$alternativa5q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['veracidade'] == 1) {
										$corretaQ3 = $row_alternativaQ3['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao3" id="alternativa1q3" value="<?php echo $alternativa1q3 ?>">
							<label for="alternativa1q3" id="alternativa1q3"><?php echo $alternativa1q3 ?></label>
							<br>
							<input type="radio" name="questao3" id="alternativa2q3" value="<?php echo $alternativa2q3 ?>">
							<label for="alternativa2q3" id="alternativa2q3"><?php echo $alternativa2q3 ?></label>
							<br>
							<input type="radio" name="questao3" id="alternativa3q3" value="<?php echo $alternativa3q3 ?>">
							<label for="alternativa3q3" id="alternativa3q3"><?php echo $alternativa3q3 ?></label>
							<br>
							<input type="radio" name="questao3" id="alternativa4q3" value="<?php echo $alternativa4q3 ?>">
							<label for="alternativa4q3" id="alternativa4q3"><?php echo $alternativa4q3 ?></label>
							<br>
							<input type="radio" name="questao3" id="alternativa5q3" value="<?php echo $alternativa5q3 ?>">
							<label for="alternativa5q3" id="alternativa5q3"><?php echo $alternativa5q3 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion2()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q3" onclick="here3()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion4()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
								$escolha3 = filter_input(INPUT_POST, 'questao3');
								if(isset($escolha3)){
									if($escolha3 == $corretaQ3){
										echo '<style type/css>
										#alternativa1q3{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									else{ 

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
										#alternativa1q3{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';
										switch ($escolha3) {
											case $alternativa1q3:
												echo '<style type/css>
													#alternativa1q3{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
												break;
											case $alternativa2q3:
												echo '<style type/css>
													#alternativa2q3{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa3q3:
												echo '<style type/css>
													#alternativa3q3{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa4q3:
												echo '<style type/css>
													#alternativa4q3{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa5q3:
												echo '<style type/css>
													#alternativa5q3{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
										}
									}
								}
							?>
								<script >
									var atual3 = false;
									var bt_q3 = document.getElementById("bt-q3");
								</script>
								<?php
								if(isset($escolha3)){
									if($escolha3 == $corretaQ3){
										?>
										<script>
											atual3 = true;
											bt_q3.style.display = "none";
										</script>
										<?php
									}
									else{
										?>
										<script>
											atual3 = true;
											bt_q3.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- questão 4 -->
				<div class="whole-question" id="4">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ4 = mysqli_fetch_assoc($opcoes4)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ4['id_alternativa'] == 247) {
										$alternativa1q4 = $row_alternativaQ4['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ4['id_alternativa'] == 248) {
										$alternativa2q4 = $row_alternativaQ4['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ4['id_alternativa'] == 249) {
										$alternativa3q4 = $row_alternativaQ4['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ4['id_alternativa'] == 250) {
										$alternativa4q4 = $row_alternativaQ4['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ4['veracidade'] == 1) {
										$corretaQ4 = $row_alternativaQ4['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao4" id="alternativa1q4" value="<?php echo $alternativa1q4 ?>">
							<label for="alternativa1q4" id="alternativa1q4"><?php echo $alternativa1q4 ?></label>
							<br>
							<input type="radio" name="questao4" id="alternativa2q4" value="<?php echo $alternativa2q4 ?>">
							<label for="alternativa2q4" id="alternativa2q4"><?php echo $alternativa2q4 ?></label>
							<br>
							<input type="radio" name="questao4" id="alternativa3q4" value="<?php echo $alternativa3q4 ?>">
							<label for="alternativa3q4" id="alternativa3q4"><?php echo $alternativa3q4 ?></label>
							<br>
							<input type="radio" name="questao4" id="alternativa4q4" value="<?php echo $alternativa4q4 ?>">
							<label for="alternativa4q4" id="alternativa4q4"><?php echo $alternativa4q4 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion3()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q4" onclick="here4()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion5()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
								$escolha4 = filter_input(INPUT_POST, 'questao4');
								if(isset($escolha4)){
									if($escolha4 == $corretaQ4){
										echo '<style type/css>
										#alternativa2q4{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									else{ 

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
										#alternativa2q4{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';
										switch ($escolha4) {
											case $alternativa1q4:
												echo '<style type/css>
													#alternativa1q4{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
												break;
											case $alternativa2q4:
												echo '<style type/css>
													#alternativa2q4{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa3q4:
												echo '<style type/css>
													#alternativa3q4{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
											case $alternativa4q4:
												echo '<style type/css>
													#alternativa4q4{
														border: 2px solid red;
														background-color:  #ff6347;
													}
													</style>';
												break;
										}
									}
								}
							?>
								<script >
									var atual4 = false;
									var bt_q4 = document.getElementById("bt-q4");
								</script>
								<?php
								if(isset($escolha4)){
									if($escolha4 == $corretaQ4){
										?>
										<script>
											atual4 = true;
											bt_q4.style.display = "none";
										</script>
										<?php
									}
									else{
										?>
										<script>
											atual4 = true;
											bt_q4.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- questão 5 -->
				<div class="whole-question" id="5">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ5 = mysqli_fetch_assoc($opcoes5)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ5['id_alternativa'] == 558) {
										$alternativa1q5 = $row_alternativaQ5['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ5['veracidade'] == 1) {
										$corretaQ5 = (string) trim($row_alternativaQ5['texto']);
									}
								
								}
							?>
							<label for="alternativa1q5">Insira a resposta:</label>
							<input type="text" name="questao5" id="alternativa1q5">
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion4()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-fis" id="bt-q5" onclick="here5()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion6()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio5 = filter_input(INPUT_POST, 'questao5');
							$resposta5 = (string) trim($envio5);
								if(isset($resposta5)){
								if($resposta5 === $corretaQ5){
								echo '<style type/css>
									#alternativa1q5{
											border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								elseif(isset($_POST['questao5'])){

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
												#alternativa1q5{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
								}
							}
						?>
							<script >
								var atual5 = false;
								var bt_q5 = document.getElementById("bt-q5");
							</script>
							<?php
							if(isset($resposta5)){
								if($resposta5 == $corretaQ5){
									?>
									<script>
										atual5 = true;
										bt_q5.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao5'])){
									?>
									<script>
										atual5 = true;
										bt_q5.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 6 -->
				<div class="whole-question" id="6">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ6 = mysqli_fetch_assoc($opcoes6)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ6['id_alternativa'] == 559) {
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion5()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-fis" id="bt-q6" onclick="here6()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion7()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio6 = filter_input(INPUT_POST, 'questao6');
							$resposta6= (string) trim($envio6);
							if(isset($resposta6)){
								if($resposta6 === $corretaQ6){
								echo '<style type/css>
									#alternativa1q6{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								elseif(isset($_POST['questao6'])){

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
												#alternativa1q6{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
								}
							}
						?>
							<script >
								var atual6 = false;
								var bt_q6 = document.getElementById("bt-q6");
							</script>
							<?php
							if(isset($resposta6)){
								if($resposta6 == $corretaQ6){
									?>
									<script>
										atual6 = true;
										bt_q6.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao6'])){
									?>
									<script>
										atual6 = true;
										bt_q6.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 7 -->
				<div class="whole-question" id="7">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id153.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ7 = mysqli_fetch_assoc($opcoes7)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ7['id_alternativa'] == 560) {
										$alternativa1q7 = $row_alternativaQ7['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ7['veracidade'] == 1) {
										$corretaQ7 = (string) trim($row_alternativaQ7['texto']);
									}
								
								}
							?>
							<label for="alternativa1q7">Insira a resposta:</label>
							<input type="text" name="questao7" id="alternativa1q7">
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion6()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-fis" id="bt-q7" onclick="here7()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion8()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio7 = filter_input(INPUT_POST, 'questao7');
							$resposta7 = (string) trim($envio7);
							if(isset($resposta7)){
								if($resposta7 === $corretaQ7){
									echo '<style type/css>
										#alternativa1q7{
										border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
								elseif(isset($_POST['questao7'])){

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
										#alternativa1q7{
											border: 2px solid red;
											background-color: #ff6347;
										}
										</style>';
								}
							}
						?>
							<script >
								var atual7 = false;
								var bt_q7 = document.getElementById("bt-q7");
							</script>
							<?php
							if(isset($resposta7)){
								if($resposta7 == $corretaQ7){
									?>
									<script>
										atual7 = true;
										bt_q7.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao7'])){
									?>
									<script>
										atual7 = true;
										bt_q7.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 8 -->
				<div class="whole-question" id="8">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id226.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ8 = mysqli_fetch_assoc($opcoes8)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ8['id_alternativa'] == 694) {
										$alternativa1q8 = $row_alternativaQ8['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ8['id_alternativa'] == 695) {
										$alternativa2q8 = $row_alternativaQ8['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ8['veracidade'] == 1) {
										$corretaQ8 = $row_alternativaQ8['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao8" id="alternativa1q8" value="<?php echo $alternativa1q8 ?>">
							<label for="alternativa1q8" id="alternativa1q8"><?php echo $alternativa1q8 ?></label>
							<br>
							<input type="radio" name="questao8" id="alternativa2q8" value="<?php echo $alternativa2q8 ?>">
							<label for="alternativa2q8" id="alternativa2q8"><?php echo $alternativa2q8 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion7()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-fis" id="bt-q8" onclick="here8()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion9()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha8 = filter_input(INPUT_POST, 'questao8');
							if(isset($escolha8)){
								if($escolha8 == $corretaQ8){
									echo '<style type/css>
									#alternativa1q8{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa1q8{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha8) {
										case $alternativa1q8:
											echo '<style type/css>
												#alternativa1q8{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q8:
											echo '<style type/css>
												#alternativa2q8{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual8 = false;
								var bt_q8 = document.getElementById("bt-q8");
							</script>
							<?php
							if(isset($escolha8)){
								if($escolha8 == $corretaQ8){
									?>
									<script>
										atual8 = true;
										bt_q8.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual8 = true;
										bt_q8.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 9 -->
				<div class="whole-question" id="9">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ9 = mysqli_fetch_assoc($opcoes9)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ9['id_alternativa'] == 696) {
										$alternativa1q9 = $row_alternativaQ9['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ9['id_alternativa'] == 697) {
										$alternativa2q9 = $row_alternativaQ9['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ9['veracidade'] == 1) {
										$corretaQ9 = $row_alternativaQ9['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao9" id="alternativa1q9" value="<?php echo $alternativa1q9 ?>">
							<label for="alternativa1q9" id="alternativa1q9"><?php echo $alternativa1q9 ?></label>
							<br>
							<input type="radio" name="questao9" id="alternativa2q9" value="<?php echo $alternativa2q9 ?>">
							<label for="alternativa2q9" id="alternativa2q9"><?php echo $alternativa2q9 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion8()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q9" onclick="here9()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion10()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha9 = filter_input(INPUT_POST, 'questao9');
							if(isset($escolha9)){
								if($escolha9 == $corretaQ9){
									echo '<style type/css>
									#alternativa1q9{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa1q9{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha9) {
										case $alternativa1q9:
											echo '<style type/css>
												#alternativa1q9{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q9:
											echo '<style type/css>
												#alternativa2q9{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual9 = false;
								var bt_q9 = document.getElementById("bt-q9");
							</script>
							<?php
							if(isset($escolha9)){
								if($escolha9 == $corretaQ9){
									?>
									<script>
										atual9 = true;
										bt_q9.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual9 = true;
										bt_q9.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 10 -->
				<div class="whole-question" id="10">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ10 = mysqli_fetch_assoc($opcoes10)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ10['id_alternativa'] == 698) {
										$alternativa1q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['id_alternativa'] == 699) {
										$alternativa2q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['id_alternativa'] == 700) {
										$alternativa3q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['id_alternativa'] == 701) {
										$alternativa4q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['id_alternativa'] == 702) {
										$alternativa5q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['veracidade'] == 1) {
										$corretaQ10 = $row_alternativaQ10['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao10" id="alternativa1q10" value="<?php echo $alternativa1q10 ?>">
							<label for="alternativa1q10" id="alternativa1q10"><?php echo $alternativa1q10 ?></label>
							<br>
							<input type="radio" name="questao10" id="alternativa2q10" value="<?php echo $alternativa2q10 ?>">
							<label for="alternativa2q10" id="alternativa2q10"><?php echo $alternativa2q10 ?></label>
							<br>
							<input type="radio" name="questao10" id="alternativa3q10" value="<?php echo $alternativa3q10 ?>">
							<label for="alternativa3q10" id="alternativa3q10"><?php echo $alternativa3q10 ?></label>
							<br>
							<input type="radio" name="questao10" id="alternativa4q10" value="<?php echo $alternativa4q10 ?>">
							<label for="alternativa4q10" id="alternativa4q10"><?php echo $alternativa4q10 ?></label>
							<br>
							<input type="radio" name="questao10" id="alternativa5q10" value="<?php echo $alternativa5q10 ?>">
							<label for="alternativa5q10" id="alternativa5q10"><?php echo $alternativa5q10 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion9()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q10" onclick="here10()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion11()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha10 = filter_input(INPUT_POST, 'questao10');
							if(isset($escolha10)){
								if($escolha10 == $corretaQ10){
									echo '<style type/css>
									#alternativa3q10{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa3q10{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha10) {
										case $alternativa1q10:
											echo '<style type/css>
												#alternativa1q10{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q10:
											echo '<style type/css>
												#alternativa2q10{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q10:
											echo '<style type/css>
												#alternativa3q10{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q10:
											echo '<style type/css>
												#alternativa4q10{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q10:
											echo '<style type/css>
												#alternativa5q10{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual10 = false;
								var bt_q10 = document.getElementById("bt-q10");
							</script>
							<?php
							if(isset($escolha10)){
								if($escolha10 == $corretaQ10){
									?>
									<script>
										atual10 = true;
										bt_q10.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual10 = true;
										bt_q10.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 11 -->
				<div class="whole-question" id="11">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis">
						<form method="post">
							<?php
								while ($row_alternativaQ11 = mysqli_fetch_assoc($opcoes11)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ11['id_alternativa'] == 703) {
										$alternativa1q11 = $row_alternativaQ11['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ11['id_alternativa'] == 704) {
										$alternativa2q11 = $row_alternativaQ11['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ11['veracidade'] == 1) {
										$corretaQ11 = $row_alternativaQ11['texto'];
									}
								
								}
							?>
							<input type="radio" name="questao11" id="alternativa1q11" value="<?php echo $alternativa1q11 ?>">
							<label for="alternativa1q11" id="alternativa1q11"><?php echo $alternativa1q11 ?></label>
							<br>
							<input type="radio" name="questao11" id="alternativa2q11" value="<?php echo $alternativa2q11 ?>">
							<label for="alternativa2q11" id="alternativa2q11"><?php echo $alternativa2q11 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion10()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q11" onclick="here11()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion12()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha11 = filter_input(INPUT_POST, 'questao11');
							if(isset($escolha11)){
								if($escolha11 == $corretaQ11){
									echo '<style type/css>
									#alternativa2q11{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
								}
								else{ 

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

									echo '<style type/css>
									#alternativa2q11{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha11) {
										case $alternativa1q11:
											echo '<style type/css>
												#alternativa1q11{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q11:
											echo '<style type/css>
												#alternativa2q11{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
									}
								}
							}
						?>
							<script >
								var atual11 = false;
								var bt_q11 = document.getElementById("bt-q11");
							</script>
							<?php
							if(isset($escolha11)){
								if($escolha11 == $corretaQ11){
									?>
									<script>
										atual11 = true;
										bt_q11.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual11 = true;
										bt_q11.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 12 -->
				<div class="whole-question" id="12">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id251.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ12 = mysqli_fetch_assoc($opcoes12)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ12['id_alternativa'] == 782) {
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion11()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q12" onclick="here12()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion13()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
								$envio12 = filter_input(INPUT_POST, 'questao12');
								$resposta12 = (string) trim($envio12);

								if(isset($resposta12)){
									if($resposta12 === $corretaQ12){
									echo '<style type/css>
										#alternativa1q12{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									elseif(isset($_POST['questao12'])){

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
													#alternativa1q12{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
									}
								}
							?>
								<script >
									var atual12 = false;
									var bt_q12 = document.getElementById("bt-q12");
								</script>
								<?php
								if(isset($resposta12)){
									if($resposta12 == $corretaQ12){
										?>
										<script>
											atual12 = true;
											bt_q12.style.display = "none";
										</script>
										<?php
									}
									elseif(isset($_POST['questao12'])){
										?>
										<script>
											atual12 = true;
											bt_q12.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- questão 13 -->
				<div class="whole-question" id="13">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ13 = mysqli_fetch_assoc($opcoes13)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ13['id_alternativa'] == 783) {
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion12()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q13" onclick="here13()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-fis" onclick="toQuestion14()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
								$envio13 = filter_input(INPUT_POST, 'questao13');
								$resposta13 = (string) trim($envio13);

								if(isset($resposta13)){
									if($resposta13 === $corretaQ13){
									echo '<style type/css>
										#alternativa1q13{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									elseif(isset($_POST['questao13'])){

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
													#alternativa1q13{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
									}
								}
							?>
								<script >
									var atual13 = false;
									var bt_q13 = document.getElementById("bt-q13");
								</script>
								<?php
								if(isset($resposta13)){
									if($resposta13 == $corretaQ13){
										?>
										<script>
											atual13 = true;
											bt_q13.style.display = "none";
										</script>
										<?php
									}
									elseif(isset($_POST['questao13'])){
										?>
										<script>
											atual13 = true;
											bt_q13.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- questão 14 -->
				<div class="whole-question" id="14">
					<div class="answers-indicator">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
					</div>
					<div class="question-box">
						<div class="question-number-fis">
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
									echo "<br>";
									echo "<img id=margin src=../../../../img/img-id253.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-fis lacuna">
						<form method="post">
							<?php
								while ($row_alternativaQ14 = mysqli_fetch_assoc($opcoes14)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ14['id_alternativa'] == 784) {
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-fis" onclick="backQuestion13()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-fis" id="bt-q14" onclick="here14()">Confirmar resposta</button>
								</div>
							</div>
						</form>
						<?php
								$envio14 = filter_input(INPUT_POST, 'questao14');
								$resposta14 = (string) trim($envio14);

								if(isset($resposta14)){
									if($resposta14 === $corretaQ14){
									echo '<style type/css>
										#alternativa1q14{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = 1 AND id_questionario = 1");
									}
									elseif(isset($_POST['questao14'])){

										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = 1 AND id_questionario = 1");

										echo '<style type/css>
													#alternativa1q14{
														border: 2px solid red;
														background-color: #ff6347;
													}
													</style>';
										
									}
								}
							?>
								<script >
									var atual14 = false;
									var bt_q14 = document.getElementById("bt-q14");
								</script>
								<?php
								if(isset($resposta14)){
									if($resposta14 == $corretaQ14){
										?>
										<script>
											atual14 = true;
											bt_q11.style.display = "none";
										</script>
										<?php
									}
									elseif(isset($_POST['questao14'])){
										?>
										<script>
											atual14 = true;
											bt_q14.style.display = "none";
										</script>
										<?php
									}
								}
							?>
					</div>
				</div>
				<!-- fim do questionário -->
				<?php
					while ($row_pontuacao_correta = mysqli_fetch_assoc($pontuacao_correta)) {
						// echo "corretas: ";
						$corretas = $row_pontuacao_correta['qtd_questao_correta'];
						// echo "<br>";
					}
					while ($row_pontuacao_errada = mysqli_fetch_assoc($pontuacao_errada)) {
						// echo "erradas: ";
						$erradas = $row_pontuacao_errada['qtd_questao_errada'];
					}
					$total = $corretas + $erradas;
					if ($total > 0) {
						$porcentagem = number_format($corretas / $total * 100, 2, ',');
					}
					else{
						$porcentagem = 0;
					}
				?>

				<!-- resultado -->
				<div class="result active">
					<h3><b>Resultado do teste</b></h3>
					<table>
						<tr>
							<td>Quantidade de questões</td>
							<td><?php echo $total ?></td>
						</tr>
						<tr>
							<td>Quantidade de acertos</td>
							<td><?php echo $corretas ?></td>
						</tr>
						<tr>
							<td>Quantidade de erros</td>
							<td><?php echo $erradas ?></td>
						</tr>
						<tr>
							<td>Porcentagem de aproveitamento</td>
							<td><?php echo $porcentagem ?></td>
						</tr>
					</table>
				</div>
				<!-- fim do resultado -->
			</div>
			<div class="footer footer-size footer-questionario">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div>
		</div>

		<script src="../../../../js/pesquisa.js"></script>
		<script src="../../../../js/paginacao.js"></script>

	</body>
>>>>>>> 4571efdf84813d2f2c30fbba9d37aaa5bf85bf64
</html>