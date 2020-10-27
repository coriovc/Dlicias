<?php
// Este archivo se encarga de conectar a la base de datos y un objeto PDO
//usuario------------------------------------------------------------------------------------
function insertarUsuario($n,$a,$u,$e,$p,$cp,$tu,$ps,$rs){
	require "conexion.php";
	    $sql = "INSERT INTO usuarios(nombre, apellido, usuario, email, password, confirm_password, tipo_usuario, pregunta_de_seguridad, respuesta_de_seguridad, fecha_add) 
	    VALUES ('$n','$a','$u','$e','$p','$cp','$tu','$ps','$rs',current_date);";
    $consulta = $base_de_datos->query( $sql );
    
}

/*function actualizarUsuario($i,$n,$d,$t){
	require "conexion.php";
	    $sql = "UPDATE usuarios SET nombre_completo='$n',direccion='$d',telefono='$t' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}

function eliminarUsuario($i){
	require "conexion.php";
	    $sql = "UPDATE usuarios SET borrado='s' WHERE id='$i'";
    $consulta = $base_de_datos->query( $sql );
}*/

function UsuarioLog(){
	require "conexion.php";
	$id_user = $_SESSION["email"];
	$sql = "SELECT * FROM usuarios" ;
    $consulta = $base_de_datos->query( $sql );
    return $consulta->fetchAll(PDO::FETCH_OBJ);
}

/*function buscarUsuario($id){
	require "conexion.php";
	$sql = "SELECT * FROM usuarios WHERE borrado='n' AND id='$id'";
    $consulta = $base_de_datos->query( $sql );
    $r = $consulta->fetchAll(PDO::FETCH_OBJ);
    return $r[0];
}*/
