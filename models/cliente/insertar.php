<?php 
include "../../controllers/controller-cliente.php";

insertarCliente(
	$_POST['cod_cliente'],
	$_POST['nombre_cliente'],
	$_POST['apellido_cliente'],
	$_POST['tipo_doc_iden'],
	$_POST['nro_cliente'],
	$_POST['correo_cliente'],
	$_POST['direccion_cliente'],
	$_POST['telmov_cliente'],
	$_POST['nombre_empresa_cliente']); 

header("Location:" . $_SERVER['HTTP_REFERER'] ."?insertado=1");

