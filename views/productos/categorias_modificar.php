<?php 
session_start();
require_once "../../controladores/categoria.php"; 
modificarCategoria();
echo "<script>opener.location.reload();window.close();</script>";

?>