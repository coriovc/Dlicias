<?php 

require_once("conexion-BD.php");

 function registrarUnidad(){
  global $db;
  $nombre = $_REQUEST['nombre'];

  mysqli_query($db,"INSERT INTO categoria VALUES (NULL,'".$nombre."')");
}

 function eliminarUnidad(){ 
  global $db;
  mysqli_query($db,"DELETE FROM categoria WHERE id=$_REQUEST[id]");

}

 function listarUnidad(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM unidad");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarUnidad(){
  global $db;
  mysqli_query($db,"UPDATE categoria SET nombre='$_REQUEST[nombre]' WHERE id='$_REQUEST[id]'");
}

 function buscarUnidad(){
  global $db;
  mysqli_query($db,"SELECT * FROM categoria WHERE id=$_REQUEST[id]");
}


 ?>