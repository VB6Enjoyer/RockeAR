<?php
  require_once 'crud.php';
  function crear_usuario2($datos)
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("INSERT INTO usuarios (nombre_usuario, pass, preg_sec, rspta_sec, fecha_registro) VALUES (?, ?, ?, ?, ?)");
      $stm->execute([
        $datos['nombre_usuario'],
        $datos['pass'],
        $datos['preg_sec'],
        $datos['rspta_sec'],
        $datos['fecha_registro'] // Añadí esto para que se guarde la fecha en la que se registró el usuario, chequear si funciona.
        ]);
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function getUsuarioByUsername($nombreUsuario)
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("SELECT * FROM usuarios WHERE nombre_usuario=?");
      $stm->execute([$nombreUsuario]);
      return $stm->fetch();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function updateUserInfo($usuario)
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("UPDATE usuarios SET nombre_usuario=?, pass=?, preg_sec=?, rspta_sec=?, nombre_real=?, fecha_nac=?, artistas_fav=?, localidad=?, descripcion=? WHERE id=?");
      $stm->execute([
        $usuario['nombre_usuario'],
        $usuario['pass'],
        $usuario['preg_sec'],
        $usuario['rspta_sec'],
        $usuario['id'],
        $usuario['nombre_real'],
        $usuario['fecha_nac'],
        $usuario['artistas_fav'],
        $usuario['localidad'],
        $usuario['descripcion'],
      ]);
      return $stm->fetch();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function crear_perfil($perfilNuevo) // Para crear el perfil, chequear si funciona.
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("INSERT INTO usuarios (nombre_real, fecha_nac, artistas_fav, localidad, descripcion) VALUES (?, ?, ?, ?, ?)");
      $stm->execute([
        $perfilNuevo['nombre_real'],
        $perfilNuevo['fecha_nac'],
        $perfilNuevo['artistas_fav'],
        $perfilNuevo['localidad'],
        $perfilNuevo['descripcion']
        ]);
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

?>
