<?php
// Este archivo se encarga de conectar a la base de datos y un objeto PDO
//pago------------------------------------------------------------------------------------
function insertarPagoE($cd,$nc,$ac,$td,$nro,$cc,$dc,$tc,$nec){
	require "conexion.php";
	    $sql = "INSERT INTO tbl_pago(cod_pago, nombre_pago, apellido_pago, tipo_doc_iden, nro_pago, correo_pago, direccion_pago, telmov_pago, nombre_empresa_pago, fecha_add)
  VALUES ('$cd','$nc','$ac','$td','$nro','$cc','$dc','$tc','$nec',current_date);";
    $consulta = $base_de_datos->query( $sql );
    
}

function actualizarpago($i,$cd,$nc,$ac,$td,$nro,$cc,$dc,$tc,$nec){
	require "conexion.php";
	    $sql = "UPDATE tbl_pago SET cod_pago='$cd', nombre_pago='$nc', apellido_pago='$ac', tipo_doc_iden='$td', nro_pago='$nro', correo_pago='$cc', direccion_pago='$dc', telmov_pago='$tc', nombre_empresa_pago='$' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function eliminarpago($i){
	require "conexion.php";
	    $sql = "DELETE FROM tbl_pago WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function listarpagos(){
	require "conexion.php";
	    $sql = "SELECT * FROM tbl_pago order by cod_pago";
    $consulta = $base_de_datos->query( $sql );
    return $consulta->fetchAll(PDO::FETCH_OBJ);
}

function buscarpago($id){
	require "conexion.php";
	$sql = "SELECT * FROM tbl_pago WHERE id='$id'";
    $consulta = $base_de_datos->query( $sql );
    $r = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $r[0];
}
