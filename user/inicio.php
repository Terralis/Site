<?php
// session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/estilo.css">
		<title>Terrális</title>
	</head>
	<body>
		<div class="divisao-menu">
			<img src="../img/logo interno cor principal.jpeg">
			<div class="menu-interno">
				<nav>
					<ul>
						<li class="pagina-atual-verde"><a href="inicio.php">Início</a></li>
						<li><a href="">Disciplinas &dtri;</a>
							<ul>
								<li><a href="disciplinas/biologia.html">Biologia</a></li>
								<li><a href="disciplinas/fisica.html">Física</a></li>
								<li><a href="disciplinas/quimica.html">Química</a></li>
							</ul>
						</li>
						<li><a href="desempenho.html">Desempenho</a></li>
						<li><a href="ajuda.html">Ajuda?</a></li>
					</ul>
				</nav>
			</div>
			<div class="footer footer-size footer-interno">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div>
		</div>
		<div class="divisao-superior">
			<img src="../img/usuario.png">
			<div>
				<p><a onclick="opcaoPerfil()">Usuário</a></p>
				<img src="../img/escrita cor principal.jpeg" id="escrita">
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
				<li><a href="perfil.html">Abrir perfil</a></li>
				<li><a href="../logout.php">Sair</a></li>
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
		<div class="caixa">
			<h3>Olá, <?php echo $_SESSION['usuario']; ?>!</h3>
			<p>Seja bem-vindo a mais um dia de estudos</p>
			<p>Comece agora seu treinamento</p>
			<div>
				<img src="../img/cerebro.png">
			</div>
		</div>
		<div class="topicos-inicio">
			<div>
				<figure>
					<img src="../img/check.png">
					<figcaption><b><a href="materialdeapoio.html">Material de Apoio</a></b></figcaption>
					<figcaption>Conte com um compilado de conteúdo para lembrar os assuntos</figcaption>
				</figure>
			</div>
			<div>
				<figure>
					<img src="../img/check.png">
					<figcaption><b><a href="testes.html">Testes</a></b></figcaption>
					<figcaption>Teste seu aprendizado através dos questionários</figcaption>
				</figure>
			</div>
			<div>
				<figure>
					<img src="../img/check.png">
					<figcaption><b><a href="desempenho.html">Desempenho</a></b></figcaption>
					<figcaption>Acompanhe seu progresso com os gráficos de desempenho</figcaption>
				</figure>
			</div>
		</div>

		<script src="../js/pesquisa.js"></script>

	</body>
</html>