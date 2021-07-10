<?php 
session_start();
require_once "controladores/categoria.php"; 
modificarCategoria();
header('Location: categorias_listado.php'); 

?>