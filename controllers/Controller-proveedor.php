<?php
// Este archivo se encarga de conectar a la base de datos y un objeto PDO
//proveedor------------------------------------------------------------------------------------
function insertarProveedor($cd,$np,$ap,$td,$nro,$cp,$dep,$tp,$cp,$sw){
	require "conexion.php";
	    $sql = "INSERT INTO tbl_proveedor(cod_proveedor, nombre_proveedor, apellido_proveedor, tipo_doc_iden, nro_proveedor, correo_proveedor,  direccion_empresa_proveedor, telmov_proveedor, Categoria_proveedor, sitioweb_proveedor, fecha_add)
  VALUES ('$cd','$np','$ap','$td','$nro','$cp','$dep','$tp','$cp','$sw',current_date);";
    $consulta = $base_de_datos->query( $sql );
    
}

function actualizarProveedor($i,$cd,$np,$ap,$td,$nro,$cp,$dep,$tp,$cp,$sw){
	require "conexion.php";
	    $sql = "UPDATE tbl_proveedor SET cod_proveedor='$cd', nombre_proveedor='$np', apellido_proveedor='$ap', tipo_doc_iden='$td', nro_proveedor='$nro', correo_proveedor='$cp', direccion_empresa_proveedor='$dep', telmov_proveedor='$tp', Categoria_proveedor='$cp', sitioweb_proveedor='$sw' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function eliminarProveedor($i){
	require "conexion.php";
	    $sql = "DELETE FROM tbl_proveedor WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function listarProveedors(){
	require "conexion.php";
	    $sql = "SELECT * FROM tbl_proveedor order by cod_proveedor";
    $consulta = $base_de_datos->query( $sql );
    return $consulta->fetchAll(PDO::FETCH_OBJ);
}

function buscarProveedor($id){
	require "conexion.php";
	$sql = "SELECT * FROM tbl_proveedor WHERE id='$id'";
    $consulta = $base_de_datos->query( $sql );
    $r = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $r[0];
}
