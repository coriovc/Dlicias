<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarServicio(){
  global $db;
  $codigo_s = $_REQUEST['codigo_s'];
  $nombre = $_REQUEST['nombre'];
  $precio = $_REQUEST['precio'];
  $id_categoria = $_REQUEST['id_categoria'];
  $tiempo = $_REQUEST['tiempo'];
  mysqli_query($db,"INSERT INTO servicio VALUES (NULL,'".$codigo_s."','".$nombre."','".$precio."','".$id_categoria."','".$tiempo."')");

  $r = mysqli_query($db,"SELECT MAX(id) as ultimoid FROM servicio");
  $temporal = mysqli_fetch_assoc($r);
  if(!$temporal) die('Error de sintaxis');

  registrarOperacion($_SESSION['admin']['nombre']." ha registrado un servicio",$_SESSION['admin']['id'],"SERVICIO");
  return $temporal['ultimoid'];
}


 function insertarMaterial($id_servicio,$id_producto,$cantidad){
  global $db; 
  mysqli_query($db,"INSERT INTO servicio_producto VALUES (NULL,'".$id_producto."','".$id_servicio."','".$cantidad."')"); 
}

 function eliminarServicio(){ 
  global $db;
  mysqli_query($db,"DELETE FROM servicio WHERE id=$_REQUEST[id]");
   $_SESSION['creada']=1;
  registrarOperacion($_SESSION['admin']['nombre']." ha eliminado un servicio",$_SESSION['admin']['id'],"SERVICIO");
}

 function traerMateriales(){ 
  global $db;
  $resultados=[];
  $r = mysqli_query($db,"SELECT servicio_producto.id_servicio,servicio_producto.id_producto,servicio_producto.cantidad, producto.nombre  FROM servicio_producto 
inner join producto on producto.id=servicio_producto.id_producto
    WHERE id_servicio=$_REQUEST[id]");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function borrarMateriales(){ 
  global $db;
  mysqli_query($db,"DELETE FROM servicio_producto WHERE id_servicio=$_REQUEST[id]");

  registrarOperacion($_SESSION['admin']['nombre']." ha borrado un material",$_SESSION['admin']['id'],"SERVICIO");
}

 function listarServicio(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT servicio.*,categoria.nombre as nombrecategoria FROM servicio 
  INNER JOIN categoria ON categoria.id=servicio.id_categoria");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarServicio(){
  global $db; 
  mysqli_query($db,"UPDATE servicio SET codigo_s='$_REQUEST[codigo_s]',id_categoria='$_REQUEST[id_categoria]',nombre='$_REQUEST[nombre]',precio='$_REQUEST[precio]',tiempo='$_REQUEST[tiempo]' WHERE id='$_REQUEST[id]'");

  registrarOperacion($_SESSION['admin']['nombre']." ha actualizado un servicio",$_SESSION['admin']['id'],"SERVICIO");
}

 function buscarServicio(){
  global $db;
 $r =  mysqli_query($db,"SELECT servicio.*,categoria.nombre as nombrecategoria FROM servicio
  INNER JOIN categoria ON categoria.id=servicio.id_categoria
    WHERE servicio.id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}


 ?>