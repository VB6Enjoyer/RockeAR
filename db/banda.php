<?php
  require_once 'crud.php';
  
  function crear_banda($datos)
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("INSERT INTO bandas (nombre, apodo, genero, localidad, actividad, descripcion, imagen, video, creador, bandcamp, soundcloud, spotify, facebook, instagram, paginaweb) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $stm->execute([
        $datos['nombre'],
        $datos['apodo'],
        $datos['genero'],
        $datos['localidad'],
        $datos['actividad'],
        $datos['descripcion'],
        $datos['imagen'],
        $datos['video'],
        $datos['creador'],
        $datos['bandcamp'],
        $datos['soundcloud'],
        $datos['spotify'],
        $datos['facebook'],
        $datos['instagram'],
        $datos['paginaweb']
        ]);
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function getArtistaByName($nombreBanda)
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("SELECT * FROM bandas WHERE nombre=?");
      $stm->execute([$nombreBanda]);
      return $stm->fetch();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function getRandomArtist()
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("SELECT * FROM bandas ORDER BY RAND() LIMIT 1 ");
      $stm->execute();
      return $stm->fetch();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  


?>
