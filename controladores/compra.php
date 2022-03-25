<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarCompra($numero_factura,$codigo_compra,$fecha,$id_producto,$informacion){
  global $db;
  mysqli_query($db,"INSERT INTO  compras VALUES (NULL,'".$fecha."','".$id_producto."','".$informacion['cantidad']."','".$informacion['precio_c']."','".$codigo_compra."','".$numero_factura."')");
  
  mysqli_query($db,"UPDATE producto SET cantidad = cantidad + (equivalencia * equivalencia_venta * '".$informacion['cantidad']."') WHERE id = $id_producto");
  
  registrarOperacion($_SESSION['admin']['nombre']." ha registrado una compra",$_SESSION['admin']['id'],"COMPRAS");
}

 function eliminarCompra(){ 
  global $db;
  mysqli_query($db,"DELETE FROM compras WHERE id=$_REQUEST[id]");

}

 function listarCompra(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT  compras.*,producto.nombre as nombreproducto, unidad.nombre as nombreunidad,producto.equivalencia  FROM compras
    inner join producto on producto.id=compras.id_producto
    inner join unidad on unidad.id=producto.id_unidad 
    ORDER BY fecha DESC
    ");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarCompra(){
  global $db;
  mysqli_query($db,"UPDATE compras SET factura='$_REQUEST[factura]',codigo_com='$_REQUEST[codigo_com]',nombre='$_REQUEST[nombre]',fecha='$_REQUEST[fecha]',comprador='$_REQUEST[comprador]',cantidad='$_REQUEST[cantidad]',presentacion='$_REQUEST[presentacion]' WHERE id='$_REQUEST[id]'");

  registrarOperacion($_SESSION['admin']['nombre']." ha Modificado una compra",$_SESSION['admin']['id'],"COMPRAS");
}

 function buscarCompra(){
  global $db;
  mysqli_query($db,"SELECT * FROM compras WHERE id=$_REQUEST[id]");
}

