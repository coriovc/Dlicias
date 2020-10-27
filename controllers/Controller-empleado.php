<?php
// Este archivo se encarga de conectar a la base de datos y un objeto PDO
//empleado------------------------------------------------------------------------------------
function insertarEmpleado($cd,$ne,$ae,$td,$nro,$ce,$de,$te,$at,$dp,$dl,$o){
	require "conexion.php";
	    $sql = "INSERT INTO tbl_empleado(cod_empleado, nombre_empleado, apellido_empleado, tipo_doc_iden, nro_empleado, correo_empleado, direccion_empleado, telmov_empleado, area_trabajo, dia_pago, dia_libre, observaciones, fecha_add)
  VALUES ('$cd','$ne','$ae','$td','$nro','$ce','$de','$te','$at','$dp','$dl','$o',current_date);";
    $consulta = $base_de_datos->query( $sql );
    
}

function actualizarEmpleado($i,$cd,$ne,$ae,$td,$nro,$ce,$de,$te,$at,$dp,$dl,$o){
	require "conexion.php";
	    $sql = "UPDATE tbl_empleado SET cod_empleado='$cd', nombre_empleado='$ne', apellido_empleado='$ae', tipo_doc_iden='$td', nro_empleado='$nro', correo_empleado='$ce', direccion_empleado='$de', telmov_empleado='$te', area_trabajo='$at', dia_pago='$dp', dia_libre='$dl', observaciones='$o' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function eliminarempleado($i){
	require "conexion.php";
	    $sql = "DELETE FROM tbl_empleado WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function listarempleados(){
	require "conexion.php";
	    $sql = "SELECT * FROM tbl_empleado order by cod_empleado";
    $consulta = $base_de_datos->query( $sql );
    return $consulta->fetchAll(PDO::FETCH_OBJ);
}

function buscarempleado($id){
	require "conexion.php";
	$sql = "SELECT * FROM tbl_empleado WHERE id='$id'";
    $consulta = $base_de_datos->query( $sql );
    $r = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $r[0];
}
