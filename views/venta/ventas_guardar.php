
<?php 
session_start();
require_once "../../controladores/venta.php"; 

 function pedidosPendientes($id){
  global $db; 
  $r = mysqli_query($db,"SELECT pedidos.* FROM pedidos 
    WHERE pedidos.id_identificacion=$id AND pedidos.estado='PENDIENTE' AND pedidos.fecha='$_REQUEST[fecha]'");
  	$resultados = [];
	while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}


$totals = 0;
$pendientes = pedidosPendientes($_REQUEST['id_cliente']);

if(( !isset($_SESSION["venta"]) 
	|| !is_array($_SESSION["venta"]) 
	|| !count($_SESSION["venta"]) ) && (!$pendientes || !count($pendientes)) ) {
	header("location: index.php?error=1");
	exit(1);
}  

$codigoVenta = 'VN'.substr(md5(rand(1,7657574)),0,3);

$id_venta = registrarVenta($_REQUEST['fecha'],$_REQUEST['id_cliente'],$codigoVenta,$_REQUEST['forma_pago'],
	$_REQUEST['recibido']=='' ? '0' : $_REQUEST['recibido'],
	$_REQUEST['cambio']=='' ? '0' : $_REQUEST['cambio'],
	$_REQUEST['referencia']
);

if( isset($_SESSION["venta"]) 
	&& is_array($_SESSION["venta"]) 
	&& count($_SESSION["venta"]) )
foreach ($_SESSION["venta"] as $key => $value) {
	insertarVentaProducto($id_venta,$key,$value['cantidad'],$value['precio_v']);
}




if ($pendientes && is_array($pendientes) && count($pendientes)) {

	foreach ($pendientes as $key => $value) {
	insertarVentapedido($id_venta,$value['id']);
}
}
 
header('Location:../ventas/'); 
?>