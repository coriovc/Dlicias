<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarEmpleado(){
  global $db;

$cedula= $_REQUEST['cedula'];   
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];  
$telefono = $_REQUEST['telefono'];  
$correo = $_REQUEST['correo'];  
$direccion = $_REQUEST['direccion'];  
$cargo = $_REQUEST['cargo'];  
$sueldo = $_REQUEST['sueldo'];
$nro_cuenta = $_REQUEST['nro_cuenta']; 
$banco = $_REQUEST['banco']; 
$ci_banco = $_REQUEST['ci_banco']; 
$nombre_banco = $_REQUEST['nombre_banco'];


$emp =  mysqli_query($db, "SELECT * FROM empleado WHERE cedula='$cedula'" );
$em = mysqli_fetch_assoc($emp);
if($em){
  die('Empleado ya registrado');
}

  mysqli_query($db,"INSERT INTO empleado VALUES (NULL,
    '".$cedula."',
    '".$nombre."',
    '".$apellido."',
    '".$telefono."',
    '".$correo."',
    '".$direccion."',
    '".$cargo."',
    '".$sueldo."',
    '".$nro_cuenta."',
    '".$banco."',
    '".$ci_banco."',
    '".$nombre_banco."')");

    

  registrarOperacion($_SESSION['admin']['nombre']." ha registrado un empleado",$_SESSION['admin']['id'],"EMPLEADO");
}

 function eliminarEmpleado(){ 
  global $db;
  mysqli_query($db,"DELETE FROM empleado WHERE empleado.id=$_REQUEST[id]");
  registrarOperacion($_SESSION['admin']['nombre']." ha eliminado un Empleado",$_SESSION['admin']['id'],"EMPLEADO");
}

 function listarEmpleado(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM empleado ORDER BY id DESC");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarEmpleado(){
  global $db;
  mysqli_query($db,"UPDATE empleado SET 
    cedula='$_REQUEST[cedula]',  
    nombre ='$_REQUEST[nombre]',
    apellido ='$_REQUEST[apellido]', 
    telefono ='$_REQUEST[telefono]', 
    correo ='$_REQUEST[correo]', 
    direccion ='$_REQUEST[direccion]', 
    cargo ='$_REQUEST[cargo]', 
    sueldo ='$_REQUEST[sueldo]',
    nro_cuenta ='$_REQUEST[nro_cuenta]',
    banco ='$_REQUEST[banco]',
    ci_banco ='$_REQUEST[ci_banco]',
    nombre_banco ='$_REQUEST[nombre_banco]' WHERE id='$_REQUEST[id]'");
  
  registrarOperacion($_SESSION['admin']['nombre']." ha modificado un empleado",$_SESSION['admin']['id'],"EMPLEADO");
}

 function buscarEmpleado(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM empleado WHERE id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;
}


 ?>