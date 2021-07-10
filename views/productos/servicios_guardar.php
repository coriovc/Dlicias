<?php 
session_start();
require_once "../../controladores/servicio.php"; 
$id_servicio = registrarServicio();
foreach ($_SESSION["materiales"] as $key => $value) {
	insertarMaterial($id_servicio,$key,$value['cantidad']);
}
	echo "<script>opener.location.reload();window.close();</script>";

?>

