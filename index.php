<?php 

	require "php/cdn.php";
	require "php/functions.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Mukifu</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<meta name="theme-color" content="#FF7417">
	<meta name="apple-mobile-web-app-status-bar-style" content="#FF7417">
</head>
<body>
	<div class="contentAlign">
		<center>
			<h1 class="logo">mukifu.</h1>
			<p style="width: 90%">entre com e-mail e senha e acesse o seu app de gestão domiciliar...</p>
			<form method="POST" action="./painel/">
				<p class="input" for="email">email:</p>
				<!-- todo: colocar required -->
				<input placeholder="insira o teu e-mail..." id="email" type="email" name="email"><br>
				<p class="input" for="password">senha:</p>
				<!-- todo: colocar required -->
				<input placeholder="insira a tua senha..." id="password" type="password" name="password"><br>
				<button>entrar</button>
				<img class="socialIcons" src="assets/img/google-icon.png">
				<img class="socialIcons" src="assets/img/apple-icon.png">
				<p onclick="route('cadastrar');" class="bottomIcons">não tem uma conta? cadastre-se</p>
				<p onclick="route('esqueci-senha');" class="bottomIcons">esqueci a minha senha</p>
			</form>
		</center>
	</div>
</body>
</html>