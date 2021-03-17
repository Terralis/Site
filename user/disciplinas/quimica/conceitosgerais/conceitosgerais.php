<?php
// session_start();
include_once("../../../../conexao.php");
include('../../../verifica_login.php');
?>
<?php
	$index_questao = 0;
	$index_alternativa = 0;

	$seu_id = $_SESSION['id_usuario'];

	$get_pontuacao_correta = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 15";
	$pontuacao_correta = mysqli_query($conexao, $get_pontuacao_correta);

	$get_pontuacao_errada = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 15";
	$pontuacao_errada = mysqli_query($conexao, $get_pontuacao_errada);

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
						<li><a href="../../../inicio.php">Início</a></li>
						<li><a href="">Disciplinas &dtri;</a>
							<ul>
								<li><a href="../../biologia.html">Biologia</a></li>
								<li><a href="../../fisica.html">Física</a></li>
								<li class="pagina-atual-vermelho"><a href="../../quimica.html">Química</a></li>
							</ul>
						</li>
						<li><a href="../../../desempenho.php">Desempenho</a></li>
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
				<li><a href="../../../perfil.php">Abrir perfil</a></li>
				<li><a href="../../../../logout.php">Sair</a></li>
			</ul>
		</div>
		<div class="pesquisa-materias" id="pesquisa-materias">
			<ul id="materias">
				<!-- biologia -->
				<li><a href="../../biologia/origemdavida/escolha.html">Origem da vida</a></li>
				<li><a href="../../biologia/teoriasevolutivas/escolha.html">Teorias evolutivas</a></li>
				<li><a href="../../biologia/divisaocelular/escolha.html">Divisão celular</a></li>
				<li><a href="../../biologia/teoriacelular/escolha.html">Teoria celular</a></li>
				<li><a href="../../biologia/niveisdeorganizacaodosseresvivos/escolha.html">Níveis de organização dos seres vivos</a></li>
				<li><a href="../../biologia/citologia/escolha.html">Citologia</a></li>
				<li><a href="../../biologia/histologia/escolha.html">Histologia</a></li>
				<!-- física -->
				<li><a href="../../fisica/introducaoaoestudodafisica/escolha.html">Introdução ao estudo da física</a></li>
				<li><a href="../../fisica/gravitacao/escolha.html">Gravitação</a></li>
				<li><a href="../../fisica/estatica/escolha.html">Estática</a></li>
				<li><a href="../../fisica/conceitosdeforca/escolha.html">Conceitos de força</a></li>
				<li><a href="../../fisica/leisdenewton/escolha.html">Leis de Newton</a></li>
				<li><a href="../../fisica/atrito/escolha.html">Atrito</a></li>
				<li><a href="../../fisica/cinematica/escolha.html">Cinemática</a></li>
				<!-- química -->
				<li><a href="../conceitosgerais/escolha.html">Conceitos gerais</a></li>
				<li><a href="../materia/escolha.html">Matéria</a></li>
				<li><a href="../atomo/escolha.html">Átomo</a></li>
				<li><a href="../tabelaperiodica/escolha.html">Tabela periódica</a></li>
				<li><a href="../ligacoesquimicas/escolha.html">Ligações químicas</a></li>
				<li><a href="../quimicaorganica/escolha.html">Química orgânica</a></li>
				<li><a href="../estequiometria/escolha.html">Estequiometria</a></li>
			</ul>
		</div>	
		<div class="escolha conteudo conteudo-qui">
			<h2>QUESTIONÁRIO</h2>
			<h3><b>Conceitos gerais</b></h3>		
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id76.png>";
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
									<button type="submit" class="btn btn-qui" id="bt-q1">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion2()">Próxima questão &rtrif;</button>
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
									#alternativa5{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id77.png>";
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
									<button type="button" class="btn btn-qui" onclick="backQuestion1()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q2" onclick="here2()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion3()">Próxima questão &rtrif;</button>
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
									#alternativa3q2{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
									#alternativa3q2{
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id78.png>";
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
									<button type="button" class="btn btn-qui" onclick="backQuestion2()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q3" onclick="here3()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion4()">Próxima questão &rtrif;</button>
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
									#alternativa4q3{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
									#alternativa4q3{
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id79.png>";
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
							<input type="radio" name="questao4" id="alternativa5q4" value="<?php echo $alternativa5q4 ?>">
							<label for="alternativa5q4" id="alternativa5q4"><?php echo $alternativa5q4 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion3()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q4" onclick="here4()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion5()">Próxima questão &rtrif;</button>
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

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

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
										case $alternativa5q4:
											echo '<style type/css>
												#alternativa5q4{
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
									<button type="button" class="btn btn-qui" onclick="backQuestion4()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-qui" id="bt-q5" onclick="here5()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion6()">Próxima questão &rtrif;</button>
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

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

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
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion5()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-qui" id="bt-q6" onclick="here6()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion7()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio6 = filter_input(INPUT_POST, 'questao6');
							$resposta6= (string) trim($envio6);

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

							if(isset($resposta6)){
								if($resposta6 === $corretaQ6){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q6{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								elseif(isset($_POST['questao6'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q6;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id177.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-qui lacuna">
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion6()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-qui" id="bt-q7" onclick="here7()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion8()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio7x = filter_input(INPUT_POST, 'questao7x');
							$resposta7x = (string) trim($envio7x);

							$envio7y = filter_input(INPUT_POST, 'questao7y');
							$resposta7y = (string) trim($envio7y);

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


							if(isset($resposta7x) && isset($resposta7y)){
								if(($resposta7x === $alternativa1q7x) && ($resposta7y === $alternativa1q7y)){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
										#alternativa1q7x, #alternativa1q7y{
										border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
									}
								elseif(isset($_POST['questao7x']) && isset($_POST['questao7y'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q7;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
										#alternativa1q7x, #alternativa1q7y{
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
							if(isset($resposta7x) && isset($resposta7y)){
								if(($resposta7x === $alternativa1q7x) && ($resposta7y === $alternativa1q7y)){
									?>
									<script>
										atual7 = true;
										bt_q7.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao7x']) && isset($_POST['questao7y'])){
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id178.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-qui lacuna">
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion7()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
										<button type="submit" class="btn btn-qui" id="bt-q8" onclick="here8()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion9()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio8 = filter_input(INPUT_POST, 'questao8');
							$resposta8 = (string) trim($envio8);

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

							if(isset($resposta8)){
								if($resposta8 === $corretaQ8){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
										#alternativa1q8{
										border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
									}
								elseif(isset($_POST['questao8'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q8;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
										#alternativa1q8{
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
							if(isset($resposta8)){
								if($resposta8 == $corretaQ8){
									?>
									<script>
										atual8 = true;
										bt_q8.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao8'])){
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id179.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-qui lacuna">
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion8()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q9" onclick="here9()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion10()">Próxima questão &rtrif;</button>
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

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
									}
								elseif(isset($_POST['questao9'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q9;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id180.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-qui lacuna">
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion9()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q10" onclick="here10()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion11()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio10 = filter_input(INPUT_POST, 'questao10');

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
							
							$resposta10 = (string) trim($envio10);
							if(isset($resposta10)){
								if($resposta10 === $corretaQ10){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
										#alternativa1q10{
										border: 2px solid green;
											background-color: #d2e8cf;
										}
										</style>';

										$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
									}
								elseif(isset($_POST['questao10'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q10;
                                    echo "<br>";
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									
										$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id201.png>";
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
							<label for="alternativa1q11" id="alternativa1q11"><?php echo $alternativa1q11 ?></label>
							<br>
							<input type="radio" name="questao11" id="alternativa2q11" value="<?php echo $alternativa2q11 ?>">
							<label for="alternativa2q11" id="alternativa2q11"><?php echo $alternativa2q11 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion10()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q11" onclick="here11()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion12()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha11 = filter_input(INPUT_POST, 'questao11');

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

							if(isset($escolha11)){
								if($escolha11 == $corretaQ11){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa1q11{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
									#alternativa1q11{
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id202.png>";
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
							<label for="alternativa1q12" id="alternativa1q12"><?php echo $alternativa1q12 ?></label>
							<br>
							<input type="radio" name="questao12" id="alternativa2q12" value="<?php echo $alternativa2q12 ?>">
							<label for="alternativa2q12" id="alternativa2q12"><?php echo $alternativa2q12 ?></label>
							<br>
							<input type="radio" name="questao12" id="alternativa3q12" value="<?php echo $alternativa3q12 ?>">
							<label for="alternativa3q12" id="alternativa3q12"><?php echo $alternativa3q12 ?></label>
							<br>
							<input type="radio" name="questao12" id="alternativa4q12" value="<?php echo $alternativa4q12 ?>">
							<label for="alternativa4q12" id="alternativa4q12"><?php echo $alternativa4q12 ?></label>
							<br>
							<input type="radio" name="questao12" id="alternativa5q12" value="<?php echo $alternativa5q12 ?>">
							<label for="alternativa5q12" id="alternativa5q12"><?php echo $alternativa5q12 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion11()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q12" onclick="here12()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion13()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha12 = filter_input(INPUT_POST, 'questao12');

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

							if(isset($escolha12)){
								if($escolha12 == $corretaQ12){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa2q12{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
									#alternativa2q12{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha12) {
										case $alternativa1q12:
											echo '<style type/css>
												#alternativa1q12{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q12:
											echo '<style type/css>
												#alternativa2q12{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q12:
											echo '<style type/css>
												#alternativa3q12{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q12:
											echo '<style type/css>
												#alternativa4q12{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q12:
											echo '<style type/css>
												#alternativa5q12{
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
								var atual12 = false;
								var bt_q12 = document.getElementById("bt-q12");
							</script>
							<?php
							if(isset($escolha12)){
								if($escolha12 == $corretaQ12){
									?>
									<script>
										atual12 = true;
										bt_q12.style.display = "none";
									</script>
									<?php
								}
								else{
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
							<label for="alternativa1q13" id="alternativa1q13"><?php echo $alternativa1q13 ?></label>
							<br>
							<input type="radio" name="questao13" id="alternativa2q13" value="<?php echo $alternativa2q13 ?>">
							<label for="alternativa2q13" id="alternativa2q13"><?php echo $alternativa2q13 ?></label>
							<br>
							<input type="radio" name="questao13" id="alternativa3q13" value="<?php echo $alternativa3q13 ?>">
							<label for="alternativa3q13" id="alternativa3q13"><?php echo $alternativa3q13 ?></label>
							<br>
							<input type="radio" name="questao13" id="alternativa4q13" value="<?php echo $alternativa4q13 ?>">
							<label for="alternativa4q13" id="alternativa4q13"><?php echo $alternativa4q13 ?></label>
							<br>
							<input type="radio" name="questao13" id="alternativa5q13" value="<?php echo $alternativa5q13 ?>">
							<label for="alternativa5q13" id="alternativa5q13"><?php echo $alternativa5q13 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion12()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q13" onclick="here13()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion14()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha13 = filter_input(INPUT_POST, 'questao13');

							$get_bt13 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt13 = mysqli_fetch_assoc($get_bt13)) {
									$bt13_origemdavida = $row_bt13['respondida'];
								}

							if ($bt13_origemdavida == true) {
								echo '<style type/css>
									#bt-q13{
										display: none;
									}
									</style>';
							}

							if(isset($escolha13)){
								if($escolha13 == $corretaQ13){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa3q13{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
									#alternativa3q13{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha13) {
										case $alternativa1q13:
											echo '<style type/css>
												#alternativa1q13{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q13:
											echo '<style type/css>
												#alternativa2q13{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q13:
											echo '<style type/css>
												#alternativa3q13{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q13:
											echo '<style type/css>
												#alternativa4q13{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q13:
											echo '<style type/css>
												#alternativa5q13{
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
								var atual13 = false;
								var bt_q13 = document.getElementById("bt-q13");
							</script>
							<?php
							if(isset($escolha13)){
								if($escolha13 == $corretaQ13){
									?>
									<script>
										atual13 = true;
										bt_q13.style.display = "none";
									</script>
									<?php
								}
								else{
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id204.png>";
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
							<label for="alternativa1q14" id="alternativa1q14"><?php echo $alternativa1q14 ?></label>
							<br>
							<input type="radio" name="questao14" id="alternativa2q14" value="<?php echo $alternativa2q14 ?>">
							<label for="alternativa2q14" id="alternativa2q14"><?php echo $alternativa2q14 ?></label>
							<br>
							<input type="radio" name="questao14" id="alternativa3q14" value="<?php echo $alternativa3q14 ?>">
							<label for="alternativa3q14" id="alternativa3q14"><?php echo $alternativa3q14 ?></label>
							<br>
							<input type="radio" name="questao14" id="alternativa4q14" value="<?php echo $alternativa4q14 ?>">
							<label for="alternativa4q14" id="alternativa4q14"><?php echo $alternativa4q14 ?></label>
							<br>
							<input type="radio" name="questao14" id="alternativa5q14" value="<?php echo $alternativa5q14 ?>">
							<label for="alternativa5q14" id="alternativa5q14"><?php echo $alternativa5q14 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion13()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q14" onclick="here14()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion15()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha14 = filter_input(INPUT_POST, 'questao14');

							$get_bt14 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt14 = mysqli_fetch_assoc($get_bt14)) {
									$bt14_origemdavida = $row_bt14['respondida'];
								}

							if ($bt14_origemdavida == true) {
								echo '<style type/css>
									#bt-q14{
										display: none;
									}
									</style>';
							}

							if(isset($escolha14)){
								if($escolha14 == $corretaQ14){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa4q14{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
									#alternativa4q14{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha14) {
										case $alternativa1q14:
											echo '<style type/css>
												#alternativa1q14{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q14:
											echo '<style type/css>
												#alternativa2q14{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q14:
											echo '<style type/css>
												#alternativa3q14{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q14:
											echo '<style type/css>
												#alternativa4q14{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q14:
											echo '<style type/css>
												#alternativa5q14{
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
								var atual14 = false;
								var bt_q14 = document.getElementById("bt-q14");
							</script>
							<?php
							if(isset($escolha14)){
								if($escolha14 == $corretaQ14){
									?>
									<script>
										atual14 = true;
										bt_q14.style.display = "none";
									</script>
									<?php
								}
								else{
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
				<!-- questão 15 -->
				<div class="whole-question" id="15">
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
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id205.png>";
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
							<label for="alternativa1q15" id="alternativa1q15"><?php echo $alternativa1q15 ?></label>
							<br>
							<input type="radio" name="questao15" id="alternativa2q15" value="<?php echo $alternativa2q15 ?>">
							<label for="alternativa2q15" id="alternativa2q15"><?php echo $alternativa2q15 ?></label>
							<br>
							<input type="radio" name="questao15" id="alternativa3q15" value="<?php echo $alternativa3q15 ?>">
							<label for="alternativa3q15" id="alternativa3q15"><?php echo $alternativa3q15 ?></label>
							<br>
							<input type="radio" name="questao15" id="alternativa4q15" value="<?php echo $alternativa4q15 ?>">
							<label for="alternativa4q15" id="alternativa4q15"><?php echo $alternativa4q15 ?></label>
							<br>
							<input type="radio" name="questao15" id="alternativa5q15" value="<?php echo $alternativa5q15 ?>">
							<label for="alternativa5q15" id="alternativa5q15"><?php echo $alternativa5q15 ?></label>
							<br>
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion14()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q15" onclick="here15()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion16()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$escolha15 = filter_input(INPUT_POST, 'questao15');

							$get_bt15 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt15 = mysqli_fetch_assoc($get_bt15)) {
									$bt15_origemdavida = $row_bt15['respondida'];
								}

							if ($bt15_origemdavida == true) {
								echo '<style type/css>
									#bt-q15{
										display: none;
									}
									</style>';
							}

							if(isset($escolha15)){
								if($escolha15 == $corretaQ15){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
									echo '<style type/css>
									#alternativa5q15{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								else{ 
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
									#alternativa5q15{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';
									switch ($escolha15) {
										case $alternativa1q15:
											echo '<style type/css>
												#alternativa1q15{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
											break;
										case $alternativa2q15:
											echo '<style type/css>
												#alternativa2q15{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa3q15:
											echo '<style type/css>
												#alternativa3q15{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa4q15:
											echo '<style type/css>
												#alternativa4q15{
													border: 2px solid red;
													background-color:  #ff6347;
												}
												</style>';
											break;
										case $alternativa5q15:
											echo '<style type/css>
												#alternativa5q15{
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
								var atual15 = false;
								var bt_q15 = document.getElementById("bt-q15");
							</script>
							<?php
							if(isset($escolha15)){
								if($escolha15 == $corretaQ15){
									?>
									<script>
										atual15 = true;
										bt_q15.style.display = "none";
									</script>
									<?php
								}
								else{
									?>
									<script>
										atual15 = true;
										bt_q15.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 16 -->
				<div class="whole-question" id="16">
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
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id276.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-qui lacuna">
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion15()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q16" onclick="here16()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion17()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio16 = filter_input(INPUT_POST, 'questao16');
							$resposta16 = (string) trim($envio16);

							$get_bt16 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt16 = mysqli_fetch_assoc($get_bt16)) {
									$bt16_origemdavida = $row_bt16['respondida'];
								}

							if ($bt16_origemdavida == true) {
								echo '<style type/css>
									#bt-q16{
										display: none;
									}
									</style>';
							}

							if(isset($resposta16)){
								if($resposta16 === $corretaQ16){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q16{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								elseif(isset($_POST['questao16'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q16;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
												#alternativa1q16{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
								}
							}
						?>
							<script >
								var atual16 = false;
								var bt_q16 = document.getElementById("bt-q16");
							</script>
							<?php
							if(isset($resposta16)){
								if($resposta16 == $corretaQ16){
									?>
									<script>
										atual16 = true;
										bt_q16.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao16'])){
									?>
									<script>
										atual16 = true;
										bt_q16.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 17 -->
				<div class="whole-question" id="17">
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
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id277.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-qui lacuna">
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion16()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q17" onclick="here17()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion18()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio17 = filter_input(INPUT_POST, 'questao17');
							$resposta17 = (string) trim($envio17);

							$get_bt17 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt17 = mysqli_fetch_assoc($get_bt17)) {
									$bt17_origemdavida = $row_bt17['respondida'];
								}

							if ($bt17_origemdavida == true) {
								echo '<style type/css>
									#bt-q17{
										display: none;
									}
									</style>';
							}


							if(isset($resposta17)){
								if($resposta17 === $corretaQ17){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q17{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								elseif(isset($_POST['questao17'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q17;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
												#alternativa1q17{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
								}
							}
						?>
							<script >
								var atual17 = false;
								var bt_q17 = document.getElementById("bt-q17");
							</script>
							<?php
							if(isset($resposta17)){
								if($resposta17 == $corretaQ17){
									?>
									<script>
										atual17 = true;
										bt_q17.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao17'])){
									?>
									<script>
										atual17 = true;
										bt_q17.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 18 -->
				<div class="whole-question" id="18">
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
						<div></div>
					</div>
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
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id278-01.png>";
								echo "<br>";
								echo "<img id=margin src=../../../../img/img-id278-02.png>";
								}
							?>		
						</div>
					</div>
					<div class="option-container option-container-qui lacuna">
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion17()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q18" onclick="here16()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion19()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio18 = filter_input(INPUT_POST, 'questao18');
							$resposta18 = (string) trim($envio18);

							$get_bt18 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt18 = mysqli_fetch_assoc($get_bt18)) {
									$bt18_origemdavida = $row_bt18['respondida'];
								}

							if ($bt18_origemdavida == true) {
								echo '<style type/css>
									#bt-q18{
										display: none;
									}
									</style>';
							}

							if(isset($resposta18)){
								if($resposta18 === $corretaQ18){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q18{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								elseif(isset($_POST['questao18'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q18;
                                    echo "<br>";


								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
												#alternativa1q18{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
								}
							}
						?>
							<script >
								var atual18 = false;
								var bt_q18 = document.getElementById("bt-q18");
							</script>
							<?php
							if(isset($resposta18)){
								if($resposta18 == $corretaQ18){
									?>
									<script>
										atual18 = true;
										bt_q18.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao18'])){
									?>
									<script>
										atual18 = true;
										bt_q18.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 19 -->
				<div class="whole-question" id="19">
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
						<div></div>
					</div>
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
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion18()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q19" onclick="here19()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion20()">Próxima questão &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio19 = filter_input(INPUT_POST, 'questao19');
							$resposta19 = (string) trim($envio19);

							$get_bt19 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt19 = mysqli_fetch_assoc($get_bt19)) {
									$bt19_origemdavida = $row_bt19['respondida'];
								}

							if ($bt19_origemdavida == true) {
								echo '<style type/css>
									#bt-q19{
										display: none;
									}
									</style>';
							}


							if(isset($resposta19)){
								if($resposta19 === $corretaQ19){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q19{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								elseif(isset($_POST['questao19'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q19;
                                    echo "<br>";

								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");

									echo '<style type/css>
												#alternativa1q19{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
								}
							}
						?>
							<script >
								var atual19 = false;
								var bt_q19 = document.getElementById("bt-q19");
							</script>
							<?php
							if(isset($resposta19)){
								if($resposta19 == $corretaQ19){
									?>
									<script>
										atual19 = true;
										bt_q19.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao19'])){
									?>
									<script>
										atual19 = true;
										bt_q19.style.display = "none";
									</script>
									<?php
								}
							}
						?>
					</div>
				</div>
				<!-- questão 20 -->
				<div class="whole-question" id="20">
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
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div class="atual"></div>
					</div>
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
						<form method="post" autocomplete="off">
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
							<div class="btn-box">
								<div class="previous-question-btn">
									<button type="button" class="btn btn-qui" onclick="backQuestion19()">&ltrif; Questão anterior</button>
								</div>
								<div class="confirm-question-btn">
									<button type="submit" class="btn btn-qui" id="bt-q20" onclick="here20()">Confirmar resposta</button>
								</div>
								<div class="next-question-btn">
									<button type="button" class="btn btn-qui" onclick="toQuestion21()">Ver resultado &rtrif;</button>
								</div>
							</div>
						</form>
						<?php
							$envio20 = filter_input(INPUT_POST, 'questao20');
							$resposta20 = (string) trim($envio20);

							$get_bt20 = mysqli_query($conexao, "SELECT respondida FROM controle_resposta WHERE id_questao = $id");

							while ($row_bt20 = mysqli_fetch_assoc($get_bt20)) {
									$bt20_origemdavida = $row_bt20['respondida'];
								}

							if ($bt20_origemdavida == true) {
								echo '<style type/css>
									#bt-q20{
										display: none;
									}
									</style>';
							}

							if(isset($resposta20)){
								if($resposta20 === $corretaQ20){
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");
								echo '<style type/css>
									#alternativa1q20{
										border: 2px solid green;
										background-color: #d2e8cf;
									}
									</style>';

									$up = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_correta = qtd_questao_correta + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
								}
								elseif(isset($_POST['questao20'])){

									echo "Resposta correta:";
                                    echo "<br>";
                                    echo $alternativa1q20;
                                    echo "<br>";
                                    
								$confirmar = mysqli_query($conexao, "UPDATE controle_resposta SET respondida = 1 WHERE id_questao = $id");

									$down = mysqli_query($conexao, "UPDATE desempenho SET qtd_questao_errada = qtd_questao_errada + 1 WHERE id_usuario = $seu_id AND id_questionario = 15");
									
									echo '<style type/css>
												#alternativa1q20{
													border: 2px solid red;
													background-color: #ff6347;
												}
												</style>';
								}
							}
						?>
							<script >
								var atual20 = false;
								var bt_q20 = document.getElementById("bt-q20");
							</script>
							<?php
							if(isset($resposta20)){
								if($resposta20 == $corretaQ20){
									?>
									<script>
										atual20 = true;
										bt_q20.style.display = "none";
									</script>
									<?php
								}
								elseif(isset($_POST['questao20'])){
									?>
									<script>
										atual20 = true;
										bt_q20.style.display = "none";
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
				<div class="whole-question" id="21">
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
							<a class="btn btn-qui" href="../../quimica.html">Voltar ao menu</a>
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

		<script src="../../../../js/pesquisa.js"></script>
		<script src="../../../../js/paginacao.js"></script>

	</body>
</html>