<?php 

if(file_exists("conexion-BD.php"))
require_once("conexion-BD.php");
else
require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarCita(){
  global $db;
  $id_cliente = $_REQUEST['id_cliente'];
  $fecha = $_REQUEST['fecha'];
  $hora = $_REQUEST['hora'];  
  $codigo = 'CT'.substr(md5(rand(1,96786)), 0,3); 
  mysqli_query($db,"INSERT INTO citas VALUES (NULL,'".$id_cliente."','0','".$codigo."','".$fecha."','".$hora."',0,'PENDIENTE')");

  $r = mysqli_query($db,"SELECT MAX(id) as ultimoid FROM citas");
  $temporal = mysqli_fetch_assoc($r);
  if(!$temporal) die('Error de sintaxis');
  registrarOperacion(" ha registrado una cita",$_SESSION['admin']['id'],"CITA");
  return $temporal['ultimoid'];

}

 function aEsaHora(){ 
  global $db;
  $resultados=[];
  $r = mysqli_query($db,"SELECT * from citas WHERE fecha='$_REQUEST[fecha]' and hora='$_REQUEST[hora]'");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function traerServicios(){ 
  global $db;
  $resultados=[];
  $r = mysqli_query($db,"SELECT cita_servicio.id_servicio,cita_servicio.id_servicio,cita_servicio.precio, servicio.nombre,servicio.tiempo  
    FROM cita_servicio 
inner join servicio on servicio.id=cita_servicio.id_servicio
    WHERE id_cita=$_REQUEST[id]");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}


 function insertarCitaServicio($id_cita,$id_servicio,$precio){
  global $db; 
  mysqli_query($db,"INSERT INTO cita_servicio VALUES (NULL,'".$id_cita."','".$id_servicio."','".$precio."')"); 
}

 function cancelarCita(){ 
  global $db;
  mysqli_query($db,"UPDATE citas SET estado='CANCELADA' WHERE id=$_REQUEST[id]");
  registrarOperacion(" ha cancelado una cita",$_SESSION['admin']['id'],"CITA");
  $_SESSION['eliminada']=1;

}


 function postergarCita(){ 
  global $db;
  mysqli_query($db,"UPDATE citas SET fecha='$_REQUEST[fecha]',hora='$_REQUEST[hora]' WHERE id=$_REQUEST[id]");
$_SESSION['modificada'] = date("d/m/Y h:i:s a",strtotime($_REQUEST['fecha'].' '.$_REQUEST['hora'])); 
  registrarOperacion(" ha postergado una cita",$_SESSION['admin']['id'],"CITA");
}


 function listarCitasDia(){
  global $db;
  $resultados = [];
  $sql = "SELECT citas.*,cliente.nombre FROM citas
  INNER JOIN cliente ON cliente.id=citas.id_identificacion
WHERE citas.estado='PENDIENTE'  AND fecha = CURRENT_DATE() ";
  
  $r = mysqli_query($db,$sql); 
  return mysqli_num_rows($r);
}


 function listarCita(){
  global $db;
  $resultados = [];
  $sql = "SELECT citas.*,cliente.nombre FROM citas
  INNER JOIN cliente ON cliente.id=citas.id_identificacion
WHERE citas.estado<>'CANCELADA'";

  if(isset($_POST['fecha']) && trim($_POST['fecha'])!=''){
    $sql .= " AND fecha LIKE '%$_POST[fecha]%' ";
  }
  
   $sql .= "ORDER BY fecha DESC";
  $r = mysqli_query($db,$sql);
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarCitas(){
  global $db;
  mysqli_query($db,"UPDATE servicio SET codigo_s='$_REQUEST[codigo_s]',nombre='$_REQUEST[nombre]',precio='$_REQUEST[precio]' WHERE id='$_REQUEST[id]'");
  registrarOperacion(" ha modificado una cita",$_SESSION['admin']['id'],"CITA");
}

 function buscarCita(){
  global $db;
 $r =  mysqli_query($db,"SELECT *,SUM(servicio.precio) as total FROM `citas` INNER JOIN cita_servicio ON citas.id=cita_servicio.id_cita INNER JOIN servicio ON servicio.id=cita_servicio.id_servicio WHERE citas.id=$_REQUEST[id] GROUP BY cita_servicio.id_cita");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}

 function totalDia($fecha){
      global $db;
      $total = 0;
 $r =  mysqli_query($db,"SELECT * from citas WHERE fecha='$fecha'");
    while($temporal = mysqli_fetch_assoc($r) ){
      
        $r2 =  mysqli_query($db,"select SUM(servicio.tiempo) as sumatiempo from  cita_servicio 
          INNER JOIN citas ON citas.id = cita_servicio.id_cita
          INNER JOIN servicio ON servicio.id = cita_servicio.id_servicio
         WHERE id_cita=$temporal[id]");
          $fila = mysqli_fetch_assoc($r2);
          $total += $fila['sumatiempo'];

         
    }
  return $total;

}


 ?>