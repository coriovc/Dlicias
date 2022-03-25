<?php 
if(file_exists("conexion-BD.php"))
require_once("conexion-BD.php");
else
require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarProducto(){
  global $db;
  $codigo_pt = $_REQUEST['codigo_pt'];
  $nombre = $_REQUEST['nombre'];
  $cantidad = intval($_REQUEST['cantidad']); //* intval($_REQUEST['equivalencia']);
  $precio_c = $_REQUEST['precio_c'];
  $precio_v = $_REQUEST['precio_v'];
  $id_unidad = $_REQUEST['id_unidad'];
  $id_unidadconsumo = $_REQUEST['id_unidadconsumo'];
  $id_unidadventa = $_REQUEST['id_unidadventa'];
  $stock_min = intval($_REQUEST['stock_min']) * intval($_REQUEST['equivalencia']);
  $stock_max = intval($_REQUEST['stock_max']) * intval($_REQUEST['equivalencia']);
  $equivalencia = $_REQUEST['equivalencia'];
  $equivalencia_venta = $_REQUEST['equivalencia_v'];
 
  mysqli_query($db,"INSERT INTO producto VALUES (NULL,'".$codigo_pt."','".$nombre."','".$cantidad."','".$precio_c."','".$precio_v."','".$id_unidad."','".$id_unidadconsumo."','".$equivalencia."','".$stock_min."','".$stock_max."','".$id_unidadventa."','".$equivalencia_venta."')");


  registrarOperacion($_SESSION['admin']['nombre']." ha registrado un producto",$_SESSION['admin']['id'],"PRODUCTO");
}

 function eliminarProducto(){ 
  global $db;
  mysqli_query($db,"DELETE FROM producto WHERE id=$_REQUEST[id]");
  $_SESSION['eliminada']=1;
  registrarOperacion($_SESSION['admin']['nombre']." ha eliminado un producto",$_SESSION['admin']['id'],"PRODUCTO");
}

 function listarProducto(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT  producto.*,uv.nombre as und,ue.nombre as und_entrada,uc.nombre as und_consumo  FROM producto
    inner join unidad uv on uv.id=producto.id_unidadventa
    inner join unidad uc on uc.id=producto.id_unidadconsumo
    inner join unidad ue on ue.id=producto.id_unidad
    ");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function listarProductosBajos(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM producto WHERE cantidad<=stock_min");
  return mysqli_num_rows($r); 
}

 function modificarProducto(){
  global $db; 
  mysqli_query($db,"UPDATE producto SET codigo_pt='$_REQUEST[codigo_pt]',nombre='$_REQUEST[nombre]',cantidad='$_REQUEST[cantidad]',precio_c='$_REQUEST[precio_c]',precio_v='$_REQUEST[precio_v]',id_unidad='$_REQUEST[id_unidad]',id_unidadconsumo='$_REQUEST[id_unidadconsumo]',equivalencia='$_REQUEST[equivalencia]',stock_min='$_REQUEST[stock_min]',stock_max='$_REQUEST[stock_max]',id_unidadventa='$_REQUEST[id_unidadventa]',equivalencia_venta='$_REQUEST[equivalencia_v]' WHERE id='$_REQUEST[id]'");


  registrarOperacion($_SESSION['admin']['nombre']." ha modificado un producto",$_SESSION['admin']['id'],"PRODUCTO");
}

 function buscarProducto(){
  global $db;
  $r = mysqli_query($db,"SELECT producto.*,unidad.nombre as unidad FROM producto 
inner join unidad on unidad.id=producto.id_unidad 
    WHERE producto.id=$_REQUEST[id]");
  $temporal = mysqli_fetch_assoc($r);
  return $temporal;
}



 function obtenerUnidad($id){
  global $db;
  $r = mysqli_query($db,"SELECT unidad.nombre as unidad FROM producto 
    inner join unidad on unidad.id=producto.id_unidad 
    WHERE producto.id=$id");
  $temporal = mysqli_fetch_assoc($r);
  if(!$temporal) die('Error de unidad');
  return $temporal['unidad'];
}
 function obtenerUnidadConsumo($id){
  global $db;
  $r = mysqli_query($db,"SELECT unidad.nombre as unidad FROM producto 
    inner join unidad on unidad.id=producto.id_unidadconsumo 
    WHERE producto.id=$id");
  $temporal = mysqli_fetch_assoc($r);
  if(!$temporal) die('Error de unidad');
  return $temporal['unidad'];
}

 function obtenerUnidadVenta($id){
  global $db;
  $r = mysqli_query($db,"SELECT unidad.nombre as unidad FROM producto 
    inner join unidad on unidad.id=producto.id_unidadventa 
    WHERE producto.id=$id");
  $temporal = mysqli_fetch_assoc($r);
  if(!$temporal) die('Error de unidad');
  return $temporal['unidad'];
}

 ?>