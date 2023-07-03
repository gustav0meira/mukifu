<?php 

	require "../php/cdn.php";
	require "../php/functions.php";
	require "../php/sql.php";
	require "../php/menu.php";
	require "../php/vars.php";

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel | Mukifu</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bills.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/assignature.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/painel.css">
	<meta name="theme-color" content="#fff">
	<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
</head>
<body>
	<div class="content">
		<div class="row">
			<div class="col-6">
				<h1 class="logo align">mukifu.</h1>
			</div>
			<div id="openIcon" style="text-align: right;" class="col-6">
				<i class="fa-solid fa-bars menuIcon align"></i>
			</div>
		</div>
		<div style="margin-top: 20px;" class="row">
			<div class="col-9">
				<input placeholder="pesquise aqui" class="search" type="text" name="search">
			</div>
			<div class="col-3">
				<button class="plus">
					<label>+</label>
				</button>
			</div>
		</div>
		<div style="margin-top: 30px;" class="row">
			<div class="col-12">
				<div class="row mouth">
					<?php 
					$meses = array( 1 => 'janeiro', 2 => 'fevereiro', 3 => 'março', 4 => 'abril', 5 => 'maio', 6 => 'junho', 7 => 'julho', 8 => 'agosto', 9 => 'setembro', 10 => 'outubro', 11 => 'novembro', 12 => 'dezembro' );
					$mesAtual = date('n');
					$nomeMes = $meses[$mesAtual];
					?>
					<div class="col-4">
						<center><a class="beforeAndNext" href="?month=<?php if (!isset($_GET['month'])) {echo beforeMonth($nomeMes);} else{ echo beforeMonth($_GET['month']); }; ?>"><p><</p></a></center>
					</div>
					<div class="col-4">
						<center>
							<p><?php if (!isset($_GET['month'])) {echo $nomeMes;} else{ echo $_GET['month']; }; ?></p>
						</center>
					</div>
					<div class="col-4">
						<center><a class="beforeAndNext" href="?month=<?php if (!isset($_GET['month'])) {echo nextMonth($nomeMes);} else{ echo nextMonth($_GET['month']); }; ?>"><p>></p></a></center>
					</div>
				</div>
				<div class="module">
				<?php
				if (!isset($_GET['month'])) {
				    $month = $nomeMes;
				} else {
				    $month = $_GET['month'];
				}
				$initialDate = initialDate($month);
				$finishDate = finishDate($month);
				$consulta = "SELECT * FROM bills WHERE payday BETWEEN '$initialDate' AND '$finishDate' ORDER BY id DESC LIMIT 15";
				$con = $conn->query($consulta) or die($conn->error);
				while ($dado = $con->fetch_array()) {
				    ?>
				    <div class="row listBills">
				        <div class="col-12">
				            <input id="checkboxBill<?php echo $dado['id'] ?>" class="align" type="checkbox" name="checkboxBill<?php echo $dado['id'] ?>">
				            <label for="checkboxBill<?php echo $dado['id'] ?>" class="checkbox align">R$ <?php echo number_format($dado['amount'], 2, ',', '.'); ?> - <?php echo $dado['name'] ?></label>
				        </div>
				    </div>
				    <?php
				}
				?>
				</div>
			</div>
		</div>
		<div class="row copy">
			<center>
				<h1 class="logo">mukifu.</h1>
				<p>All rights reserved by The Circle ©</p>
			</center>
		</div>
	</div>
<script>
  const menuIcon = document.getElementById('openIcon');
  const menu = document.getElementById('menu');
  const closeIcon = document.getElementById('closeIcon'); // Seleciona o elemento do ícone de fechar

  closeIcon.addEventListener('click', function() {
    menu.classList.toggle('menuOpen');
  });
  menuIcon.addEventListener('click', function() {
    menu.classList.toggle('menuOpen');
  });
</script>
</body>
</html>