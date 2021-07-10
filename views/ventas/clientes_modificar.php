<?php 
session_start();
require_once "../../controladores/clientes.php"; 
modificarCliente();
header("Location: index.php"); ?>
?>