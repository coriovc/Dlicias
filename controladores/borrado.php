<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";
 


 function listarUsuarioBorrado(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT  * from usuario WHERE borrado='S' ORDER BY id DESC");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function RestaurarUsuario(){ 
  global $db;
  mysqli_query($db,"UPDATE usuario SET borrado='N' WHERE id=$_REQUEST[id]");
  
}
 ?>