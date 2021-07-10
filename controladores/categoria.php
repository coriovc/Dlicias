<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarCategoria(){
  global $db;
  $nombre = $_REQUEST['nombre'];

  mysqli_query($db,"INSERT INTO categoria VALUES (NULL,'".$nombre."')");
  $_SESSION['creada']=1;
  registrarOperacion(" ha registrado una categoria",$_SESSION['admin']['id'],"CATEGORIA");
}

 function eliminarCategoria(){ 
  global $db;
  mysqli_query($db,"DELETE FROM categoria WHERE id=$_REQUEST[id]");
  $_SESSION['eliminada']=1;
  registrarOperacion(" ha eliminado una categoria",$_SESSION['admin']['id'],"CATEGORIA");

}

 function listarCategorias(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM categoria");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;

}

 function modificarCategoria(){
  global $db;
  mysqli_query($db,"UPDATE categoria SET nombre='$_REQUEST[nombre]' WHERE id='$_REQUEST[id]'");

  registrarOperacion(" ha modificado una categoria",$_SESSION['admin']['id'],"CATEGORIA");
  $_SESSION['modificada']=1;
  
}

 function buscarCategoria(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM categoria WHERE id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}



 ?>
