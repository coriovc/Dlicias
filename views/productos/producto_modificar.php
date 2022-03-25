<?php 
session_start();
require_once "../../controladores/producto.php"; 
modificarProducto();

echo "<script>opener.location.reload();window.close();</script>";
echo "<script>$('#toast-success-categoria').toast('show');</script>";

?>