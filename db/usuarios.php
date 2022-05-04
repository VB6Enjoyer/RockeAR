<?php
  require_once 'crud.php';
  function crear_usuario($datos)
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("INSERT INTO usuarios (nombrereal, nombre_usuario, pass, preg_sec, rspta_sec, fechanacimiento) VALUES (?, ?, ?, ?, ?, ?)");
      $stm->execute([
        $datos['nombrereal'],
        $datos['nombre_usuario'],
        $datos['pass'],
        $datos['preg_sec'],
        $datos['rspta_sec'],
        $datos['fechanacimiento'],
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
      $stm = $pdo->prepare("UPDATE usuarios SET nombre_usuario=?, pass=?, preg_sec=?, rspta_sec=?, foto=?, nombrereal=?, fechanacimiento=?, artistasfavoritos=?, localidad=?, descripcion=?, facebook=?, instagram=?, twitter=?, webpage=? WHERE id=?");
      $stm->execute([
        $usuario['nombre_usuario'],
        $usuario['pass'],
        $usuario['preg_sec'],
        $usuario['rspta_sec'],
        $usuario['foto'],
        $usuario['nombrereal'],
        $usuario['fechanacimiento'],
        $usuario['artistasfavoritos'],
        $usuario['localidad'],
        $usuario['descripcion'],
        $usuario['facebook'],
        $usuario['instagram'],
        $usuario['twitter'],
        $usuario['webpage'],
        $usuario['id']
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
      $stm = $pdo->prepare("INSERT INTO usuarios (nombrereal, fecha_nac, artistas_fav, localidad, descripcion) VALUES (?, ?, ?, ?, ?)");
      $stm->execute([
        $perfilNuevo['nombrereal'],
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
