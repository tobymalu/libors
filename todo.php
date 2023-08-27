<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="inicio">
    <h1>Todos los libros</h1>

    <form action="" method="post">
        <label for="campo"> Buscar: </label>
        <input type="text" name="campo" id="campo">
</form>
    <p></p>
    <table border='2' class="table" action="../php/todu.php"> 
        <thead  >
         <th scope="col">nombre</th>
         <th scope="col">autor</th>
         <th scope="col">anioPublicacion</th>
         <th scope="col">editorial</th>
         <th scope="col">precio</th>
         <th scope="col"></th>
         <th scope="col"></th>
         </thead>
        <tbody  class="table-group-divider" //id="content" >
        <?php
              include "../php/cone.php";
              $sentencia="SELECT * FROM libros";
              $resultado= $conexion-> query($sentencia) or die (mysqli_error($conexion));
              while($fila=$resultado->fetch_assoc())
              {
                echo "<tr>";
                  echo "<td>"; echo $fila['nombre']; "<td/>";
                  echo "<td>"; echo $fila['autor']; "<td/>";
                  echo "<td>"; echo $fila['editorial']; "<td/>";
                  echo "<td>"; echo $fila['anioPublicacion']; "<td/>";
                  echo "<td>"; echo $fila['precio']; "<td/>";
                  echo "<th><a href='../paginas/modificar.php?nombre=".$fila['nombre']."'>Editar</a></th>";
                  echo "<th><a href='../php/eliminar.php?nombre=".$fila['nombre']."'>Eleminar</a></th>";
                echo "<tr/>";
              }
              ?>
         </tbody>
    </table>
            </div>
    <script>

        getData()

        document.getElementById("campo").addEventListener("keyup", getData)

        function getData(){
            let input = document.getElementById("campo").value
            let content = document.getElementById("content")
            let url="../php/todu.php"
            let formaData = new FormData()
            formaData.append('campo',input)

            fetch(url, {
                method: "POST",
                body: formaData
            }).then(response => response.json())
            .then(data =>{
                content.innerHTML = data
            }).catch( err=> console.log(err))

        }
    </script>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
</body>
</html>