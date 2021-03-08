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
	<body class="inverso">
		<div class="divisao-branco">
			<header>
				<div class="menu-cadastro">
					<li><a href="index.html">Início</a></li>
				</div>
				<li class="botao-meio-cadastro"><a href="login.php">&ltrif; Conecte-se</a></li>
				<div class="logo-cadastro">
					<img src="img/logo fundo branco.jpeg">
				</div>
			</header>	
		</div>
		<div class="coluna col7 form-cadastro">
			<h2>Cadastre-se</h2>
			<?php
				if ($_SESSION['status_cadastro']):
			?>
			<div class="cadastro-efetuado">
				<p>Cadastro efetuado com sucesso!</p>
				<p>Faça login informando seu email e senha <a href="login.php">aqui</a>.</p>
			</div>
			<?php 
				endif;
				unset($_SESSION['status_cadastro']);
				$_SESSION['status_cadastro'] = false;
			?>
			<?php
				if ($_SESSION['usuario_existe']):
			?>
			<div class="erro-cadastro">
				<p>O email informado já possui cadastro.</p>
				<p>Informe outro email, ou acesse sua conta <a href="login.php">aqui</a>.</p>
			</div>
			<?php 
				endif;
				unset($_SESSION['usuario_existe']);
				$_SESSION['usuario_existe'] = false;
			?>
			<form method="post" action="processa.php">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome" required="required" placeholder="Insira seu nome" />
				<label for="sobrenome">Sobrenome:</label>
				<input type="text" name="sobrenome" id="sobrenome" required="required" placeholder="Insira seu sobrenome" />
				<label for="datanascimento">Data de nascimento:</label>
				<input type="date" name="datanascimento" id="datanascimento" required="required" placeholder="Insira sua data de nascimento" />
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" required="required" placeholder="Insira seu email" />
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha" required="required" placeholder="Insira uma senha" />
				<!-- <label for="confirmarsenha">Confirmar senha</label>
				<input type="password" name="confirmarsenha" id="confirmarsenha" required="required" placeholder="Confirme sua senha" /> -->
				<div>
					<input type="checkbox" name="politicas-de-privacidade" required="required" id="politicas">
					<label for="politicas">Declaro que li e concordo com as <a href="#politicas-de-privacidade">Políticas de Privacidade</a></label>
				</div>
				<input type="submit" class="botao" value="Cadastrar" />
			</form>
			<div id="politicas-de-privacidade" class="politicas-de-privacidade">
				<div class="politicas">
					<a href="" class="btn-close" id="close"><strong>x</strong></a>
					<div>
						<h4>SEÇÃO 1 - CONSENTIMENTO</h4>
						<p>Como vocês obtêm meu consentimento?
						Quando você fornece informações pessoais como nome, telefone e endereço, entendemos que você está de acordo com a coleta de dados para serem utilizados pela nossa plataforma.<br>
						Se pedimos por suas informações pessoais por uma razão secundária, como marketing, vamos lhe pedir diretamente por seu consentimento, ou lhe fornecer a oportunidade de dizer não.
						E caso você queira retirar seu consentimento, como proceder?<br>
						Se após você nos fornecer seus dados, você mudar de ideia, você pode retirar o seu consentimento para que possamos entrar em contato, para a coleção de dados contínua, uso ou divulgação de suas informações, a qualquer momento, entrando em contato conosco em <strong>terralis.contato@gmail.com</strong></p>

						<h4>SEÇÃO 2 - DIVULGAÇÃO</h4>
						<p>Podemos divulgar suas informações pessoais caso sejamos obrigados pela lei para fazê-lo ou se você violar nossos Termos de Serviço.</p>

						<h4>SEÇÃO 3 - SEGURANÇA</h4>
						<p>Para proteger suas informações pessoais, tomamos precauções razoáveis e seguimos as melhores práticas da indústria para nos certificar que elas não serão perdidas inadequadamente, usurpadas, acessadas, divulgadas, alteradas ou destruídas.<br>
						Se você nos fornecer seus dados, essa informação será criptografada usando tecnologia "secure socket layer" (SSL) e armazenada com uma criptografia MD5. Ainda assim, ressaltamos que nenhum método de armazenamento eletrônico seja 100% seguro.</p>
						<h4>SEÇÃO 4 - ALTERAÇÕES PARA ESSA POLÍTICA DE PRIVACIDADE</h4>
						<p>Reservamos o direito de modificar essa política de privacidade a qualquer momento, então por favor, revise-a com frequência. Alterações e esclarecimentos vão surtir efeito imediatamente após sua publicação no site. Se fizermos alterações de materiais para essa política, iremos notificá-lo aqui que eles foram atualizados, para que você tenha ciência sobre quais informações coletamos, como as usamos, e sob que circunstâncias, se alguma, usamos e/ou divulgamos elas.</p>
					</div>
				</div>
			</div>
			<div class="footer footer-logon">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div>	
		</div>
	</body>
</html>
