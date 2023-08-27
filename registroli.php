<?php
include('cone.php');


if( isset ($_POST['registrar'])){
$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$anioPublicacion = $_POST['anioPublicacion'];
$editorial = $_POST['editorial'];
$precio = $_POST['precio'];
$insertar ="INSERT INTO libros (nombre, autor, aniopublicacion, editorial, precio)VALUES ('$nombre', '$autor', '$anioPublicacion', '$editorial', '$precio')";
$resultado= mysqli_query($conexion,$insertar);

$verificacion= mysqli_query($conexion, "SELECT * FROM libros WHERE nombre='$nombre'");

$r = mysqli_num_rows($verificacion);

if ($r>0) {
    echo'
    <script>
    alert("El nombre del libro ya esta registrado");
    location.href ="../paginas/todo.php";
    </script>
    ';
    exit;
    }

if ($insertar){
    echo'
    <script>
    alert("registro no exitoso");
    location.href ="todo.php";
    </script>
    ';

}
};

mysqli_close($conexion);
?>