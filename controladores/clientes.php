<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarCliente(){
  global $db;
$tipo_documento = $_REQUEST['tipo_documento'];
$identificacion= $_REQUEST['identificacion'];   
$nombre = $_REQUEST['nombre'];  
$telefono= $_REQUEST['telefono'];  
$correo = $_REQUEST['correo'];  
$direccion = $_REQUEST['direccion'];  
$alergias = $_REQUEST['alergias'];
$borrado = 'N'; 

$cl =  mysqli_query($db, "SELECT * FROM cliente WHERE identificacion='$identificacion'" );
$c = mysqli_fetch_assoc($cl);
if($c){
  die('Cliente ya registrado');
}

  mysqli_query($db,"INSERT INTO cliente VALUES (NULL,'".$tipo_documento."','".$identificacion."','".$nombre."','".$telefono."','".$correo."','".$direccion."','".$alergias."','".$borrado."')");
  registrarOperacion($_SESSION['admin']['nombre']." ha registrado un cliente",$_SESSION['admin']['id'],"CLIENTE");
}

 function eliminarCliente(){ 
  global $db;
  mysqli_query($db,"UPDATE cliente SET borrado='S' WHERE id=$_REQUEST[id]");
  registrarOperacion($_SESSION['admin']['nombre']." ha eliminado un cliente",$_SESSION['admin']['id'],"CLIENTE");
}

 function listarCliente(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM cliente WHERE borrado='N' ORDER BY id DESC");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarCliente(){
  global $db;
  mysqli_query($db,"UPDATE cliente SET tipo_documento='$_REQUEST[tipo_documento]',identificacion='$_REQUEST[identificacion]',nombre='$_REQUEST[nombre]',telefono='$_REQUEST[telefono]',correo='$_REQUEST[correo]',direccion='$_REQUEST[direccion]',alergias='$_REQUEST[alergias]' WHERE id='$_REQUEST[id]'");
  registrarOperacion($_SESSION['admin']['nombre']." ha modificado un cliente",$_SESSION['admin']['id'],"CLIENTE");
}

 function buscarCliente(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM cliente WHERE borrado='N' AND id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;
}


 ?>