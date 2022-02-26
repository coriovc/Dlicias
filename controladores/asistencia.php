<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarAsistencia($id,$id_empleado,$fecha,$hora_e,$hora_s,$borrado){
  global $db;

 mysqli_query($db,"INSERT INTO  asistencia(id,id_empleado,fecha,hora_e,hora_s,borrado) VALUES (NULL,'".$id_empleado."','".$fecha." 00:00:00','".$hora_e." 00:00:00','".$hora_s." 00:00:00','".$borrado."')");

    

  registrarOperacion($_SESSION['admin']['nombre']." ha registrado una Asistencia",$_SESSION['admin']['id'],"ASISTENCIA");
}

 function eliminarAsistencia(){ 
  global $db;
  mysqli_query($db,"UPDATE asistencia SET borrado='S' WHERE asistencia.id=$_REQUEST[id]");
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
 $r = mysqli_query($db,"SELECT * FROM asistencia WHERE borrado='N' AND id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;
}


 ?>