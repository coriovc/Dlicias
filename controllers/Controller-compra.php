<?php
// Este archivo se encarga de conectar a la base de datos y un objeto PDO
//Cliente------------------------------------------------------------------------------------
function insertarCliente($cd,$nc,$ac,$td,$nro,$cc,$dc,$tc,$nec){
	require "conexion.php";
	    $sql = "INSERT INTO tbl_cliente(cod_cliente, nombre_cliente, apellido_cliente, tipo_doc_iden, nro_cliente, correo_cliente, direccion_cliente, telmov_cliente, nombre_empresa_cliente, fecha_add)
  VALUES ('$cd','$nc','$ac','$td','$nro','$cc','$dc','$tc','$nec',current_date);";
    $consulta = $base_de_datos->query( $sql );
    
}

function actualizarCliente($i,$cd,$nc,$ac,$td,$nro,$cc,$dc,$tc,$nec){
	require "conexion.php";
	    $sql = "UPDATE tbl_cliente SET cod_cliente='$cd', nombre_cliente='$nc', apellido_cliente='$ac', tipo_doc_iden='$td', nro_cliente='$nro', correo_cliente='$cc', direccion_cliente='$dc', telmov_cliente='$tc', nombre_empresa_cliente='$' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function eliminarCliente($i){
	require "conexion.php";
	    $sql = "DELETE FROM tbl_cliente WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function listarClientes(){
	require "conexion.php";
	    $sql = "SELECT * FROM tbl_cliente order by cod_cliente";
    $consulta = $base_de_datos->query( $sql );
    return $consulta->fetchAll(PDO::FETCH_OBJ);
}

function buscarCliente($id){
	require "conexion.php";
	$sql = "SELECT * FROM tbl_cliente WHERE id='$id'";
    $consulta = $base_de_datos->query( $sql );
    $r = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $r[0];
}
