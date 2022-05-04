<?php
session_start();
require_once 'db/db.php';
$sesion = getByID("usuarios", $_SESSION['usuarioID']);

if(isset($_POST) && isset($_SESSION['usuarioID']))
{

  $artistImg = $_FILES['art-img'];
  
  $imgName = $artistImg['name'];
  $imgTempName = $artistImg['tmp_name'];
  $imgExt = explode('.', $imgName);

  $imgActualExt = strtolower(end($imgExt));
  
  $artistName = strtolower(str_replace(' ', '_' ,$_POST['nombre']));

  $imgNewName =  $artistName . "_" . uniqid("", true)  ."." . $imgActualExt;
  $imgDest = 'uploads/artist-img/'.$imgNewName;
  move_uploaded_file($imgTempName, $imgDest);
    

  $banda = [
    'nombre'      => $_POST['nombre'],
    'apodo'       => $_POST['apodo'],
    'genero'      => $_POST['genero'],
    'localidad'   => $_POST['localidad'],
    'actividad'   => $_POST['actividad'],
    'descripcion' => $_POST['descripcion'],
    'imagen'      => $imgDest,// es para cambiar despues cuando podamos ingresar imagenes
    'video'       => "https://www.youtube.com/embed/". substr($_POST['video'], -11), //Esto es para guardar solo el codigo del video 
    'creador'     => $sesion['nombre_usuario'],
    'paginaweb'   => empty($_POST['paginaweb']) ? " " : $_POST['paginaweb'], 
    'bandcamp'    => empty($_POST['bandcamp']) ? " " : $_POST['bandcamp'] ,
    'soundcloud'  => empty($_POST['soundcloud']) ? " " : $_POST['soundcloud'] ,
    'spotify'     => empty($_POST['spotify']) ? " " : $_POST['spotify'] ,
    'facebook'    => empty($_POST['facebook']) ? " " : $_POST['facebook'] ,
    'instagram'   => empty($_POST['instagram']) ? " " : $_POST['instagram']
  ];
  
  $verificaionCorrecta  = $_POST['verificacionCorrecta'];
  $verificaionRespuesta = $_POST['verificacionRespuesta'];

  //ERROR 01: verificacion fallida
  if($verificaionCorrecta != $verificaionRespuesta)
  {
    header("location: agregar.php?error=01");
    die("ERROR: Captcha incorrecto");
  }

  

  crear_banda($banda);

  header("location: artistas.php"); // Despues cambia la redireccion a donde quieras xD
}else {
  header("location: agregar.php?error=error");
  die("ERROR");
}


?>