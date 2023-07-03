<?php 

	require "../php/cdn.php";
	require "../php/functions.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Mukifu</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
	<meta name="theme-color" content="#FF7417">
	<meta name="apple-mobile-web-app-status-bar-style" content="#FF7417">
</head>
<body>
	<div class="contentAlign">
		<center>
			<h1 class="logo">mukifu.</h1>
			<p style="width: 90%">preencha com seus dados para criar uma conta no Mukifu</p>
			<form method="POST" action="#">
				<p class="input" for="nome">nome:</p>
				<input placeholder="insira o teu nome..." id="nome" type="nome" name="nome"><br>
				<p class="input" for="sobrenome">sobrenome:</p>
				<input placeholder="insira o teu sobrenome..." id="sobrenome" type="sobrenome" name="sobrenome"><br>
				<p class="input" for="email">email:</p>
				<input placeholder="insira o teu email..." id="email" type="email" name="email"><br>
				<p class="input" for="senha">senha:</p>
				<input placeholder="insira a tua senha..." id="senha" type="senha" name="senha"><br>
				<p class="input" for="repita-senha">repita a senha:</p>
				<input placeholder="repita a tua senha..." id="repita-senha" type="repita-senha" name="repita-senha"><br>
				<button>cadastrar</button>
				<p style="margin-top: 40px" onclick="route('../');" class="bottomIcons">já tem uma conta? faça login</p>
			</form>
		</center>
	</div>
</body>
</html>