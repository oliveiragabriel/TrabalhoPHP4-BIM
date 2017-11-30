<?php
	require_once "bancodedados.php";
	session_start();
		
	if(isset($_SESSION['usuario'])&& !isset($_GET['uid'] ))
	{
		$u = $_SESSION['usuario'];
	}
	else if(isset($_SESSION['usuario'])&& isset($_GET['uid'] ))
	{
		$u = bd_obter_usuario_por_id( $con, $_GET['uid'] );
		if(!$u){
			header('location:erro.php');
			die();
		}

	}
	else if(!isset($_SESSION['usuario'])&& isset($_GET['uid'] ))
	{
		$u = bd_obter_usuario_por_id( $con, $_GET['uid'] );
		if(!$u){
		header('location:erro.php');

			die();
		}
	}
	else
	{
		header('location:erro.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MySpace</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="./css/home1.css"/>
		<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Vollkorn+SC" rel="stylesheet">

	</head>
	<body>
	<img class="fundo" src= <?php  echo '"dados/'.$u['apelido'].'/fundo.jpg"'?>/>
	<img class="perfil" src= <?php echo '"dados/'.$u['apelido'].'/perfil.jpg"'?>/>
		<div class="sobre">
			<h2> <?php echo $u['apelido'];	?> </h2>
			<label>Nome:  <?php echo $u['nome']; ?><br><br>
			<label>Sobrenome: <?php echo $u['sobrenome']; ?><br><br>
			<label>Sexo:  <?php echo $u['sexo'];	?><br><br>
		    <label>Email: <?php echo $u['email']; ?><br><br>
		    <button id="cadastro"><a href="logout.php">Sair</a></button>
		</div>

	<?php 
	if(isset($_SESSION['usuario']) && isset($_GET['uid'] ))
	{ 
		if(!bd_verificar_amizade_existe( $con, $_SESSION['usuario'],[ 'id' => $_GET['uid'] ])){
	?>
	<form action="funcaoadd.php" method="get">
		<input type="submit" class="cadastro" value="Adicionar" name="add"/></br></br>
		<input type="hidden" name="uid" value=<?php echo '"'.$_GET['uid'].'"';?>/>
		
	</form>
	<?php 
		}
		else{
			echo "Esse contato já está na sua lista de amigos";
		}
	?>	
	<?php 
	}
	
	if(isset($_SESSION['usuario']))
	{
		//if( isset( $_GET[ 'uid' ] ) )
		//	$u = bd_obter_usuario_por_id( $con, $_GET['uid'] );
		//else
		//	$u = $_SESSION[ 'usuario' ];
		//var_dump( $_SESSION['usuario'] );
		$amigos=bd_obter_amigos_usuario( $con, $u );
	?>
		
		<p id="friends">Amigos</p>
		
		<?php 
		foreach ($amigos as $amigo)
		{
		?>
		
		<div class="tudo">
			<div id="amigo">
				<h3 id="namefriend"><?php echo $amigo['nome'];?></h3><br>
			</div>
			<div class="ftamigo">
				<img class="image" src="./dados/<?php echo $amigo['apelido'] ?>/perfil.jpg"/>
			</div>
		</div>
		<?php
		}
	}
	?>
	 
	</ul>
	
	</body>
</html>