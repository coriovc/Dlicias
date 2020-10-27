<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"])
		&&isset($_POST["apellido"])
		&&isset($_POST["usuario"])  
		&&isset($_POST["email"]) 
		&&isset($_POST["password"]) 
		&&isset($_POST["confirm_password"])  
		&&isset($_POST["Pregunta_de_seguridad"]) 
		&&isset($_POST["Respuesta_de_seguridad"])
		&&isset($_POST["tipo_de_usuario"])
	  ){
	
	if($_POST["nombre"]!=""
		&&$_POST["apellido"]
		&&$_POST["usuario"]
		&&$_POST["email"]!=""
		&&$_POST["password"]!=""
		&&$_POST["password"]==$_POST["confirm_password"]
		&&$_POST["Pregunta_de_seguridad"]
		&&$_POST["Respuesta_de_seguridad"]
		&&$_POST["tipo_de_usuario"]){
			
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from usuarios where usuario=\"$_POST[usuario]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../paginas/register.php';</script>";
			}
			$sql = "insert into usuarios(nombre,apellido,usuario,email,password,confirm_password,Pregunta_de_seguridad,Respuesta_de_seguridad,tipo_de_usuario,created_at) 
			value (\"$_POST[nombre]\",
				   \"$_POST[apellido]\",
				   \"$_POST[usuario]\",
				   \"$_POST[email]\",
				   \"$_POST[password]\",
				   \"$_POST[confirm_password]\",
				   \"$_POST[Pregunta_de_seguridad]\",
				   \"$_POST[Respuesta_de_seguridad]\",
				   \"$_POST[tipo_de_usuario]\",
				   NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso.\");window.location='../index.php';</script>";
			}
		}
	}
}



?>