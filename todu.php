<?php 
include('cone.php');


$columns = ['nombre', 'autor', 'anioPublicacion', 'editorial', 'precio'];
$table ="libros";

$campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']): null;

$where ='';

if ($campo !=null){
    $where ="WHERE (";

    $cont = count($columns);
    for($i =0; $i< $cont; $i++){
        $where .= $columns[$i] ." LIKE '%". $campo ."%' OR ";
}
$where = substr_replace($where, "", -3);
$where.=")";
}

$sql = "SELECT ". implode(" , " , $columns)."
 FROM $table
 $where ";

$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;

$html= '';

if($num_rows >0){
    while($row = $resultado->fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>'.$row['nombre'].'</td>';
        $html .= '<td>'.$row['autor'].'</td>';
        $html .= '<td>'.$row['anioPublicacion'].'</td>';
        $html .= '<td>'.$row['editorial'].'</td>';
        $html .= '<td>'.$row['precio'].'</td>';
        $html .= '<td><a href='../paginas/modificar.php?nombre=".$fila['nombre']."'>Editar</a></td>';
        $html .= '<td><a href='../php/eliminar.php?nombre=".$fila['nombre']."'>Eliminar</a></td>';
        $html .= '</tr>';
        
    }
}else{
    $html .='<tr>';
    $html .='<td colspan="7">sin resultados</td>';
    $html .='</tr>';

}

echo json_encode($html, JSON_UNESCAPED_UNICODE);


?>