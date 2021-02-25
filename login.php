<?php
session_start();
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
	<body class="#">
		<div class="menu-login">
			<li><a href="index.html">Início</a></li>
		</div>
		<li class="botao-meio"><a href="cadastro.php">Cadastre-se &rtrif;</a></li>
		<div>
			<img class="logo-branco" src="img/logo fundo branco.jpeg">
		</div>
		<div class="divisao">
			<header>
				<div class="coluna col7 form-login">
					<h2>Conecte-se</h2>
					<h3>Olá, Estudante!</h3>
					<hr/>
					<?php 
						if (isset($_SESSION['nao_autenticado'])):
					?>
					<div class="erro-login">
						<p>Erro ao tentar efetuar o login.</p>
						<p>Email ou senha incorretos. Tente novamente.</p>
					</div>
					<?php
						endif;
						unset($_SESSION['nao_autenticado']);
					?>
					<form name="form" method="post" action="entrar.php">
						<label for="email">Email:</label>
						<input type="email" name="email" id="email" required="required" placeholder="Insira seu email" />
						<label for="senha">Senha</label>
						<input type="password" name="senha" id="senha" required="required" placeholder="Insira o assunto" />
						<input type="submit" class="botao" name="entrar" value="Entrar" />
						<li><a href="#">Esqueceu sua senha?</a></li>
					</form>
				</div>
			</header>
			<div class="footer footer-login">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div>	
		</div>
	</body>
</html>
