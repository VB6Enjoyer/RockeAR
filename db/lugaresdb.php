<?php
  require_once 'crud.php';
  
  function agregar_lugar($lugar) // Para agregar lugares, chequear si funciona.
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("INSERT INTO lugares (nombre, localidad, domicilio, capacidad, foto, descripcion, puntaje, horarioapertura, horariocierre, creador, existe) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
      $stm->execute([
        $lugar['nombre'],
        $lugar['localidad'],
        $lugar['domicilio'],
        $lugar['capacidad'],
        $lugar['foto'],
        $lugar['descripcion'],
        $lugar['puntaje'],
        $lugar['horarioapertura'],
        $lugar['horariocierre'],
        $lugar['creador'],
        $lugar['existe']
      ]);
      
      echo "se cargo";
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

  function getLugarByName($nombreLugar)
  {
    $pdo = connect();
    try
    {
      $stm = $pdo->prepare("SELECT * FROM lugares WHERE nombre=?");
      $stm->execute([$nombreLugar]);
      return $stm->fetch();
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

?>
