<?php
session_start();
include_once("../../../../conexao.php");
?>
<?php
<<<<<<< HEAD:user/disciplinas/biologia/origemdavida/conteudo.php
	
	$get_conteudo = mysqli_query($conexao, "SELECT * FROM tema WHERE id_tema = 8");

	while ($row_conteudo = mysqli_fetch_assoc($get_conteudo)) {
		$resumo = $row_conteudo['resumo'];
		$video = $row_conteudo['link_video'];
	}

?>
=======

    $get_conteudo = mysqli_query($conexao, "SELECT * FROM tema WHERE id_tema = 8");

    while ($row_conteudo = mysqli_fetch_assoc($get_conteudo)) {
        $resumo = $row_conteudo['resumo'];
        $video = $row_conteudo['link_video'];
    }

?>

>>>>>>> fc6ea1f94f7dff5147f532af0b8c856fa2f3bdf3:user/disciplinas/biologia/origemdavida/conteudo.html
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
		<div class="escolha conteudo">
			<h2>RELEMBRE</h2>
			<h3><b>Origem da vida</b></h3>
			<div class="conteudo">
				<div class="opcoes">
					<li><button class="btn-opcoes" onclick="esquerda()">Resumo</button></li>
					<li><button class="btn-opcoes" onclick="direita()">Videoaula</button></li>
					<div class="wrapper" id="wrapper">
						<div class="wrapper-child" >
							<div class="tab" name="resumo" id="resumo">
								<div class="material-texto">
									<p>
										<?php echo $resumo ?>
									</p>
								</div>
							</div>
							<div class="tab" name="video" id="video">
								<div class="material-video">
									<iframe width="600" height="337" src="https://www.youtube.com/embed/DVNey_bnbHA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
					<div class="bt-bio">
						<a  href="origemdavida.php">Responder ao questionário</a>
					</div>
				</div>
			</div>
			<div class="footer footer-size footer-escolha">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div>
		</div>

		<script src="../../../../js/scroll-conteudo.js"></script>
		<script src="../../../../js/pesquisa.js"></script>
		
	</body>
</html>