<?php
// session_start();
include_once("../conexao.php");
include('verifica_login.php');
?>
<?php 

	$seu_id = $_SESSION['id_usuario'];

	$get_fisica1 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 1";
	$pontuacao_fisica1 = mysqli_query($conexao, $get_fisica1);

	$get_fisica2 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 2";
	$pontuacao_fisica2 = mysqli_query($conexao, $get_fisica2);

	$get_fisica3 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 3";
	$pontuacao_fisica3 = mysqli_query($conexao, $get_fisica3);

	$get_fisica4 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 4";
	$pontuacao_fisica4 = mysqli_query($conexao, $get_fisica4);

	$get_fisica5 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 5";
	$pontuacao_fisica5 = mysqli_query($conexao, $get_fisica5);

	$get_fisica6 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 6";
	$pontuacao_fisica6 = mysqli_query($conexao, $get_fisica6);

	$get_fisica7 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 7";
	$pontuacao_fisica7 = mysqli_query($conexao, $get_fisica7);


	while ($row_pontuacao_fisica1 = mysqli_fetch_assoc($pontuacao_fisica1)) {
		// echo "corretas: ";
		$corretas_fisica1 = $row_pontuacao_fisica1['qtd_questao_correta'];
		// echo "<br>";
		$erradas_fisica1 = $row_pontuacao_fisica1['qtd_questao_errada'];
	}

	while ($row_pontuacao_fisica2 = mysqli_fetch_assoc($pontuacao_fisica2)) {
		// echo "corretas: ";
		$corretas_fisica2 = $row_pontuacao_fisica2['qtd_questao_correta'];
		// echo "<br>";
		$erradas_fisica2 = $row_pontuacao_fisica2['qtd_questao_errada'];
	}

	while ($row_pontuacao_fisica3 = mysqli_fetch_assoc($pontuacao_fisica3)) {
		// echo "corretas: ";
		$corretas_fisica3 = $row_pontuacao_fisica3['qtd_questao_correta'];
		// echo "<br>";
		$erradas_fisica3 = $row_pontuacao_fisica3['qtd_questao_errada'];
	}

	while ($row_pontuacao_fisica4 = mysqli_fetch_assoc($pontuacao_fisica4)) {
		// echo "corretas: ";
		$corretas_fisica4 = $row_pontuacao_fisica4['qtd_questao_correta'];
		// echo "<br>";
		$erradas_fisica4 = $row_pontuacao_fisica4['qtd_questao_errada'];
	}

	while ($row_pontuacao_fisica5 = mysqli_fetch_assoc($pontuacao_fisica5)) {
		// echo "corretas: ";
		$corretas_fisica5 = $row_pontuacao_fisica5['qtd_questao_correta'];
		// echo "<br>";
		$erradas_fisica5 = $row_pontuacao_fisica5['qtd_questao_errada'];
	}

	while ($row_pontuacao_fisica6 = mysqli_fetch_assoc($pontuacao_fisica6)) {
		// echo "corretas: ";
		$corretas_fisica6 = $row_pontuacao_fisica6['qtd_questao_correta'];
		// echo "<br>";
		$erradas_fisica6 = $row_pontuacao_fisica6['qtd_questao_errada'];
	}

	while ($row_pontuacao_fisica7 = mysqli_fetch_assoc($pontuacao_fisica7)) {
		// echo "corretas: ";
		$corretas_fisica7 = $row_pontuacao_fisica7['qtd_questao_correta'];
		// echo "<br>";
		$erradas_fisica7 = $row_pontuacao_fisica7['qtd_questao_errada'];
	}

	$corretas_fisica = $corretas_fisica1 + $corretas_fisica2 + $corretas_fisica3 + $corretas_fisica4 + $corretas_fisica5 + $corretas_fisica6 + $corretas_fisica7;

	$erradas_fisica = $erradas_fisica1 + $erradas_fisica2 + $erradas_fisica3 + $erradas_fisica4 + $erradas_fisica5 + $erradas_fisica6 + $erradas_fisica7;


	$get_biologia1 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 8";
	$pontuacao_biologia1 = mysqli_query($conexao, $get_biologia1);

	$get_biologia2 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 9";
	$pontuacao_biologia2 = mysqli_query($conexao, $get_biologia2);

	$get_biologia3 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 10";
	$pontuacao_biologia3 = mysqli_query($conexao, $get_biologia3);

	$get_biologia4 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 11";
	$pontuacao_biologia4 = mysqli_query($conexao, $get_biologia4);

	$get_biologia5 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 12";
	$pontuacao_biologia5 = mysqli_query($conexao, $get_biologia5);

	$get_biologia6 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 13";
	$pontuacao_biologia6 = mysqli_query($conexao, $get_biologia6);

	$get_biologia7 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 14";
	$pontuacao_biologia7 = mysqli_query($conexao, $get_biologia7);


	while ($row_pontuacao_biologia1 = mysqli_fetch_assoc($pontuacao_biologia1)) {
		// echo "corretas: ";
		$corretas_biologia1 = $row_pontuacao_biologia1['qtd_questao_correta'];
		// echo "<br>";
		$erradas_biologia1 = $row_pontuacao_biologia1['qtd_questao_errada'];
	}

	while ($row_pontuacao_biologia2 = mysqli_fetch_assoc($pontuacao_biologia2)) {
		// echo "corretas: ";
		$corretas_biologia2 = $row_pontuacao_biologia2['qtd_questao_correta'];
		// echo "<br>";
		$erradas_biologia2 = $row_pontuacao_biologia2['qtd_questao_errada'];
	}

	while ($row_pontuacao_biologia3 = mysqli_fetch_assoc($pontuacao_biologia3)) {
		// echo "corretas: ";
		$corretas_biologia3 = $row_pontuacao_biologia3['qtd_questao_correta'];
		// echo "<br>";
		$erradas_biologia3 = $row_pontuacao_biologia3['qtd_questao_errada'];
	}

	while ($row_pontuacao_biologia4 = mysqli_fetch_assoc($pontuacao_biologia4)) {
		// echo "corretas: ";
		$corretas_biologia4 = $row_pontuacao_biologia4['qtd_questao_correta'];
		// echo "<br>";
		$erradas_biologia4 = $row_pontuacao_biologia4['qtd_questao_errada'];
	}

	while ($row_pontuacao_biologia5 = mysqli_fetch_assoc($pontuacao_biologia5)) {
		// echo "corretas: ";
		$corretas_biologia5 = $row_pontuacao_biologia5['qtd_questao_correta'];
		// echo "<br>";
		$erradas_biologia5 = $row_pontuacao_biologia5['qtd_questao_errada'];
	}

	while ($row_pontuacao_biologia6 = mysqli_fetch_assoc($pontuacao_biologia6)) {
		// echo "corretas: ";
		$corretas_biologia6 = $row_pontuacao_biologia6['qtd_questao_correta'];
		// echo "<br>";
		$erradas_biologia6 = $row_pontuacao_biologia6['qtd_questao_errada'];
	}

	while ($row_pontuacao_biologia7 = mysqli_fetch_assoc($pontuacao_biologia7)) {
		// echo "corretas: ";
		$corretas_biologia7 = $row_pontuacao_biologia7['qtd_questao_correta'];
		// echo "<br>";
		$erradas_biologia7 = $row_pontuacao_biologia7['qtd_questao_errada'];
	}

	$corretas_biologia = $corretas_biologia1 + $corretas_biologia2 + $corretas_biologia3 + $corretas_biologia4 + $corretas_biologia5 + $corretas_biologia6 + $corretas_biologia7;

	$erradas_biologia = $erradas_biologia1 + $erradas_biologia2 + $erradas_biologia3 + $erradas_biologia4 + $erradas_biologia5 + $erradas_biologia6 + $erradas_biologia7;



	$get_quimica1 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 15";
	$pontuacao_quimica1 = mysqli_query($conexao, $get_quimica1);

	$get_quimica2 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 16";
	$pontuacao_quimica2 = mysqli_query($conexao, $get_quimica2);

	$get_quimica3 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 17";
	$pontuacao_quimica3 = mysqli_query($conexao, $get_quimica3);

	$get_quimica4 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 18";
	$pontuacao_quimica4 = mysqli_query($conexao, $get_quimica4);

	$get_quimica5 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 19";
	$pontuacao_quimica5 = mysqli_query($conexao, $get_quimica5);

	$get_quimica6 = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 20";
	$pontuacao_quimica6 = mysqli_query($conexao, $get_quimica6);


	while ($row_pontuacao_quimica1 = mysqli_fetch_assoc($pontuacao_quimica1)) {
		// echo "corretas: ";
		$corretas_quimica1 = $row_pontuacao_quimica1['qtd_questao_correta'];
		// echo "<br>";
		$erradas_quimica1 = $row_pontuacao_quimica1['qtd_questao_errada'];
	}

	while ($row_pontuacao_quimica2 = mysqli_fetch_assoc($pontuacao_quimica2)) {
		// echo "corretas: ";
		$corretas_quimica2 = $row_pontuacao_quimica2['qtd_questao_correta'];
		// echo "<br>";
		$erradas_quimica2 = $row_pontuacao_quimica2['qtd_questao_errada'];
	}

	while ($row_pontuacao_quimica3 = mysqli_fetch_assoc($pontuacao_quimica3)) {
		// echo "corretas: ";
		$corretas_quimica3 = $row_pontuacao_quimica3['qtd_questao_correta'];
		// echo "<br>";
		$erradas_quimica3 = $row_pontuacao_quimica3['qtd_questao_errada'];
	}

	while ($row_pontuacao_quimica4 = mysqli_fetch_assoc($pontuacao_quimica4)) {
		// echo "corretas: ";
		$corretas_quimica4 = $row_pontuacao_quimica4['qtd_questao_correta'];
		// echo "<br>";
		$erradas_quimica4 = $row_pontuacao_quimica4['qtd_questao_errada'];
	}

	while ($row_pontuacao_quimica5 = mysqli_fetch_assoc($pontuacao_quimica5)) {
		// echo "corretas: ";
		$corretas_quimica5 = $row_pontuacao_quimica5['qtd_questao_correta'];
		// echo "<br>";
		$erradas_quimica5 = $row_pontuacao_quimica5['qtd_questao_errada'];
	}

	while ($row_pontuacao_quimica6 = mysqli_fetch_assoc($pontuacao_quimica6)) {
		// echo "corretas: ";
		$corretas_quimica6 = $row_pontuacao_quimica6['qtd_questao_correta'];
		// echo "<br>";
		$erradas_quimica6 = $row_pontuacao_quimica6['qtd_questao_errada'];
	}

	$corretas_quimica = $corretas_quimica1 + $corretas_quimica2 + $corretas_quimica3 + $corretas_quimica4 + $corretas_quimica5 + $corretas_quimica6;

	$erradas_quimica = $erradas_quimica1 + $erradas_quimica2 + $erradas_quimica3 + $erradas_quimica4 + $erradas_quimica5 + $erradas_quimica6;



	$get_pontuacao_correta = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 8";
	$pontuacao_correta = mysqli_query($conexao, $get_pontuacao_correta);

	$get_pontuacao_errada = "SELECT * FROM desempenho WHERE desempenho.id_usuario = $seu_id AND desempenho.id_questionario = 8";
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
			<!-- <div class="footer footer-size footer-interno">
				<footer>
					<span>&copy; 2021 - Terrális</span>
				</footer>
			</div> -->
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
				<li><a href="perfil.php">Abrir perfil</a></li>
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
			        datasets: [
			        // {
			        //     // label: 'Aproveitamento',
			        //     // borderColor: '#346b60',
			        //     // backgroundColor: 'transparent',
			        //     // data: [15, 10, 30],
			        //     // type: 'line',
			        //     // order: 1,
			        // },
			         {
			            label: 'Questões',
			            backgroundColor: 'rgba(85, 171, 160, 0.8)',
			            data: [<?php echo $corretas_biologia + $erradas_biologia ?>, <?php echo $corretas_fisica + $erradas_fisica ?>, <?php echo $corretas_quimica + $erradas_quimica ?>],
			            order: 2
			        }, {
			            label: 'Acertos',
			            backgroundColor: 'rgba(154, 204, 147, 0.8)',
			            data: [<?php echo $corretas_biologia ?>, <?php echo $corretas_fisica ?>, <?php echo $corretas_quimica ?>],
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
			    data: [<?php echo $corretas_biologia ?>, <?php echo $erradas_biologia ?>]
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
			    data: [<?php echo $corretas_fisica ?>, <?php echo $erradas_fisica ?>]
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
			    data: [<?php echo $corretas_quimica ?>, <?php echo $erradas_quimica ?>]
			    // data: [14, 10]
			    }]
			  },
			    options: {}
			});
		</script>

	</body>
</html>