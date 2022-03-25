<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarAsistencia(){
  global $db;

  $id_empleado= $_REQUEST['id_empleado'];   
  $fecha = $_REQUEST['fecha'];
  $hora_e = $_REQUEST['hora_e'];
  $hora_s = NULL;    

 mysqli_query($db,"INSERT INTO  asistencia VALUES (NULL,
  '".$id_empleado."',
  '".$fecha."',
  '".$hora_e."',
  '".$hora_s."')
   ");

    

  registrarOperacion($_SESSION['admin']['nombre']." ha registrado una Asistencia",$_SESSION['admin']['id'],"ASISTENCIA");
}

 function eliminarAsistencia(){ 
  global $db;
  mysqli_query($db,"DELETE FROM asistencia WHERE asistencia.id=$_REQUEST[id]");
  registrarOperacion($_SESSION['admin']['nombre']." ha eliminado una Asistencia",$_SESSION['admin']['id'],"ASISTENCIA");
}

 function listarAsistencia(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT asistencia.*,empleado.nombre FROM asistencia
    inner join empleado ON empleado.id=id_empleado
    ORDER BY DESC
    ");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}


 function buscarAsistencia(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM asistencia WHERE id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;
}


 ?>