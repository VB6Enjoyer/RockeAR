<?php
	session_start();
	require_once 'db/banda.php';

	if(!isset($_SESSION['usuarioID'])){
		header("location: login.php");
	}

	$sesion = getByID("usuarios", $_SESSION['usuarioID']);
	
	$bandas = getAll("bandas");
	$bandaAleatoria = getRandomArtist();
	$lugar = getAll("lugares");
?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.center {
	  	text-align: center;
		}
	</style>
	<style>
		.center2 {
		  margin: auto;
		  width: 40%;
		  border: 3px solid black;
		  padding: 10px;
		}
	</style>
	<title>RockeAR | Añadir un lugar</title>
	<link rel="icon" type="imagen/vnd.microsoft.icon" href="img/favicon.ico">
	 	<!--===================================
		=            STYLESHEETS            =
		===================================-->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
			<link rel="stylesheet" href="css/estilos.css">
			<script src="https://use.fontawesome.com/a955090ffa.js"></script>	
		<!--=====  End of STYLESHEETS  ======-->
</head>

	<body style="background-color: lightblue; color: #ffffff" >
		<!--=======================================
		=            LISTA DE ICONOS            =
		=======================================-->

			<div class="redes">
				<style type="text/css">
					.redes{ /*Apartado de Redes*/
						background-color: black; /*Color de fondo*/
						height:50px; /*Alto*/
						border-bottom: 1px solid white; /*Borde(fondo de la columna)*/
					}
					.social{ /*Posicionamiento de la li de iconos*/
						float: right; /*Ubicacion*/
						margin-top: 0.3%; /*Margen superior*/
						margin-right: 0.1% /*Margen derecho*/
					}
					.social li a { /*Diseño de la lista de iconos*/
						color: #444445; /*Color general*/
						line-height: 30px; /*Altura entre iconos o texto en general*/
						text-align: center; /*Alineamiento de texto*/
						font-size: 25px; /*Tamaño de fuente*/
						border: 1px solid #000000; /*Borde que enmarca el icono*/
						height: 34px; /*Alto*/
						width: 34px; /*Ancho*/
						display: block; /*Forma de visualizacion*/
						text-decoration: none; /*No recibe decoraciones de texto*/
					}
					.social li { /*Forma de lista*/
						display: inline-block; 
						padding: 2.5px; /*Espacio de relleno*/
					}
					.social li:hover a {/*Al colocar mouse por encima*/
						color: white; /*Cambio de color*/
					}
					.fa-instagram:before { /*Imprime icono, despues de encontrarlo*/
						content: "\f16d";
					}
				</style>


				<ul class="social">
					<li><a href="https://www.instagram.com/laureana.cs/"><span class="fa fa-instagram"></span></a></li>
					<li><a href="https://www.instagram.com/juanoidex/"><span class="fa fa-instagram"></span></a></li>
					<li><a href="https://www.instagram.com/luckasakino/"><span class="fa fa-instagram"></span></a></li>
				</ul>

			</div>

		<!--=====  End of LISTA DE ICONOS  ======-->

		<!--==================================
		=            ENCABEZADO            =
		==================================-->

		 	<div class="rockear">
				<style>
					.rockear { /*Fila RockeAR*/
						background-color: black;
						height: 100px; 
					}
					.rockear img{ /*Imagen logo*/
						margin-top: 10px; 
						width: 210px; 
						height: 80%; 
						float:left;
					}
					.right { /*Texto "entrar o registrarse"*/
						margin-top: 2.3%;
						float: right; 
					}
					.right a{ /*Botones de links*/
						background-color:#ffffff; 
						color: gray; 
						border: 3px solid lightblue; 
						padding: 5px 10px; 
						text-align: center; 
						text-decoration: none; 
						display: inline-block; 
					}
					a.a:hover{ /*Botones de links al momento de posicionar el mouse*/
						background-color: lightblue;
						color:black;
						text-decoration: none;
					}
				</style>

				<a href="index.php">
					<img src="img/logo2.png" alt="logo2"/>
				</a>

			<?php if(!isset($sesion)): //Esto se muestra solo si el usuario no esta logueado?>
				<div style="text-align: left;">
					<span class="right">
						<a href="login.php" class="a"><strong>Entrar </strong></a> o 
						<a href="register.php" class="a"><strong>Registrarse</strong></a>
					</span>
				</div>
			<?php else: ?>
				<div class="right">
					<p style="text-align:left;"><?php echo "Logueado como" ?> <a href="usuario.php?id=<?php echo $sesion['id']?>" class="a"><strong><?php echo $sesion['nombre_usuario'];?></strong></a>
					<a href="verificacion.php?logout=ok" class="a"><strong>Cerrar sesión</strong></a></p>
				</div>
			<?php endif; ?>
				</div>

		<!--=====  End of ENCABEZADO  ======-->

		<!--================================
		=      Barra Busqueda e Items     =
		================================-->
			<div class="busqueda">
				<style>
					.busqueda {
						background-color: black;
						text-align: center;
						border-top: 1px solid gray;
					}
					.busqueda li{
						display: inline-block;
						margin-left: 5px;
					}
					.boton{
						background-color:black; /*color de fondo*/
						color: white; /*color general, en este caso, la fuente*/
						padding: 10px 15px; /*relleno dentro de los botones*/
						text-align: center; /*alineamiento de texto en el boton*/
						text-decoration: none; /*ninguna decoracion: en este caso subrayado*/
						display: inline-block; /*no se*/
					}
			 		li a.boton:hover{
			 			text-decoration: none;
			 			background-color: gray;
			 			color:white;
			 		}

				</style>
				
				<form action="busqueda.php" method="GET">

					<select name="nombre">
						<option value="nombre" id="nombre">Nombre</option>
						<option value="genero" id="genero">Genero</option>
						<option value="localidad" id="localidad">Localidad</option>
				 	</select>

			 			<input type="text" id="buscar" placeholder="Buscar..." name="buscar">
			 	
				 	<li><a href="inicio.php" class="boton"><strong>Inicio</strong></a> &nbsp;&nbsp</li>
				 	<li><a href="artistas.php" class="boton"><strong>Lista de artistas</strong></a> &nbsp;&nbsp</li>
				 	<li><a href="artista.php?id=<?php echo $bandaAleatoria['id'] ?>" class="boton"><strong>Artista aleatorio</strong></a> &nbsp;&nbsp</li>
				 	<li><a href="agregar.php" class="boton"><strong>Añadir un artista</strong></a> &nbsp;&nbsp</li>
				 	<li><a href="shows.php" class="boton"><strong>Shows</strong></a> &nbsp;&nbsp</li>
				 	<li><a href="lugares.php" class="boton"><strong>Lugares</strong></a> &nbsp;&nbsp</li>
				 	<li><a href="acercade.php" class="boton"><strong>Acerca de</strong></a>&nbsp;&nbsp</li>
			 	</form> 
			</div>	
		<!--=====  End of Barra Busqueda e Items  ======-->
 	
	 	<br><br>

	 	<!--==========================================
	 	=            FORM AGREGAR LUGAR            =
	 	==========================================-->
	 	
			<div class="agregarlugar">
				<style>
					.agregarlugar {
						background-color: white;
						color: black;
						padding: 100px 0;
						width:50%;
						border: 3px solid gray; 
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
					<p style="font-size:22px;margin:7px"><b>Agregar un artista:</b></p>
					<form action="crearLugar.php" method="POST">
						<b>Nombre del lugar:*</b><br>
						<input type="text" id="nombre" placeholder="Nombre" name="nombre" maxlength="512" required>
						<p style="font-size:14px;margin:5px"><i>Si el lugar no tiene un nombre, escribir la dirección y la ciudad.</i></p><br>
						<b>Localidad:*</b> <br>
						<input type="text" id="localidad" placeholder="Localidad" name="localidad" maxlength="128" required>
						<p style="font-size:14px;margin:5px"><i>Ciudad/pueblo y provincia donde se ubica el lugar.</i></p><br>
						<b>Domicilio:*</b> <br>
						<input type="text" id="domicilio" placeholder="Domicilio" name="domicilio" required>
						<p style="font-size:14px;margin:5px"><i>Dirección del lugar.</i></p><br>
						<b>Capacidad:</b> <br>
						<input type="number" id="capacidad" placeholder="0" name="capacidad" min="0">
						<p style="font-size:14px;margin:5px"><i>Limite máximo de personas que permite el lugar.</i></p><br>
						<b>Horarios:*</b> <br>
						De <input type="time" id="apertura" name="apertura" required> a <input type="time" id="cierre" name="cierre" required>
						<p style="font-size:14px;margin:5px"><i>Hora de apertura y de cierre.</i></p><br> <!-- Esto habrá que cambiarlo después para que se pueda modificar según el día. También habría que hacer un mecanismo para que una vez que se completa el primer campo de horario focusee el segundo automáticamente. -->
						<b>Descripción:</b> <br>
						<textarea type="text" id="descripcion" placeholder="Descripción" name="descripcion" style="text-align:left;width:400px; height:200px;resize:none" maxlength="2048"></textarea><br><br>
						<b>¿Aun existe?:</b> &nbsp
						<input type="checkbox" id="existe" name="existe" required><br><br>
						<b>Verificá que no sos un robot:</b> <br>
						<?php 
						$num1Ag = rand(1,5);
						$num2Ag = rand(1,5);
						$verificacionRobot = $num1Ag + $num2Ag;
						echo $num1Ag. '+' .$num2Ag;
						?> &nbsp
						<input type="number" id="verificacionRespuesta" placeholder="Respuesta" name="verificacionRespuesta" required> <br> <br>
						<input type="hidden" id="verificacionCorrecta" name="verificacionCorrecta" value="<?=$verificacionRobot?>">
						<input type="submit" value="Añadir lugar" class="btn btn-outline-dark"> <br> <br>
						<p style="font-size:14px;margin:5px"><i>Los campos marcados con <b>*</b> son obligatorios</i></p>
					</form>
			</div>	 	
	 	
	 	<!--=====  End of FORM AGREGAR LUGAR  ======-->		
</body>
</html>

<?php if(isset($_GET['error'])): ?> <!-- despues se puede poner en otro lugar donde quede mas lindo -->
		<?php if($_GET['error'] == '01'): ?>
			<div class="alert alert-dark alert-dismissible fade show" role="alert">
				El captcha es incorrecto!!!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>		
			</div>
		<?php endif; ?>
		<?php if($_GET['error'] == '02'): ?>
			<div class="alert alert-dark alert-dismissible fade show" role="alert">
				La capacidad no puede ser negativa!!!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>		
			</div>
		<?php endif; ?>
<?php endif; ?>