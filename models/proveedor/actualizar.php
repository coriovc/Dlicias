<?php 
include "../../controllers/controller-proveedor.php";
actualizarProveedor(
	$_POST['cod_proveedor'],
	$_POST['nombre_proveedor'],
	$_POST['apellido_proveedor'],
	$_POST['tipo_doc_iden'],
	$_POST['nro_proveedor'],
	$_POST['correo_proveedor'],
	$_POST['direccion_empresa_proveedor'],
	$_POST['telmov_proveedor'],
	$_POST['Categoria_proveedor'],
	$_POST['sitioweb_proveedor']);
header("Location:../../form_cliente.php");