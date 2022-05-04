<?php	
	require_once 'db/db.php';
	session_start();
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RockeAR | Registrarse</title>
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

		<!--=====================================
		=            FORM REGISTRO            =
		=====================================-->
		
		  <div class="register">
		  	<style>
		  		.register {
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
				<p style="font-size:22px"><b>REGISTRARSE EN ROCKEAR</b></p>
					<form action="verificacion.php?action=signup" method="post">
							<label for="nombrereal">Nombre:</label><br>
							<input type="text" id="nombrereal" name="nombrereal" placeholder="Nombre"><br><br>
							Ingresá tu nombre de usuario:<br>
							<input type="text" id="usuario" name="usuario" placeholder="Usuario"  
								value="<?php
									if(isset($_SESSION['usuarioNew']))
										echo $_SESSION['usuarioNew'];
								?>"
							required> <br> <br>
							Ingresá tu contraseña: <br>
							<input type="password" id="passwordNew" placeholder="Contraseña" name="passwordNew" required> <br> <br>
							Verificá tu contraseña: <br>
							<input type="password" id="passwordVer" placeholder="Contraseña" name="passwordVer" required> <br> <br> 
							Pregunta secreta: <br>
							<select name="preguntaNewSec"> <br>
									<option value="pregunta1" <?php 
										if(isset($_SESSION['preguntaSec']) && $_SESSION['preguntaSec'] == "pregunta1")
											echo "selected";
									?>>¿Cual era tu mejor amigo de la infancia?</option>
									<option value="pregunta2" <?php 
										if(isset($_SESSION['preguntaSec']) && $_SESSION['preguntaSec'] == "pregunta2")
											echo "selected";
									?>>¿Como se llamaba tu segunda mascota?</option>
									<option value="pregunta3" <?php 
										if(isset($_SESSION['preguntaSec']) && $_SESSION['preguntaSec'] == "pregunta3")
											echo "selected";
									?>>¿A que escuela primaria asististé?</option>
									<option value="pregunta4" <?php 
										if(isset($_SESSION['preguntaSec']) && $_SESSION['preguntaSec'] == "pregunta4")
											echo "selected";
									?>>¿Cual es el segundo nombre de tu madre?</option>
									<option value="pregunta5" <?php 
										if(isset($_SESSION['preguntaSec']) && $_SESSION['preguntaSec'] == "pregunta5")
											echo "selected";
									?>>¿En que año nació tu padre?</option>
									<option value="pregunta6" <?php 
										if(isset($_SESSION['preguntaSec']) && $_SESSION['preguntaSec'] == "pregunta6")
											echo "selected";
									?>>¿Que está escrito en tu remera favorita?</option>
					 		</select>
							<input type="text" id="rsptaNewSec" placeholder="Respuesta" name="rsptaNewSec" value="<?php
								if(isset($_SESSION['preguntaSecRsta']))
									echo $_SESSION['preguntaSecRsta'];
							?>" required> <br> <br>
					 		Verificá que no sos un robot: <br>
					 		<?php 
							$num1 = rand(1,5);
						 	$num2 = rand(1,5);
						 	$verificacionRobot = $num1 + $num2;
						 	echo $num1. '+' .$num2;
							?>
							<input type="hidden" name="verRsptaCorrecta" value="<?= $verificacionRobot ?>"><!-- Respuesta Correcta -->
						 	<input type="number" id="verificacionRspta" placeholder="Respuesta" name="verificacionRspta"> <!-- envio de respuesta del usuario --> <br> <br>
							<input type="submit" value="Registrarse" class="btn btn-outline-light"> <br> <br>
					</form>
					<?php session_destroy(); ?>
					<a href="login.php" class="btn btn-outline-light btn-sm active" role="button" aria-pressed="true">Ya tengo una cuenta</a>
		  </div>		
		
		<!--=====  End of FORM REGISTRO  ======-->
</body>
</html>

		<?php if(isset($_GET['signup'])):
						switch($_GET['signup']) 
						{
							case "error01": ?>
								<div class="alert alert-dark alert-dismissible fade show" role="alert">
								El nombre de usuario ya está en uso
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>		
								</div>
								<?php break; 
							case "error02": ?>
								<div class="alert alert-dark alert-dismissible fade show" role="alert">
								Las contraseñas no coinciden
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>		
								</div>
								<?php break; 
							case "error03": ?>
								<div class="alert alert-dark alert-dismissible fade show" role="alert">
								¿Acaso sos un robot?
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>		
								</div>
								<?php break;
						}
					?>
		<?php endif;?>