<?php 
session_start();

require_once "../controladores/auditoria.php"; 

	registrarOperacion($_SESSION['admin']['nombre']." ha cerrado sesion",$_SESSION['admin']['id'],"SALIDA");
 unset($_SESSION['admin']);
	header('location: ../close.php?salio=1');
  ?>