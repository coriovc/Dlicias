<?php 
require_once  "../controladores/producto.php";  

 function pedidosPendientes($id){
  global $db;
  $r = mysqli_query($db,"SELECT pedidos.* FROM pedidos 
    WHERE pedidos.id_identificacion=$id AND pedidos.estado='PENDIENTE' AND pedidos.fecha='$_REQUEST[fecha]'");
    $resultados = []; 
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}
 function buscardpedido(){
  global $db;
 $r =  mysqli_query($db,"SELECT *,SUM(servicio.precio) as total FROM `pedidos` INNER JOIN dpedido_servicio ON pedidos.id=dpedido_servicio.id_dpedido INNER JOIN servicio ON servicio.id=dpedido_servicio.id_servicio WHERE pedidos.id=$_REQUEST[id] GROUP BY dpedido_servicio.id_dpedido");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}

if(!isset($_SESSION))
  session_start();  
  $total = 0;
if(isset($_SESSION["venta"]) && is_array($_SESSION["venta"]) && count($_SESSION["venta"])){
  foreach($_SESSION["venta"] as $id_producto => $elemento){
$total = $total + intval($elemento['cantidad']) * intval($elemento['precio_v']);
    }
  }


$pendientes = pedidosPendientes($_REQUEST['id_cliente']);
if ($pendientes && is_array($pendientes) && count($pendientes)) {
  foreach ($pendientes as $key => $value) {

    $_REQUEST['id'] = $value['id'];
    $dpedido = buscardpedido(); 
$total = $total +  intval($dpedido['total']);
}
}
die("Total: $total Bs. S.<script>var totalAjax= $total;</script>");
   ?>