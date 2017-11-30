<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="./css/index.css"/>
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	</head>
	<body>
		<h1 class="titulo">MySpace</h1>
		<div class="log">
			<h3 class="title">Cadastre-se</h3>
			<h3 id="titulo"> Não entrou no nosso espaço ainda?<br> Cadastre-se! </h3>
			<form action="cads.php" method="post" enctype="multipart/form-data">
				<input type="text" placeholder="Nome" name="nome" class="lado"/><br><br>
				<input type="text" placeholder="Sobrenome" name="sobrenome" class="lado"/></br></br>
				
				<label id="sexo">Sexo:</label>
				<input type="radio" name="sexo" id="sex" value="F"/>F
				<input type="radio" name="sexo" id="sex" value="M"/>M
				<input type="radio" name="sexo" id="sex" value="O"/>Outro</br></br>
				
				<input type="email" placeholder="Email" name="email" class="box" size="46"/></br></br><br>
				<input type="text" placeholder="Nome de usuário" name="username" class="box" size="46"/></br></br>
				
				<input type="password" placeholder="Senha" name="senha" class="box" size="18"/><br><br>
				<input type="password" placeholder="Confirmação da senha" name="csenha" class="box" size="21"/><br><br>
				
				<input type="file" name="perfil"/><br><br>
				<input type="file" name="fundo"/>
				
				</br></br>
				
				<input type="submit" value="Cadastrar" id="ent"/>
			</form><br>
			<button id="cadastro"><a href="index.php">Voltar</a></button>
		</div>
	</body>
</html>