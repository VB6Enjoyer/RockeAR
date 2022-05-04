<?php
  session_start();

  require_once 'db/db.php';
  if(isset($_GET['action']))
  {
    $action   = $_GET['action'];

    switch ($action) {
      case 'login':
        $usuarioLog  = $_POST['usuario'];
        $passLog     = md5($_POST['password']);

        $usuarioDB = getUsuarioByUsername($usuarioLog);
        
        
        if ((!empty($usuarioDB)) && ($usuarioLog == $usuarioDB['nombre_usuario'] && $passLog == $usuarioDB['pass']))
        {
          $_SESSION['usuarioID'] = $usuarioDB['id'];

          header("location: inicio.php"); // redirigir a la home
        }
        else
          header("location: login.php?login=error"); // La password o el usuario ingresado es incorrecto
        

        
        break;
      
      case 'signup':
        //hacer codigo de signup

        
        $usuarioSig         = $_POST['usuario'];
        $nombreSig          = $_POST['nombrereal'];
        $passwordSig        = md5($_POST['passwordNew']);
        $passwordVer        = md5($_POST['passwordVer']);
        $preguntaNewSec     = $_POST['preguntaNewSec'];
        $rsptaNewSec        = $_POST['rsptaNewSec'];
        $verificacionRspta  = $_POST['verificacionRspta'];
        $verRsptaCorrecta   = $_POST['verRsptaCorrecta'];

        $_SESSION['usuarioNew']        = $usuarioSig;
        $_SESSION['preguntaSec']       = $preguntaNewSec;
        $_SESSION['preguntaSecRsta']   = $rsptaNewSec; 
        

        if(getUsuarioByUsername($usuarioSig) != NULL)
        {
          //ERROR01: el nombre de usuario ya existe
          header("location: register.php?signup=error01");
          die("ERROR01: el nombre de usuario ya existe");
        }
        if($passwordSig != $passwordVer)
        {
          //ERROR02: pass no son iguales 
          header("location: register.php?signup=error02");
          die("ERROR02: las contrasenas no son igusles");
        }
        if($verificacionRspta != $verRsptaCorrecta)
        {
          //ERROR03: respuesta captcha es incorrecta 
          header("location: register.php?signup=error03");
          die("ERROR03: la respuesta del captcha es incorrecta");
        }

        $usuario = [
          "nombrereal"      => $nombreSig,
          "nombre_usuario"  => $usuarioSig,
          "pass"            => $passwordSig,
          "preg_sec"        => md5($preguntaNewSec),
          "rspta_sec"       => md5($rsptaNewSec)
        ];

        crear_usuario($usuario);
        
        session_unset();
        session_destroy();

        header("location: login.php"); //La direccion a la home o logizn

        break;
      
      case 'update':
        
        $usuario = getByID($_POST['tabla'], $_POST['userID']);
        
        if(md5($_POST['passwordRec']) != md5($_POST['passwordRecVer']))
        {
          header("location: recuperar2.php?error=preg");
          die("Contrasenas no coinsiden");
        }else
        {
          session_unset();
          session_destroy();
        }

        $usuario['pass'] = md5($_POST['passwordRec']);

        updateUserInfo($usuario);

        
        header("location: login.php");

        break;

      case 'logout':
        session_unset();
        session_destroy();
        header("location: login.php");
        break;

      default:
        header("location: login.php");
        break;
    }
  }
  else
    header("location: login.php");
?>