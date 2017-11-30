<!DOCTYPE html>
<html>
	<head>
		<title>MySpace</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="./css/index.css"/>
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Macondo+Swash+Caps" rel="stylesheet">
	</head>
	<body>
		<h1 class="titulo">MySpace</h1>
		<div class="log">
			<h2 class="title">Login</h2>
			<div class="descri"><p class="des"> MySpace é uma rede social para a melhor interação entre os amigos.É facíl, rápido e interativo.</p></div>
			<form action="loginphp.php" method="post">
				<input type="text" placeholder="Nome de usuário" name="username" class="box"/></br></br>
				<input type="password" placeholder="Senha" name="senha" class="box"/></br></br>
				<a href="home.php"><input type="submit" value="Entrar" id="entrar"/></a>
			</form><br>
			<button id="cadastro"><a href="cadastrar.php">Cadastrar-se</a></button>
		</div>
	</body>
</html>