<?php 
session_start();
require_once "../../controladores/empleado.php"; 
modificarEmpleado();
header("Location:" . $_SERVER['HTTP_REFERER']);
?>