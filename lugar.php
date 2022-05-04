<?php 
	session_start();
	require_once 'db/db.php';
	if(isset($_SESSION['usuarioID'])){
		$sesion = getByID("usuarios", $_SESSION['usuarioID']);
	}

	$bandas=getAll("bandas");
	$bandaAleatoria=getRandomArtist();

	$lugarID = $_GET['id'];
	$lugar = getByID("lugares", $lugarID); 
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
		  width: 75%;
		  border: 3px solid black;
		  padding: 10px;
		}
	</style>
	<title>RockeAR | Lugar - <?php echo $lugar["nombre"] ?></title>
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

			<?php if(!isset($sesion)): //Esto se muestra solo si el usuario no esta loguado?>
				<div style="text-align: left;">
					<span class="right">
						<a href="login.php" class="a"><strong>Entrar </strong></a> o 
						<a href="register.php" class="a"><strong>Registrarse</strong></a>
					</span>
				</div>
			<?php else: ?>
				<div class="right">
					<p style="text-align:left;"><?php echo "Logueado como" ?> <a href="usuario.php?id=<?php echo $sesion['id']?>" class="a"><strong><?php echo $sesion['nombre_usuario'];?></strong></a>
					<a href="verificacion.php?action=logout" class="a"><strong>Cerrar sesión</strong></a></p>
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

		<!--==================================
		=            FORM LUGAR            =
		==================================-->
		
			<div>
					<style type="text/css">
						.lugar {
							padding: 50px 0;
							margin-bottom: 5%;
							background-color: white;
							color:black;
							border: 3px solid gray;
							border-radius: 4px;
							margin-right: 10%;
							margin-left: 10%;
						}
						.lugar2 li{
							margin-top: 5px;
							text-align: justify;
							list-style: none;
							display: block;
						}
						.lugar3 {
							text-align: center;
						}
					</style>
					<section class="lugar">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<h1><?php echo $lugar["nombre"] ?></h1>
									<h5>
										<?php if($lugar ["existe"] == '1'):?>
											<i>Cerrado permanentemente.</i><br>
										<?php endif; ?>
										<?php if($lugar["puntaje"] == "0"){
											echo "<em> Este lugar no ha sido puntuado aún </em>";}
											else{
												if($lugar["puntaje"] != "0"){
													echo " <em> Este lugar tiene " . $lugar["puntaje"] . " puntos </em>";
												}
											}?> <br>
										</h5>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<ul class="lugar2">
											<li><strong>UBICACION: </strong><?php echo $lugar["domicilio"]?>, <?php echo $lugar["localidad"]?></li>
											<li><strong>CAPACIDAD: </strong><?php if($lugar["capacidad"] != "0"){
												echo $lugar["capacidad"];}
												else{
													echo "Desconocida";
												}?></li>
											<li><strong>HORARIO: </strong>De <?php echo $lugar["horarioapertura"]?> a <?php echo $lugar["horariocierre"]?></li>
										</ul>
									</div>
								</div>          	
							</div>
							<div class="lugar3">
								<?php echo $lugar["descripcion"]?>
							</div>
						</section>
					</div>				
		<!--=====  End of FORM LUGAR  ======-->
</body>
</html>