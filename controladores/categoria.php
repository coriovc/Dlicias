<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarCategoria(){
  global $db;
  $nombre = $_REQUEST['nombre'];
  $borrado = 'N';

  mysqli_query($db,"INSERT INTO categoria VALUES (NULL,'".$nombre."')");
  $_SESSION['creada']=1;
  registrarOperacion(" ha registrado una categoria",$_SESSION['admin']['id'],"CATEGORIA");
}

 function eliminarCategoria(){ 
  global $db;
  mysqli_query($db,"UPDATE FROM categoria SET borrado='S' WHERE id=$_REQUEST[id]");
  $_SESSION['eliminada']=1;
  registrarOperacion("<?php echo $_SESSION['admin']['nombre']; ?> ha eliminado una categoria",$_SESSION['admin']['id'],"CATEGORIA");

}

 function restaurarCategoria(){ 
  global $db;
  mysqli_query($db,"UPDATE FROM categoria SET borrado='N' WHERE id=$_REQUEST[id]");
  $_SESSION['eliminada']=1;
  registrarOperacion("<?php echo $_SESSION['admin']['nombre']; ?> ha Restaurado una categoria",$_SESSION['admin']['id'],"CATEGORIA");

}

 function listarCategorias(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM categoria  WHERE borrado='N'");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;

}

 function modificarCategoria(){
  global $db;
  mysqli_query($db,"UPDATE categoria SET nombre='$_REQUEST[nombre]' WHERE id='$_REQUEST[id]'");

  registrarOperacion("<?php echo $_SESSION['admin']['nombre']; ?> ha modificado una categoria",$_SESSION['admin']['id'],"CATEGORIA");
  $_SESSION['modificada']=1;
  
}

 function buscarCategoria(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM categoria  WHERE borrado='N' AND id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}



 ?>
