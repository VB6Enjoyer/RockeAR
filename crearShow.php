<?php
session_start();
require_once 'db/db.php';
$sesion = getByID("usuarios", $_SESSION['usuarioID']);

if(isset($_POST) && isset($_SESSION['usuarioID']))

{
  $show = [
    'nombre'      => $_POST['nombre'],
    'lugar'       => $_POST['lugar'],
    'fecha'       => $_POST['fecha'],
    'horario'     => $_POST['horario'],
    'artistas'    => $_POST['artistas'],
    'descripcion' => $_POST['descripcion'],
    'flyer'       => "flyer.png",// es para cambiar despues cuando podamos ingresar imagenes
    'organizador' => $_POST['organizador'],
    'creador'     => $sesion["nombre_usuario"],
  ];
  
  $verificaionCorrecta  = $_POST['verificacionCorrecta'];
  $verificaionRespuesta = $_POST['verificacionRespuesta'];

  //ERROR 01: verificacion fallida
  if($verificaionCorrecta != $verificaionRespuesta)
  {
    header("location: agregarshow.php?error=01");
    die("ERROR: Captcha incorrecto");
  }

  

  agregar_show($show);

  header("location: shows.php"); // Despues cambia la redireccion a donde quieras xD
}else {
  header("location: agregarshow.php?error=error");
  die("ERROR");
}


?>