<?php 
	session_start();
	require_once 'db/banda.php';
	if(isset($_SESSION['usuarioID'])){
		$sesion = getByID("usuarios", $_SESSION['usuarioID']);
	}

	$bandas=getAll("bandas");
	$bandaAleatoria=getRandomArtist();
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
	<title>RockeAR | <?php echo $asd["---"] ?></title>
</head>
<body>
	<div>
		<div class="center">
			<h1><b>RockeAR</b></h1> 
		</div>
		<?php if(!isset($sesion)): //Esto muestra si no esta loguado?>
			<div style="text-align: right;">
				<span>
					<a href="login.php">Entrar </a> o 
					<a href="register.php"> Registrarse</a>
				</span>
			</div>
		<?php else: ?>
			<div>
				<p style="text-align:right;"><?php echo "Logueado como " . $sesion['nombre_usuario']; ?>
				<a href="verificacion.php?logout=ok">Cerrar sesión</a></p>
				<!-- Esto tiene que quedar arriba al lado del titulo, en esta y todas las otras páginas -->
			</div>
		<?php endif; ?>
 	</div>
	<div>
	 	<b>Buscar: </b> <!-- Por alguna razón no quedá al mismo nivel esto que lo de abajo ni con <nobr> -->
		<form action="busqueda.php" method="GET">
			<select name="nombre">
				<option value="nombre" id="nombre">Nombre</option>
				<option value="genero" id="genero">Genero</option>
				<option value="localidad" id="localidad">Localidad</option>
		 	</select>
	 		<input type="text" id="buscar" placeholder="Buscar..." name="buscar"> <br> <br>
	 	</form>
	 	<!-- Hay que hacer la busqueda funcionar y que mande los datos a busqueda.php, para todas las páginas xD. PD: Creo que está mal hecho todo eso pero bueno Lucas encargate vos que la tenes más clara =) -->
	</div>
 	<div class="center">
 		<!-- Todo esto debería quedar al mismo nivel que la barra de busqueda-->
	 	<a href="inicio.php">Inicio</a> &nbsp;&nbsp
	 	<a href="artistas.php">Lista de artistas</a> &nbsp;&nbsp
		<a href="artista.php?id=<?php echo $bandaAleatoria['id'] ?>">Artista aleatorio</a> &nbsp;&nbsp
	 	<a href="agregar.php">Añadir un artista</a> &nbsp;&nbsp
	 	<a href="shows.php">Shows</a> &nbsp;&nbsp
	 	<a href="lugares.php">Lugares</a> &nbsp;&nbsp
	 	<a href="acercade.php">Acerca de</a> <br> </br> 
	</div>
 	<div class="center">
 		<h1><?php echo $asd["nombre"] ?></h1><br>
 		<?php if($asd["organizador"] != ""){
 			echo "<em>" . $asd["organizador"] . "</em>";}?> <br>
 		FLYER<br><br>
 		<b>Lugar:</b> <?php echo $asd["lugar"]?><br><br>
 		<b>Fecha y horario:</b> <?php echo $asd["fecha"] $---["horario"];?><br><br>
 		<b>Artistas:</b> <?php echo $asd["artistas"]?><br><br>
 		<div class="center2"><p style="text-align:left;"><?php echo$asd["descripcion"]?></p></div><br><br>
 	</div>
 	<br>
</body>
</html>