<?php
session_start();
include_once("../conexao.php");
?>
<?php 
	$get_pontuacao_correta = "SELECT * FROM desempenho WHERE desempenho.id_usuario =1 AND desempenho.id_questionario = 8";
	$pontuacao_correta = mysqli_query($conexao, $get_pontuacao_correta);

	$get_pontuacao_errada = "SELECT * FROM desempenho WHERE desempenho.id_usuario =1 AND desempenho.id_questionario = 8";
	$pontuacao_errada = mysqli_query($conexao, $get_pontuacao_errada);

	while ($row_pontuacao_correta = mysqli_fetch_assoc($pontuacao_correta)) {
		// echo "corretas: ";
		$corretas = $row_pontuacao_correta['qtd_questao_correta'];
		// echo "<br>";
	}
	while ($row_pontuacao_errada = mysqli_fetch_assoc($pontuacao_errada)) {
		// echo "erradas: ";
		$erradas = $row_pontuacao_errada['qtd_questao_errada'];
	}
?>

<?php
	
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
						<li class="pagina-atual-verde"><a href="desempenho.php">Desempenho</a></li>
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
		<div class="graphics">
			<h3>Monitoramento de desempenho</h3>
			<div class="graphic-general">
				<canvas class="bar-line" id="myChart"></canvas>
			</div>
			<h4>Desempenho por componente curricular</h4>
			<div class="individual">
				<div class="graphic-individual">
					<legend>Biologia</legend>
					<canvas class="donut" id="bio"></canvas>
				</div>
				<div class="graphic-individual">
					<legend>Física</legend>
					<canvas class="donut" id="fis"></canvas>
				</div>
				<div class="graphic-individual">
					<legend>Química</legend>
					<canvas class="donut" id="qui"></canvas>
				</div>
			</div>
			<div class="footer footer-size footer-desempenho">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div>
		</div>

		<script src="../js/pesquisa.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<!-- <script src="../js/desempenho/graphics.js"></script> -->
		<script type="text/javascript">
			//geral//
			var ctx = document.getElementById('myChart').getContext('2d');
			var mixedChart = new Chart(ctx, {
			    type: 'bar',

			   data: {
			        datasets: [{
			            label: 'Aproveitamento',
			            borderColor: '#346b60',
			            backgroundColor: 'transparent',
			            data: [15, 10, 30],
			            type: 'line',
			            order: 1,
			        }, {
			            label: 'Questões',
			            backgroundColor: 'rgba(85, 171, 160, 0.8)',
			            data: [10, 20, 30],
			            order: 2
			        }, {
			            label: 'Acertos',
			            backgroundColor: 'rgba(154, 204, 147, 0.8)',
			            data: [10, 20, 30],
			            order: 3
			        }],
			        labels: ['Biologia', 'Física', 'Química']
			    },
			    options: {
			    	maintainAspectRatio: false,
			    	scales: {
			      yAxes: [{
			      	display: true,
			        id: 'A',
			        type: 'linear',
			        position: 'left',
			        ticks:{
			        	beginAtZero: true
			        }
			      }]
			    }
			}
			});

			//biologia//
			var ctx = document.getElementById('bio').getContext('2d');
			var chart = new Chart(ctx, {
			type: 'doughnut',

			data: {
			    labels: ['Acertos', 'Erros'],
			    datasets: [{
			    label: 'My First dataset',
			    backgroundColor: ['#346b60', '#c1c1c1'],
			    borderColor: 'white',
			    data: [<?php echo $corretas ?>, <?php echo $erradas ?>]
			    }]
			  },
			    options: {}
			});
			//física//
			var ctx = document.getElementById('fis').getContext('2d');
			var chart = new Chart(ctx, {
			type: 'doughnut',

			data: {
			    labels: ['Acertos', 'Erros'],
			    datasets: [{
			    label: 'My First dataset',
			    backgroundColor: ['#346b60', '#c1c1c1'],
			    borderColor: 'white',
			    data: [7, 10]
			    }]
			  },
			    options: {}
			});
			//química//
			var ctx = document.getElementById('qui').getContext('2d');
			var chart = new Chart(ctx, {
			type: 'doughnut',

			data: {
			    labels: ['Acertos', 'Erros'],
			    datasets: [{
			    label: 'My First dataset',
			    backgroundColor: ['#346b60', '#c1c1c1'],
			    borderColor: 'white',
			    data: [14, 10]
			    }]
			  },
			    options: {}
			});
		</script>

	</body>
</html>