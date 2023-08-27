<?php 
include('cone.php');
//$con->close();
$query = "select * from libros";


if ($stmt = $conexion->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($nombre, $autor, $anioPublicacion, $editorial, $precio);
    while ($stmt->fetch()) {
        echo "
        
        
        <tr>
        <td>$nombre</td>
        <td>$autor</td>
        <td>$anioPublicacion</td>
        <td>$editorial</td>
        <td>$precio</td>
        </tr>
              ";
       
    }
    $stmt->close();
}
?>