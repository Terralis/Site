<?php
session_start();
include_once("../conexao.php");

// $nome = $_SESSION['usuario'];
// $sobrenome = $_SESSION['sobrenome'];
// $datanascimento = $_SESSION['datanascimento'];
// $email = $_SESSION['email_usuario'];
// $senha = $_SESSION['senha_usuario'];

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
		<div class="divisao-menu menu-auto">
			<img src="../img/logo interno cor principal.jpeg">
			<div class="menu-interno">
				<nav>
					<ul>
						<li><a href="inicio.php">Início</a></li>
						<li><a href="">Disciplinas &dtri;</a>
							<ul>
								<li><a href="disciplinas/biologia.html">Biologia</a></li>
								<li><a href="disciplinas/fisica.html">Física</a></li>
								<li><a href="disciplinas/quimica.html">Química</a></li>
							</ul>
						</li>
						<li><a href="desempenho.php">Desempenho</a></li>
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
				<!-- biologia -->
				<li><a href="disciplinas/biologia/origemdavida/escolha.html">Origem da vida</a></li>
				<li><a href="disciplinas/biologia/teoriasevolutivas/escolha.html">Teorias evolutivas</a></li>
				<li><a href="disciplinas/biologia/divisaocelular/escolha.html">Divisão celular</a></li>
				<li><a href="disciplinas/biologia/teoriacelular/escolha.html">Teoria celular</a></li>
				<li><a href="disciplinas/biologia/niveisdeorganizacaodosseresvivos/escolha.html">Níveis de organização dos seres vivos</a></li>
				<li><a href="disciplinas/biologia/citologia/escolha.html">Citologia</a></li>
				<li><a href="disciplinas/biologia/histologia/escolha.html">Histologia</a></li>
				<!-- física -->
				<li><a href="disciplinas/fisica/introducaoaoestudodafisica/escolha.html">Introdução ao estudo da física</a></li>
				<li><a href="disciplinas/fisica/gravitacao/escolha.html">Gravitação</a></li>
				<li><a href="disciplinas/fisica/estatica/escolha.html">Estática</a></li>
				<li><a href="disciplinas/fisica/conceitosdeforca/escolha.html">Conceitos de força</a></li>
				<li><a href="disciplinas/fisica/leisdenewton/escolha.html">Leis de Newton</a></li>
				<li><a href="disciplinas/fisica/atrito/escolha.html">Atrito</a></li>
				<li><a href="disciplinas/fisica/cinematica/escolha.html">Cinemática</a></li>
				<!-- química -->
				<li><a href="disciplinas/quimica/conceitosgerais/escolha.html">Conceitos gerais</a></li>
				<li><a href="disciplinas/quimica/materia/escolha.html">Matéria</a></li>
				<li><a href="disciplinas/quimica/atomo/escolha.html">Átomo</a></li>
				<li><a href="disciplinas/quimica/tabelaperiodica/escolha.html">Tabela periódica</a></li>
				<li><a href="disciplinas/quimica/ligacoesquimicas/escolha.html">Ligações químicas</a></li>
				<li><a href="disciplinas/quimica/quimicaorganica/escolha.html">Química orgânica</a></li>
				<li><a href="disciplinas/quimica/estequiometria/escolha.html">Estequiometria</a></li>
			</ul>
		</div>
		<div class="escolha conteudo perfil">
			<h2>PERFIL</h2>
			<div class="infos">
				<div class="form-perfil">
					<div class="perfil1">
						<h3>Informações da conta</h3>
						<div>
							<label for="nome">Nome:</label>
							<input type="text" name="nome" id="nome" required="required" value="<?php echo $_SESSION['usuario']; ?>"/>
							<p>
							<label for="sobrenome">Sobrenome:</label>
							<input type="text" name="sobrenome" id="sobrenome" required="required" placeholder="Insira seu sobrenome" />
							<p>
							<label for="datanascimento">Data de nascimento:</label>
							<input type="date" name="datanascimento" id="datanascimento" required="required" placeholder="Insira sua data de nascimento" />
							<p>
							<label for="email">Email:</label>
							<input type="email" name="email" id="email" required="required" placeholder="Insira seu email" />
							<p>
							<label for="senha">Senha</label>
							<input type="password" name="senha" id="senha" required="required" placeholder="<?php echo $senha; ?>" />
							<p>
							<!-- <input type="submit" class="botao" name="cadastrar" value="Cadastrar" /> -->
						</div>
					</div>
				</div>
				<!-- <div class="perfil2">
					<div class="form-perfil">
						<h3>Estudante e aprendiz do Terrális</h3>
						<div>
							<input type="file" name="image" id="image" placeholder="Sua foto" />
							<label for="image">Foto de perfil</label>
							<p>
							<input type="reset" class="botao" name="cadastrar" value="Realizar alterações" />
						</div>
					</div>
				</div> -->
			</div>
		</div>

		<script src="../js/pesquisa.js"></script>

	</body>
</html>