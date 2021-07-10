<?php 
session_start();
require_once "../../controladores/servicio.php"; 
borrarMateriales($_REQUEST['id']);
modificarServicio();
foreach ($_SESSION["materiales"] as $key => $value) {
	insertarMaterial($_REQUEST['id'],$key,$value['cantidad']);
}
header('Location: servicios_listado.php'); ?>