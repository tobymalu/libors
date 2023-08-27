<?php
  require '../php/cone.php';

  $ver=libross ($_GET['nombre']);
   function libross ($nombre){
    include '../php/cone.php';
    $sql= "SELECT * FROM libros WHERE nombre='$nombre'";
    $resultado= $conexion-> query($sql);
    $row=$resultado->fetch_assoc();

    return [
      $row['nombre'],
      $row['autor'],
      $row['anioPublicacion'],
      $row['editorial'],
      $row['precio']
    ];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Libros</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="inicio">    
<form action="../php/mod.php" method="POST" class="formulario">
        <h2 class="info_form">Editar Libro</h2>
        <input type="text" class="formula" require placeholder="&#128113; nombre del libro "name="nombre" value="<?php echo $ver[0] ?>">
        <input type="text" class="formula" require placeholder="&#128113; nombre del Autor"name="autor" value="<?php echo $ver[1] ?>">
        <input type="value" class="formula" require placeholder="&#128113; anioPublicado "name="anioPublicacion" value="<?php echo $ver[2] ?>">
        <input type="text" class="formula" require placeholder="&#128113; editorial "name="editorial" value="<?php echo $ver[3] ?>">
        <input type="text" class="formula" require placeholder="&#128113; precio "name="precio" value="<?php echo $ver[4] ?>">
        <input type="submit" class="formula_enviar" name="registrar">
  </div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      
</body>
</html>