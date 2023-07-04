<?php 

	require "../php/cdn.php";
	require "../php/functions.php";
	require "../php/sql.php";
	require "../php/vars.php";
	require "../php/menu.php";

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
				<h1 class="welcome">
					<?php
					date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para São Paulo

					$hora = date('H'); // Obtém a hora atual

					if ($hora >= 6 && $hora < 12) {
					    echo 'Bom dia! ⛅';
					} elseif ($hora >= 12 && $hora < 18) {
					    echo 'Boa tarde! 🌅';
					} else {
					    echo 'Boa noite! 🌙';
					}
					?>
				</h1>
			</div>
			<div style="margin-top: 5px;" class="col-12">
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
							<input <?php if ($dado['status'] == 'comprado') {echo 'checked';} ?> id="checkbox<?php echo $dado['id'] ?>" class="align" type="checkbox" name="checkbox<?php echo $dado['id'] ?>" data-id="<?php echo $dado['id'] ?>" data-table="shopping">
							<label for="checkbox<?php echo $dado['id'] ?>" class="checkbox align"><?php echo $dado['name'] ?></label>
						</div>
					</div>
					<?php } ?>
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
							<input <?php if ($dado['status'] == 'comprado') {echo 'checked';} ?> id="checkboxBill<?php echo $dado['id'] ?>" class="align" type="checkbox" name="checkboxBill<?php echo $dado['id'] ?>" data-id="<?php echo $dado['id'] ?>" data-table="bills">
							<label for="checkboxBill<?php echo $dado['id'] ?>" class="checkbox align">R$ <?php echo number_format($dado['amount'], 2, ',', '.'); ?> - <?php echo $dado['name'] ?></label>
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

  // Função para enviar a requisição AJAX e atualizar o status
  function updateStatus(id, table, status) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../php/update-status.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Atualizar o estado do checkbox ou realizar outras ações necessárias
        console.log(xhr.responseText);
      }
    };
    xhr.send('id=' + id + '&table=' + table + '&status=' + status);
  }

  // Adicionar evento de clique para os checkboxes
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('click', function() {
      const id = this.getAttribute('data-id');
      const table = this.getAttribute('data-table');
      const status = this.checked ? 'true' : 'false';
      updateStatus(id, table, status);
    });
  });
</script>
</body>
</html>