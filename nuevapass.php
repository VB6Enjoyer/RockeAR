<?php
	require_once 'db/db.php';
	// Acá verificá si la respuesta dada es correcta, si no que retorne a la anterior página obviamente. Debería ser bastante simple.

	// Después debería mandar la nueva contraseña (si queres cambiá la ID por otra si te parece) a verificacion.php para reemplazar la original.

	// Ah y che, ni idea con los <div>, los pongo donde me parece util que se separe el código pero francamente ni se donde conviene ponerlos.
	// div everywhere

	if(!$_POST)
	{
		header("location: recuperar.php");
	}

	$usuario = getByID("usuarios", $_POST['userID']); 

	if($usuario['preg_sec'] != md5($_POST['preguntaSec'])|| $usuario['rspta_sec'] != md5($_POST['respuesta']))
	{
		header("location: recuperar2.php?error=preg");
		die("La Respuesta no coincide");
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RockeAR | Restaurar contraseña</title>
	<link rel="icon" type="imagen/vnd.microsoft.icon" href="img/favicon.ico">
	 	<!--===================================
		=            STYLESHEETS            =
		===================================-->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
			<link rel="stylesheet" href="css/estilos.css">
			<script src="https://use.fontawesome.com/a955090ffa.js"></script>	
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--=====  End of STYLESHEETS  ======-->
</head>

<body style="background-color: lightblue; color: #ffffff" >
		<!--==================================
		=            ENCABEZADO            =
		==================================-->

		 	<div class="login">
				<style>
					.login { /*Fila RockeAR Login*/
						background-color: black;
						height: 100px; 
						text-align: center;
					}
					.login img{ /*Imagen logo*/
						margin-top: 10px; 
						width: 210px; 
						height: 80%; 
					}
				</style>

				<a href="index.php">
					<img src="img/logo2.png" alt="logo2"/>
				</a>
			</div>

		<!--=====  End of ENCABEZADO  ======-->

		<br><br>

		<!--==========================================
		=            FORM RESTAURARPASS            =
		==========================================-->
		
		
		
		<!--=====  End of FORM RESTAURARPASS  ======-->
		

		<div class="restaurarpass">
			<style>
				.restaurarpass {
					background-color: black;
					color: white;
					padding: 100px 0;
					width:50%;
					border: 3px solid white; 
					text-align: center;
					margin: auto;
					margin-bottom: 5%;
				}
				.alert {
					margin: auto;
					width: 50%;
					margin-bottom: 5%;
				}
			</style>
				<p style="font-size:22px"><b>Escribí tu nueva contraseña:</b></p>

				<form action="verificacion.php?action=update" method="POST">
					<input type="password" id="passwordRec" placeholder="Contraseña" name="passwordRec"> <br> <br>
					<input type="password" id="passwordRecVer" placeholder="Reingresar Contraseña" name="passwordRecVer"> <br> <br>
					<input type="hidden" name="userID" value="<?= $usuario['id'] ?>">
					<input type="hidden" name="tabla" value="usuarios">
					<input type="submit" value="Continuar" class="btn btn-outline-light"> <br> <br>
					<a href="login.php" class="btn btn-outline-light btn-sm active" role="button" aria-pressed="true">Recordé mi contraseña</a>
				</form>
			</div>
		</center>
	<div>
	<?php if(isset($_GET['update']) && $_GET['update'] = "error"):?>
		<div class="alert alert-dark alert-dismissible fade show" role="alert">
			Las contraseñas no coinciden
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>		
		</div>
	<?php endif;?>
</body>
</html>

			