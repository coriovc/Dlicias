<?php 
require_once  "../clasedb.php";  

 function obtenerUnidad($id){
  global $db;
  $r = mysqli_query($db,"SELECT unidad.nombre as unidad FROM producto 
    inner join unidad on unidad.id=producto.id_unidadconsumo 
    WHERE producto.id=$id");
  $temporal = mysqli_fetch_assoc($r);
  if(!$temporal) die('Error de unidad');
  return $temporal['unidad'];
}

$unidad = obtenerUnidad($_REQUEST['id_producto']);
die($unidad);
?>