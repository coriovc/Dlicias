<?php 
session_start();
require_once "controladores/producto.php"; 
modificarProducto();
header('Location: producto_listado.php'); 

?>