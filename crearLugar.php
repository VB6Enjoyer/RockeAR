<?php
session_start();
require_once 'db/db.php';
$sesion = getByID("usuarios", $_SESSION['usuarioID']);

if(isset($_POST) && isset($_SESSION['usuarioID']))
{
  $lugar = [
    'nombre'            => $_POST['nombre'],
    'localidad'         => $_POST['localidad'],
    'domicilio'         => $_POST['domicilio'],
    'capacidad'         => $_POST['capacidad'],
    'foto'              => "algunaFoto.png",
    'horarioapertura'   => $_POST['apertura'],
    'horariocierre'     => $_POST['cierre'],
    'descripcion'       => $_POST['descripcion'],
    'imagen'            => "lugar.png",// es para cambiar despues cuando podamos ingresar imagenes
    'creador'           => $sesion["nombre_usuario"],
    'existe'            => $_POST['existe'],
    'puntaje'           => 23
  ];

  $verificaionCorrecta  = $_POST['verificacionCorrecta'];
  $verificaionRespuesta = $_POST['verificacionRespuesta'];
  
  //ERROR 01: verificacion fallida
  if($verificaionCorrecta != $verificaionRespuesta)
  {
    header("location: agregarlugar.php?error=01");
    die("ERROR: Captcha incorrecto");
  }
  
  //ERROR 02: capacidad negativa
  if($_POST['capacidad'] < 0){
    header("location: agregarlugar.php?error=02");
    die("ERROR: La capacidad del lugar no puede ser negativa");
  }

  agregar_lugar($lugar);          
  
  header("location: lugares.php"); // Despues cambia la redireccion a donde quieras xD

}else {
  header("location: agregarlugar.php?error=error");
  die("ERROR");
}


?>