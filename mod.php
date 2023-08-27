<?php

    ModificarLibro($_POST['nombre'], $_POST['autor'], $_POST['editorial'], $_POST['anioPublicacion'], $_POST['precio']);
    
    function ModificarLibro($nombre, $autor, $editorial, $anioPublicacion, $precio)
{
    include 'cone.php';
    
    $sentencia = "UPDATE libros SET nombre='$nombre', autor='$autor', editorial='$editorial', anioPublicacion='$anioPublicacion', precio='$precio' WHERE nombre='$nombre';";
    $conexion->query($sentencia) or die ("Error en actualizar datos".mysqli_error($conexion));
}   

?>
 <script>
    alert("El nombre del libro ya se actualizado");
    location.href ="../paginas/todo.php";
    </script>