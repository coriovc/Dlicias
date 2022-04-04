<?php 
session_start();
require_once "../../controladores/compra.php"; 
if( !isset($_SESSION["compras"]) 
	|| !is_array($_SESSION["compras"]) 
	|| !count($_SESSION["compras"]) ) {
	header("location: ingre_nuevo.php?error=1");
	exit(1);
}
$codigoCompra = 'CO-'.substr(md5(rand(1,7657574)),0,3);
foreach($_SESSION["compras"] as $id_producto => $elemento)
	registrarCompra($_POST['numerofactura'],$codigoCompra,$_POST['fecha'],$id_producto,$elemento);

unset($_SESSION["compras"]);

echo "<script>opener.location.reload();window.close();</script>";

?>