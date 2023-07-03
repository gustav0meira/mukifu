<?php 

	require "../php/cdn.php";
	require "../php/functions.php";
	require "../php/sql.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel | Mukifu</title>
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
		<div class="row">
			<div class="col-12">
				<h1 class="welcome">bom dia, Gustavo! ⛅</h1>
			</div>
			<div class="col-6">
				<div class="module">
					<h1 class="titleHeader"></h1>
					
				</div>
			</div>
			<div class="col-6">
				<div class="module">
					<h1 class="titleHeader"></h1>
					
				</div>
			</div>
			<div class="col-12">
				<div class="module">
					<div style="margin-bottom: 15px;" class="row">
						<div class="col-8">
							<h1 class="titleHeader align">contas a pagar 🧾</h1>
						</div>
						<div style="text-align: right;" class="col-4">
							<a href="../bills"><label class="linkHeader align">(ver tudo)</label></a>
						</div>
					</div>
					<?php
					$consulta = "SELECT * FROM bills ORDER BY id DESC LIMIT 15";
					$con = $conn->query($consulta) or die($conn->error);
					while($dado = $con->fetch_array()) { ?>
					<div class="row listBills">
						<div class="col-12">
							<input id="checkboxBill<?php echo $dado['id'] ?>" class="align" type="checkbox" name="checkboxBill<?php echo $dado['id'] ?>">
							<label for="checkboxBill<?php echo $dado['id'] ?>" class="checkbox align">R$ <?php echo number_format($dado['amount'], 2, ',', '.'); ?> - <?php echo $dado['name'] ?></label>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-12">
				<div class="module">
					<div class="row">
						<div class="col-8">
							<h1 class="titleHeader align">lista de compras 📝</h1>
						</div>
						<div style="text-align: right;" class="col-4">
							<a href="../shopping"><label class="linkHeader align">(ver tudo)</label></a>
						</div>
					</div>
					<?php
					$consulta = "SELECT * FROM shopping ORDER BY id DESC LIMIT 15";
					$con = $conn->query($consulta) or die($conn->error);
					while($dado = $con->fetch_array()) { ?>
					<div class="row listBills">
						<div class="col-12">
							<input id="checkbox<?php echo $dado['id'] ?>" class="align" type="checkbox" name="checkbox<?php echo $dado['id'] ?>">
							<label for="checkbox<?php echo $dado['id'] ?>" class="checkbox align"><?php echo $dado['name'] ?></label>
						</div>
					</div>
					<?php } ?>
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
<div id="menu" class="menu">
	<div class="menuContent">
		<div class="row">
			<div class="col-6">
				<h1 class="logoWhite align">mukifu.</h1>
			</div>
			<div id="closeIcon" style="text-align: right;" class="col-6">
				<i style="padding: 0px !important;" class="fa-solid fa-xmark menuIcon align"></i>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="social">
					<div class="row">
						<div class="col-4">
							<div style="background: url('../assets/img/no-picture.png');" class="pp align"></div>
						</div>
						<div class="col-8">
							<label class="align">@gustavo</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<hr>
				<a href="./">
					<label class="menuLink">painel</label>
				</a><br>
				<a href="../bills">
					<label class="menuLink">organizar contas</label>
				</a><br>
				<a href="../shopping">
					<label class="menuLink">lista de compras</label>
				</a><br>
				<a href="../assignature">
					<label class="menuLink">assinaturas</label>
				</a><br>
				<a href="../callendar">
					<label class="menuLink">calendário</label>
				</a><br>
				<hr>
				<i class="fa-brands fa-whatsapp socialIcon"></i>
				<i class="fa-brands fa-instagram socialIcon"></i>
			</div>
		</div>
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