<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarVenta($fecha,$id_cliente,$codigo_venta,$forma_pago,$recibido,$cambio,$referencia){
  global $db;

  mysqli_query($db,"INSERT INTO  venta(id,fecha,id_cliente,codigo_venta,forma_pago,recibido,cambio,referencia) VALUES (NULL,'".$fecha." 00:00:00','".$id_cliente."','".$codigo_venta."','".$forma_pago."','".$recibido."','".$cambio."','".$referencia."')");

  $r = mysqli_query($db,"SELECT MAX(id) as ultimoid FROM venta");
  $temporal = mysqli_fetch_assoc($r);
  if(!$temporal){ die('Error de sintaxis');}
  registrarOperacion($_SESSION['admin']['nombre']." ha registrado una venta",$_SESSION['admin']['id'],"VENTA");
  return $temporal['ultimoid'];
}

 function insertarVentaProducto($id_venta,$id_producto,$cantidad,$precio){
  global $db; 
  mysqli_query($db,"INSERT INTO venta_producto VALUES (NULL,'".$id_venta."','".$id_producto."','".$precio."','".$cantidad."')"); 
  mysqli_query($db,"UPDATE producto SET cantidad = cantidad - (equivalencia_venta * ".$cantidad.") WHERE id = $id_producto");
}

 function insertarVentaPedido($id_venta,$id_pedido){
  global $db; 
  mysqli_query($db,"INSERT INTO venta_pedido VALUES (NULL,'".$id_venta."','".$id_pedido."')"); 
  mysqli_query($db,"UPDATE pedidos SET estado = 'PAGADA' WHERE id = $id_pedido");
}

 function eliminarVenta(){ 
  global $db;
  mysqli_query($db,"DELETE FROM venta WHERE id=$_REQUEST[id]");

}

 function totalVenta($id){
  global $db;
  $resultados = [];
  $total = 0;

  $r = mysqli_query($db,"SELECT * from venta_producto WHERE id_venta=$id");
  while($temporal = mysqli_fetch_assoc($r) ){ $total += $temporal['precio_v'] * $temporal['cantidad']; } 
  $r = mysqli_query($db,"SELECT pedido_servicio.precio from 
  pedido_servicio 
  INNER JOIN pedidos ON pedidos.id=pedido_servicio.id_pedido
  INNER JOIN venta_pedido ON venta_pedido.id_pedido=pedidos.id
     WHERE id_venta=$id");
  while($temporal = mysqli_fetch_assoc($r) ) $total += $temporal['precio'];
  return $total;
}

 function listarVenta(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT venta.*,cliente.nombre FROM venta
    inner join cliente ON cliente.id=id_cliente
    ORDER BY venta.fecha DESC
    ");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarVenta(){
  global $db;
  mysqli_query($db,"UPDATE venta SET factura='$_REQUEST[factura]',codigo_com='$_REQUEST[codigo_com]',nombre='$_REQUEST[nombre]',fecha='$_REQUEST[fecha]',vendedor='$_REQUEST[vendedor]',cantidad='$_REQUEST[cantidad]',presentacion='$_REQUEST[presentacion]' WHERE id='$_REQUEST[id]'");
}

 function buscarVenta(){
  global $db;
  mysqli_query($db,"SELECT * FROM venta WHERE id=$_REQUEST[id]");
}

