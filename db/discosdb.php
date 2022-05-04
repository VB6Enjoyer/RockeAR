<?php
  require_once 'crud.php';
  
  function agregar_album($disco) // Para agregar discos, chequear si funciona.
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("INSERT INTO discos (titulo, autor, fecha, tipo, formatos, tracklist, cover, comprar, puntaje) VALUES (?,?,?,?,?,?,?,?,?)");
      $stm->execute([
        $disco['titulo'],
        $disco['autor'],
        $disco['fecha'],
        $disco['tipo'],
        $disco['formatos'],
        $disco['tracklist'],
        $disco['cover'],
        $disco['comprar'],
        $disco['puntaje']
        ]);
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function getAlbumByName($tituloAlbum) // Para ordenar álbumes, chequear si funciona.
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("SELECT * FROM discos WHERE titulo=?");
      $stm->execute([$tituloAlbum]);
      return $stm->fetch();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function getRandomAlbum() // Para obtener un álbum aleatorio igual que con las bandas, chequear si funciona.
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("SELECT * FROM discos ORDER BY RAND() LIMIT 1 ");
      $stm->execute();
      return $stm->fetch();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

?>
