<?php 

$host="localhost";
$port=3306;
$user="root";
$password="Tobymalu0788·";
$dbname="libros";

$conexion = mysqli_connect($host, $user, $password, $dbname, $port)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();



?>