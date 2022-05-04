<?php
  require_once 'crud.php';
  
  function agregar_show($show) // Para agregar shows, chequear si funciona.
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("INSERT INTO shows (nombre, lugar, fecha, horario, artistas, descripcion, flyer, organizador, creador) VALUES (?,?,?,?,?,?,?,?,?)");
      $stm->execute([
        $show['nombre'],
        $show['lugar'],
        $show['fecha'],
        $show['horario'],
        $show['artistas'],
        $show['descripcion'],
        $show['flyer'],
        $show['organizador'],
        $show['creador']
        ]);
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function getShowByName($nombreShow) // Para ordenar los shows en lista, chequear si funciona.
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("SELECT * FROM shows WHERE nombre=?");
      $stm->execute([$nombreShow]);
      return $stm->fetch();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

/* Comento esto para después hacer una función que muestre el show mas cercano o algo así.
  function getRandomAlbum()
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("SELECT * FROM show ORDER BY RAND() LIMIT 1 ");
      $stm->execute();
      return $stm->fetch();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }
*/


?>
