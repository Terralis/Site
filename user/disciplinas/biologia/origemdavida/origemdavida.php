<?php
// session_start();
include_once("../../../../conexao.php");
include('../../../verifica_login.php');
?>
<?php
	$index_questao = 0;
	$index_alternativa = 0;

	$seu_id = $_SESSION['id_usuario'];

	$get_pontuacao_correta = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 8";
	$pontuacao_correta = mysqli_query($conexao, $get_pontuacao_correta);

	$get_pontuacao_errada = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 8";
	$pontuacao_errada = mysqli_query($conexao, $get_pontuacao_errada);

	// questão 1
	$pergunta1 = "SELECT * FROM questao WHERE questao.id_questao = 1";
	$id_questao1 = mysqli_query($conexao, $pergunta1);
	$questao1 = mysqli_query($conexao, $pergunta1);
	
	$get_alternativas1 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 1";
	$opcoes1 = mysqli_query($conexao, $get_alternativas1);
	// questão 2
	$pergunta2 = "SELECT * FROM questao WHERE questao.id_questao = 2";
	$id_questao2 = mysqli_query($conexao, $pergunta2);
	$questao2 = mysqli_query($conexao, $pergunta2);
	
	$get_alternativas2 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 2";
	$opcoes2 = mysqli_query($conexao, $get_alternativas2);
	// questão 3
	$pergunta3 = "SELECT * FROM questao WHERE questao.id_questao = 3";
	$id_questao3 = mysqli_query($conexao, $pergunta3);
	$questao3 = mysqli_query($conexao, $pergunta3);
	
	$get_alternativas3 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 3";
	$opcoes3 = mysqli_query($conexao, $get_alternativas3);
	// questão 4
	$pergunta4 = "SELECT * FROM questao WHERE questao.id_questao = 26";
	$id_questao4 = mysqli_query($conexao, $pergunta4);
	$questao4 = mysqli_query($conexao, $pergunta4);
	
	$get_alternativas4 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 26";
	$opcoes4 = mysqli_query($conexao, $get_alternativas4);
	// questão 5
	$pergunta5 = "SELECT * FROM questao WHERE questao.id_questao = 27";
	$id_questao5 = mysqli_query($conexao, $pergunta5);
	$questao5 = mysqli_query($conexao, $pergunta5);
	
	$get_alternativas5 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 27";
	$opcoes5 = mysqli_query($conexao, $get_alternativas5);
	// questão 6
	$pergunta6 = "SELECT * FROM questao WHERE questao.id_questao = 28";
	$id_questao6 = mysqli_query($conexao, $pergunta6);
	$questao6 = mysqli_query($conexao, $pergunta6);
	
	$get_alternativas6 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 28";
	$opcoes6 = mysqli_query($conexao, $get_alternativas6);
	// questão 7
	$pergunta7 = "SELECT * FROM questao WHERE questao.id_questao = 101";
	$id_questao7 = mysqli_query($conexao, $pergunta7);
	$questao7 = mysqli_query($conexao, $pergunta7);
	
	$get_alternativas7 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 101";
	$opcoes7 = mysqli_query($conexao, $get_alternativas7);
	// questão 8
	$pergunta8 = "SELECT * FROM questao WHERE questao.id_questao = 102";
	$id_questao8 = mysqli_query($conexao, $pergunta8);
	$questao8 = mysqli_query($conexao, $pergunta8);
	
	$get_alternativas8 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 102";
	$opcoes8 = mysqli_query($conexao, $get_alternativas8);
	// questão 9
	$pergunta9 = "SELECT * FROM questao WHERE questao.id_questao = 103";
	$id_questao9 = mysqli_query($conexao, $pergunta9);
	$questao9 = mysqli_query($conexao, $pergunta9);
	
	$get_alternativas9 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 103";
	$opcoes9 = mysqli_query($conexao, $get_alternativas9);
	// questão 10
	$pergunta10 = "SELECT * FROM questao WHERE questao.id_questao = 126";
	$id_questao10 = mysqli_query($conexao, $pergunta10);
	$questao10 = mysqli_query($conexao, $pergunta10);
	
	$get_alternativas10 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 126";
	$opcoes10 = mysqli_query($conexao, $get_alternativas10);
	// questão 11
	$pergunta11 = "SELECT * FROM questao WHERE questao.id_questao = 127";
	$id_questao11 = mysqli_query($conexao, $pergunta11);
	$questao11 = mysqli_query($conexao, $pergunta11);
	
	$get_alternativas11 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 127";
	$opcoes11 = mysqli_query($conexao, $get_alternativas11);
	// questão 12
	$pergunta12 = "SELECT * FROM questao WHERE questao.id_questao = 128";
	$id_questao12 = mysqli_query($conexao, $pergunta12);
	$questao12 = mysqli_query($conexao, $pergunta12);
	
	$get_alternativas12 = "SELECT * FROM alternativa WHERE alternativa.id_questao = 128";
	$opcoes12 = mysqli_query($conexao, $get_alternativas12);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../../../css/normalize.css">
		<link rel="stylesheet" href="../../../../css/estilo.css">
		<script type="text/javascript" src="../../../../js/jquery.form.js"></script>
		<title>Terrális</title>
	</head>
	<body id="biologia">
		<div class="divisao-menu divisao-menu-biologia divisao-menu-materia">
			<img src="../../../../img/logo interno laranja.jpeg">
			<div class="menu-interno atual-interno">
				<nav>
					<ul>
						<li><a href="../../../inicio.php">Início</a></li>
						<li><a href="">Disciplinas &dtri;</a>
							<ul>
								<li class="pagina-atual-laranja"><a href="../../biologia.html">Biologia</a></li>
								<li><a href="../../fisica.html">Física</a></li>
								<li><a href="../../quimica.html">Química</a></li>
							</ul>
						</li>
						<li><a href="../../../desempenho.php">Desempenho</a></li>
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
				<li><a href="../../../perfil.php">Abrir perfil</a></li>
				<li><a href="../../../../logout.php">Sair</a></li>
			</ul>
		</div>
		<div class="pesquisa-materias" id="pesquisa-materias">
			<ul id="materias">
				<!-- biologia -->
				<li><a href="../biologia/origemdavida/escolha.html">Origem da vida</a></li>
				<li><a href="../biologia/teoriasevolutivas/escolha.html">Teorias evolutivas</a></li>
				<li><a href="../biologia/divisaocelular/escolha.html">Divisão celular</a></li>
				<li><a href="../biologia/teoriacelular/escolha.html">Teoria celular</a></li>
				<li><a href="../biologia/niveisdeorganizacaodosseresvivos/escolha.html">Níveis de organização dos seres vivos</a></li>
				<li><a href="../biologia/citologia/escolha.html">Citologia</a></li>
				<li><a href="../biologia/histologia/escolha.html">Histologia</a></li>
				<!-- física -->
				<li><a href="../../fisica/introducaoaoestudodafisica/escolha.html">Introdução ao estudo da física</a></li>
				<li><a href="../../fisica/gravitacao/escolha.html">Gravitação</a></li>
				<li><a href="../../fisica/estatica/escolha.html">Estática</a></li>
				<li><a href="../../fisica/conceitosdeforca/escolha.html">Conceitos de força</a></li>
				<li><a href="../../fisica/leisdenewton/escolha.html">Leis de Newton</a></li>
				<li><a href="../../fisica/atrito/escolha.html">Atrito</a></li>
				<li><a href="../../fisica/cinematica/escolha.html">Cinemática</a></li>
				<!-- química -->
				<li><a href="../../conceitosgerais/escolha.html">Conceitos gerais</a></li>
				<li><a href="../../materia/escolha.html">Matéria</a></li>
				<li><a href="../../atomo/escolha.html">Átomo</a></li>
				<li><a href="../../tabelaperiodica/escolha.html">Tabela periódica</a></li>
				<li><a href="../../ligacoesquimicas/escolha.html">Ligações químicas</a></li>
				<li><a href="../../quimicaorganica/escolha.html">Química orgânica</a></li>
				<li><a href="../../estequiometria/escolha.html">Estequiometria</a></li>
			</ul>
		</div>	
		<div class="escolha conteudo">
			<h2>QUESTIONÁRIO</h2>
			<h3><b>Origem da vida</b></h3>		
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
					</div>
					<div class="question-box active">
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
								}
							?>		
						</div>
					</div>
					<div class="option-container">
						<form method="post" id="parte1" name="formulario">
							<?php
								while ($row_alternativa = mysqli_fetch_assoc($opcoes1)) {
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
							<label for="alternativa1" id="alternativa1"><?php echo $alternativa1 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa2" value="<?php echo $alternativa2 ?>">
							<label for="alternativa2" id="alternativa2"><?php echo $alternativa2 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa3" value="<?php echo $alternativa3 ?>">
							<label for="alternativa3" id="alternativa3"><?php echo $alternativa3 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa4" value="<?php echo $alternativa4 ?>">
							<label for="alternativa4" id="alternativa4" name="id"><?php echo $alternativa4 ?></label>
							<br>
							<input type="radio" name="questao1" id="alternativa5" value="<?php echo $alternativa5 ?>">
							<label for="alternativa5" id="alternativa5"><?php echo $alternativa5 ?></label>
							<br>
							<div class="btn-box">
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-bio" id="bt-q1">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion2()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha = filter_input(INPUT_POST, 'questao1');

							$get_bt1 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt1 = mysqli_fetch_assoc($get_bt1)) {
									$bt1_origemdavida = $row_bt1['respondida'];
								}

							if ($bt1_origemdavida == true) {
								echo '<style type/css>
									#bt-q1{
										display: none;
									}
									</style>';
							}

							if(isset($escolha)){
								if($escolha == $correta){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa4{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								else{ 
									$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");

									echo '<style type/css>
									#alternativa4{
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
					</div>
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
								echo "<img id=margin src=../../../../img/img-id2.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container">
						<form method="post">
							<?php
								while ($row_alternativaQ2 = mysqli_fetch_assoc($opcoes2)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ2['id_alternativa'] == 6) {
										$alternativa1q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 7) {
										$alternativa2q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 8) {
										$alternativa3q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 9) {
										$alternativa4q2 = $row_alternativaQ2['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ2['id_alternativa'] == 10) {
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
									<button type="button" class="btn btn-bio" onclick="backQuestion1()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-bio" id="bt-q2" onclick="here2()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion3()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha2 = filter_input(INPUT_POST, 'questao2');

							$get_bt2 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt2 = mysqli_fetch_assoc($get_bt2)) {
									$bt2_origemdavida = $row_bt2['respondida'];
								}

							if ($bt2_origemdavida == true) {
								echo '<style type/css>
									#bt-q2{
										display: none;
									}
									</style>';
							}

							if(isset($escolha2)){
								if($escolha2 == $corretaQ2){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa5q2{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");

									echo '<style type/css>
									#alternativa5q2{
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
								var score = 0;
							</script>
							<?php
							if(isset($escolha2)){
								if($escolha2 == $corretaQ2){
									?>
									<script>
										score++;
										console.log(score);
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
					</div>
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
								echo "<img id=margin src=../../../../img/img-id3.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container">
						<form method="post">
							<?php
								while ($row_alternativaQ3 = mysqli_fetch_assoc($opcoes3)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ3['id_alternativa'] == 11) {
										$alternativa1q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 12) {
										$alternativa2q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 13) {
										$alternativa3q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 14) {
										$alternativa4q3 = $row_alternativaQ3['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ3['id_alternativa'] == 15) {
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
									<button type="button" class="btn btn-bio" onclick="backQuestion2()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-bio" id="bt-q3" onclick="here3()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion4()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha3 = filter_input(INPUT_POST, 'questao3');

							$get_bt3 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt3 = mysqli_fetch_assoc($get_bt3)) {
									$bt3_origemdavida = $row_bt3['respondida'];
								}

							if ($bt3_origemdavida == true) {
								echo '<style type/css>
									#bt-q3{
										display: none;
									}
									</style>';
							}
							
							if(isset($escolha3)){
								if($escolha3 == $corretaQ3){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa1q3{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
									
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
										score++;
										console.log(score);
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
					</div>
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
					<div class="option-container option-container">
						<form method="post">
							<?php
								while ($row_alternativaQ4 = mysqli_fetch_assoc($opcoes4)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ4['id_alternativa'] == 123) {
										$alternativa1q4 = $row_alternativaQ4['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ4['id_alternativa'] == 124) {
										$alternativa2q4 = $row_alternativaQ4['texto'];
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-bio" onclick="backQuestion3()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-bio" id="bt-q4" onclick="here4()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion5()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha4 = filter_input(INPUT_POST, 'questao4');

							$get_bt4 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt4 = mysqli_fetch_assoc($get_bt4)) {
									$bt4_origemdavida = $row_bt4['respondida'];
								}

							if ($bt4_origemdavida == true) {
								echo '<style type/css>
									#bt-q4{
										display: none;
									}
									</style>';
							}
							
							if(isset($escolha4)){
								if($escolha4 == $corretaQ4){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa1q4{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								else{
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
									
									echo '<style type/css>
									#alternativa1q4{
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
					</div>
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
					<div class="option-container option-container">
						<form method="post">
							<?php
								while ($row_alternativaQ5 = mysqli_fetch_assoc($opcoes5)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ5['id_alternativa'] == 125) {
										$alternativa1q5 = $row_alternativaQ5['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ5['id_alternativa'] == 126) {
										$alternativa2q5 = $row_alternativaQ5['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ5['id_alternativa'] == 127) {
										$alternativa3q5 = $row_alternativaQ5['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ5['id_alternativa'] == 128) {
										$alternativa4q5 = $row_alternativaQ5['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ5['id_alternativa'] == 129) {
										$alternativa5q5 = $row_alternativaQ5['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ5['veracidade'] == 1) {
										$corretaQ5 = (string) trim($row_alternativaQ5['texto']);
									}
								
								}
							?>
							<input type="radio" name="questao5" id="alternativa1q5" value="<?php echo $alternativa1q5 ?>">
							<label for="alternativa1q5" id="alternativa1q5"><?php echo $alternativa1q5 ?></label>
							<br>
							<input type="radio" name="questao5" id="alternativa2q5" value="<?php echo $alternativa2q5 ?>">
							<label for="alternativa2q5" id="alternativa2q5"><?php echo $alternativa2q5 ?></label>
							<br>
							<input type="radio" name="questao5" id="alternativa3q5" value="<?php echo $alternativa3q5 ?>">
							<label for="alternativa3q5" id="alternativa3q5"><?php echo $alternativa3q5 ?></label>
							<br>
							<input type="radio" name="questao5" id="alternativa4q5" value="<?php echo $alternativa4q5 ?>">
							<label for="alternativa4q5" id="alternativa4q5"><?php echo $alternativa4q5 ?></label>
							<br>
							<input type="radio" name="questao5" id="alternativa5q5" value="<?php echo $alternativa5q5 ?>">
							<label for="alternativa5q5" id="alternativa5q5"><?php echo $alternativa5q5 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-bio" onclick="backQuestion4()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-bio" id="bt-q5" onclick="here5()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion6()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha5 = filter_input(INPUT_POST, 'questao5');

							$get_bt5 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt5 = mysqli_fetch_assoc($get_bt5)) {
									$bt5_origemdavida = $row_bt5['respondida'];
								}

							if ($bt5_origemdavida == true) {
								echo '<style type/css>
									#bt-q5{
										display: none;
									}
									</style>';
							}
							
							if(isset($escolha5)){
								if($escolha5 == $corretaQ5){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa5q5{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									
									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
									
									echo '<style type/css>
									#alternativa5q5{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha5) {
										case $alternativa1q5:
											echo '<style type/css>
												#alternativa1q5{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q5:
											echo '<style type/css>
												#alternativa2q5{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q5:
											echo '<style type/css>
												#alternativa3q5{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q5:
											echo '<style type/css>
												#alternativa4q5{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q5:
											echo '<style type/css>
												#alternativa5q5{
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
								var atual5 = false;
								var bt_q5 = document.getElementById("bt-q5");
							</script>
							<?php
							if(isset($escolha5)){
								if($escolha5 == $corretaQ5){
									?>
									<script>
										atual5 = true;
										bt_q5.style.display = "none";
									</script>
									<?php
								}
								else{
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
					</div>
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
					<div class="option-container option-container">
						<form method="post">
							<?php
								while ($row_alternativaQ6 = mysqli_fetch_assoc($opcoes6)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ6['id_alternativa'] == 130) {
										$alternativa1q6 = $row_alternativaQ6['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ6['id_alternativa'] == 131) {
										$alternativa2q6 = $row_alternativaQ6['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ6['veracidade'] == 1) {
										$corretaQ6 = $row_alternativaQ6['texto'];
									}
								}
							?>
							<input type="radio" name="questao6" id="alternativa1q6" value="<?php echo $alternativa1q6 ?>">
							<label for="alternativa1q6" id="alternativa1q6"><?php echo $alternativa1q6 ?></label>
							<br>
							<input type="radio" name="questao6" id="alternativa2q6" value="<?php echo $alternativa2q6 ?>">
							<label for="alternativa2q6" id="alternativa2q6"><?php echo $alternativa2q6 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-bio" onclick="backQuestion5()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-bio" id="bt-q6" onclick="here6()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion7()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha6 = filter_input(INPUT_POST, 'questao6');

							$get_bt6 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt6 = mysqli_fetch_assoc($get_bt6)) {
									$bt6_origemdavida = $row_bt6['respondida'];
								}

							if ($bt6_origemdavida == true) {
								echo '<style type/css>
									#bt-q6{
										display: none;
									}
									</style>';
							}
							
							if(isset($escolha6)){
								if($escolha6 == $corretaQ6){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa1q6{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									
									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
									
									echo '<style type/css>
									#alternativa1q6{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha6) {
										case $alternativa1q6:
											echo '<style type/css>
												#alternativa1q6{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q6:
											echo '<style type/css>
												#alternativa2q6{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q6:
											echo '<style type/css>
												#alternativa3q6{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q6:
											echo '<style type/css>
												#alternativa4q6{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q6:
											echo '<style type/css>
												#alternativa5q6{
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
								var atual6 = false;
								var bt_q6 = document.getElementById("bt-q6");
							</script>
							<?php
							if(isset($escolha6)){
								if($escolha6 == $corretaQ6){
									?>
									<script>
										atual6 = true;
										bt_q6.style.display = "none";
									</script>
									<?php
								}
								else{
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
					</div>
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
					<div class="option-container option-container lacuna">
						<form method="post" autocomplete="off">
							<?php
								while ($row_alternativaQ7 = mysqli_fetch_assoc($opcoes7)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ7['id_alternativa'] == 479) {
										$alternativa1q7 = trim($row_alternativaQ7['texto']);
										// echo $alternativa1;
									}
									if ($row_alternativaQ7['veracidade'] == 1) {
										$corretaQ7 = (string) trim($row_alternativaQ7['texto']);
									}
								
								}
							?>
							<label for="alternativa1q7" id="alternativa1q7">Insira a resposta:</label>
							<input type="text" name="questao7" id="alternativa1q7">
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-bio" onclick="backQuestion6()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-bio" id="bt-q7" onclick="here7()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion8()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio7 = filter_input(INPUT_POST, 'questao7');
							$resposta7 = (string) trim($envio7);

							$get_bt7 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt7 = mysqli_fetch_assoc($get_bt7)) {
									$bt7_origemdavida = $row_bt7['respondida'];
								}

							if ($bt7_origemdavida == true) {
								echo '<style type/css>
									#bt-q7{
										display: none;
									}
									</style>';
							}

							if(isset($resposta7)){
								if($resposta7 === $corretaQ7){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q7{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								elseif(isset($_POST['questao7'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q7;
                                    echo "<br>";

									$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");

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
					</div>
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
						<form method="post" autocomplete="off">
							<?php
								while ($row_alternativaQ8 = mysqli_fetch_assoc($opcoes8)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ8['id_alternativa'] == 480) {
										$alternativa1q8 = trim($row_alternativaQ8['texto']);
										// echo $alternativa1;
									}
									if ($row_alternativaQ8['id_alternativa'] == 481) {
										$alternativa2q8 = trim($row_alternativaQ8['texto']);
										// echo $alternativa1;
									}
									if ($row_alternativaQ8['id_alternativa'] == 482) {
										$alternativa3q8 = trim($row_alternativaQ8['texto']);
										// echo $alternativa1;
									}
									if ($row_alternativaQ8['id_alternativa'] == 483) {
										$alternativa4q8 = trim($row_alternativaQ8['texto']);
										// echo $alternativa1;
									}
									if ($row_alternativaQ8['veracidade'] == 1) {
										$corretaQ8 = (string) trim($row_alternativaQ8['texto']);
									}
								}
							?>
							<label for="alternativa1q8">Insira a resposta:</label>
							<input type="text" name="questao8a" id="alternativa1q8">
							<br>
							<label for="alternativa2q8">Insira a resposta:</label>
							<input type="text" name="questao8b" id="alternativa2q8">
							<br>
							<label for="alternativa3q8">Insira a resposta:</label>
							<input type="text" name="questao8c" id="alternativa3q8">
							<br>
							<label for="alternativa4q8">Insira a resposta:</label>
							<input type="text" name="questao8d" id="alternativa4q8">
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-bio" onclick="backQuestion7()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-bio" id="bt-q8" onclick="here8()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion9()">Próxima questão &rtrif;</button>
								</div>
							</div>
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

							$get_bt8 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt8 = mysqli_fetch_assoc($get_bt8)) {
									$bt8_origemdavida = $row_bt8['respondida'];
								}

							if ($bt8_origemdavida == true) {
								echo '<style type/css>
									#bt-q8{
										display: none;
									}
									</style>';
							}
							
							if (isset($resposta8a) && isset($resposta8b) && isset($resposta8c) && isset($resposta8d)) {
								if(($resposta8a === $alternativa1q8) && ($resposta8b === $alternativa2q8) && ($resposta8c === $alternativa3q8) && ($resposta8d === $alternativa4q8)){
									$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
										#alternativa1q8, #alternativa2q8, #alternativa3q8, #alternativa4q8{
											border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								elseif(isset($_POST['questao8a']) && isset($_POST['questao8b']) && isset($_POST['questao8c']) && isset($_POST['questao8d'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q8;
                                    echo "<br>";
                                    echo $alternativa2q8;
                                    echo "<br>";
                                    echo $alternativa3q8;
                                    echo "<br>";
                                    echo $alternativa4q8;
                                    echo "<br>";
                                    echo $alternativa5q8;
                                    echo "<br>";

									$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");

									echo '<style type/css>
											#alternativa1q8, #alternativa2q8, #alternativa3q8, #alternativa4q8{
												border: 2px solid red;
												background-color: #ff6347;
											}
											</style>';
								}
							}
						?>									
							<script >
								var atual8 = false;
								var bt_q8 = document.getElementById("bt-q8");
							</script>
							<?php
							if (isset($resposta8a) && isset($resposta8b) && isset($resposta8c) && isset($resposta8d)){
								if(($resposta8a === $alternativa1q8) && ($resposta8b === $alternativa2q8) && ($resposta8c === $alternativa3q8) && ($resposta8d === $alternativa4q8)){
									?>
									<script>
										atual8 = true;
										bt_q8.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao8a']) && isset($_POST['questao8b']) && isset($_POST['questao8c']) && isset($_POST['questao8d'])){
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
					</div>
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
						<form method="post" autocomplete="off">
							<?php
								while ($row_alternativaQ9 = mysqli_fetch_assoc($opcoes9)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ9['id_alternativa'] == 484) {
										$alternativa1q9 = trim($row_alternativaQ9['texto']);
										// echo $alternativa1;
									}
									if ($row_alternativaQ9['veracidade'] == 1) {
										$corretaQ9 = (string) trim($row_alternativaQ9['texto']);
									}
								
								}
							?>
							<label for="alternativa1q9">Insira a resposta:</label>
							<input type="text" name="questao9" id="alternativa1q9">
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-bio" onclick="backQuestion8()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-bio" id="bt-q9" onclick="here9()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion10()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio9 = filter_input(INPUT_POST, 'questao9');
							$resposta9 = (string) trim($envio9);

							$get_bt9 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt9 = mysqli_fetch_assoc($get_bt9)) {
									$bt9_origemdavida = $row_bt9['respondida'];
								}

							if ($bt9_origemdavida == true) {
								echo '<style type/css>
									#bt-q9{
										display: none;
									}
									</style>';
							}
							
							if(isset($resposta9)){
								if($resposta9 === $corretaQ9){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

								echo '<style type/css>
									#alternativa1q9{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								elseif(isset($_POST['questao9'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q9;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");

									echo '<style type/css>
												#alternativa1q9{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';	
								}
							}
						?>
							<script >
								var atual9 = false;
								var bt_q9 = document.getElementById("bt-q9");
							</script>
							<?php
							if(isset($resposta9)){
								if($resposta9 == $corretaQ9){
									?>
									<script>
										atual9 = true;
										bt_q9.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao9'])){
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
					</div>
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
									if ($row_alternativaQ10['id_alternativa'] == 533) {
										$alternativa1q10 = $row_alternativaQ10['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ10['veracidade'] == 1) {
										$corretaQ10 = trim($row_alternativaQ10['texto']);
									}
								
								}
							?>
							<label for="alternativa1q10">Insira a resposta:</label>
							<input type="text" name="questao10" id="alternativa1q10" placeholder="Insira sempre dois algarismos">
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-bio" onclick="backQuestion9()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-bio" id="bt-q10" onclick="here10()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion11()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio10 = filter_input(INPUT_POST, 'questao10');
							$resposta10 = (string) trim($envio10);

							$get_bt10 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt10 = mysqli_fetch_assoc($get_bt10)) {
									$bt10_origemdavida = $row_bt10['respondida'];
								}

							if ($bt10_origemdavida == true) {
								echo '<style type/css>
									#bt-q10{
										display: none;
									}
									</style>';
							}
							

							if(isset($resposta10)){
								if($resposta10 === $corretaQ10){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q10{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								elseif(isset($_POST['questao10'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q10;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
									
									echo '<style type/css>
												#alternativa1q10{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';	
								}
							}
						?>
							<script >
								var atual10 = false;
								var bt_q10 = document.getElementById("bt-q10");
							</script>
							<?php
							if(isset($resposta10)){
								if($resposta10 == $corretaQ10){
									?>
									<script>
										atual10 = true;
										bt_q10.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao10'])){
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
						<div class="atual"></div>
						<div></div>
					</div>
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
						<form method="post" autocomplete="off">
							<?php
								while ($row_alternativaQ11 = mysqli_fetch_assoc($opcoes11)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ11['id_alternativa'] == 534) {
										$alternativa1q11 = $row_alternativaQ11['texto'];
										// echo $alternativa1;
									}
									if ($row_alternativaQ11['veracidade'] == 1) {
										$corretaQ11 = $row_alternativaQ11['texto'];
									}
								
								}
							?>
							<label for="alternativa1q11">Insira a resposta:</label>
							<input type="text" name="questao11" id="alternativa1q11" placeholder="Insira sempre dois algarismos">
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-bio" onclick="backQuestion10()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-bio" id="bt-q11" onclick="here11()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion12()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio11 = filter_input(INPUT_POST, 'questao11');
							$resposta11 = (string) trim($envio11);

							$get_bt11 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt11 = mysqli_fetch_assoc($get_bt11)) {
									$bt11_origemdavida = $row_bt11['respondida'];
								}

							if ($bt11_origemdavida == true) {
								echo '<style type/css>
									#bt-q11{
										display: none;
									}
									</style>';
							}
							

							if(isset($resposta11)){
								if($resposta11 === $corretaQ11){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q11{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								elseif(isset($_POST['questao11'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q11;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");

									echo '<style type/css>
												#alternativa1q11{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';	
								}
							}
						?>
							<script >
								var atual11 = false;
								var bt_q11 = document.getElementById("bt-q11");
							</script>
							<?php
							if(isset($resposta11)){
								if($resposta11 == $corretaQ11){
									?>
									<script>
										atual11 = true;
										bt_q11.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao11'])){
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
					</div>
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
						<form method="post" autocomplete="off">
							<?php
								while ($row_alternativaQ12 = mysqli_fetch_assoc($opcoes12)) {
								// $id = (string) trim($row_alternativa['id_questao']);
									if ($row_alternativaQ12['id_alternativa'] == 535) {
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
									<button type="button" class="btn btn-bio" onclick="backQuestion11()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-bio" id="bt-q12" onclick="next()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-bio" onclick="toQuestion13()">Ver resultado &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio12 = filter_input(INPUT_POST, 'questao12');
							$resposta12 = (string) trim($envio12);

							$get_bt12 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt12 = mysqli_fetch_assoc($get_bt12)) {
									$bt12_origemdavida = $row_bt12['respondida'];
								}

							if ($bt12_origemdavida == true) {
								echo '<style type/css>
									#bt-q12{
										display: none;
									}
									</style>';
							}

							if(isset($resposta12)){
								if($resposta12 === $corretaQ12){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q12{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");
								}
								elseif(isset($_POST['questao12'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q12;
                                    echo "<br>";
                                    
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 8");

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
								if($resposta12 == $corretaQ9){
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
				<div class="whole-question" id="13">
					<div class="result">
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
					<div class="btn-box">
						<div class="previous-question-btn">
							<a class="btn btn-bio" href="../../biologia.html">Voltar ao menu</a>
						</div>
					</div>
				</div>
				<!-- fim do resultado -->
			</div>
			<div class="footer footer-size footer-questionario">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div>
		</div>

		<script type="text/javascript">
			function reiniciar(){
				<?php
					$reiniciar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 0 WHERE questionario_questao.id_questionario = 8");
				?>
			}
		</script>

		<script src="../../../../js/pesquisa.js"></script>
		<script src="../../../../js/paginacao.js"></script>

	</body>
</html>