<?php 
require_once  "../controladores/producto.php";  

 function citasPendientes($id){
  global $db;
  $r = mysqli_query($db,"SELECT citas.* FROM citas 
    WHERE citas.id_identificacion=$id AND citas.estado='PENDIENTE' AND citas.fecha='$_REQUEST[fecha]'");
    $resultados = []; 
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}
 function buscarCita(){
  global $db;
 $r =  mysqli_query($db,"SELECT *,SUM(servicio.precio) as total FROM `citas` INNER JOIN cita_servicio ON citas.id=cita_servicio.id_cita INNER JOIN servicio ON servicio.id=cita_servicio.id_servicio WHERE citas.id=$_REQUEST[id] GROUP BY cita_servicio.id_cita");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}

if(!isset($_SESSION))
  session_start();  
  $total = 0;
if(isset($_SESSION["venta"]) && is_array($_SESSION["venta"]) && count($_SESSION["venta"])){
  foreach($_SESSION["venta"] as $id_producto => $elemento){
$total = $total + intval($elemento['cantidad']) * intval($elemento['precio_v']);
    }
  }


$pendientes = citasPendientes($_REQUEST['id_cliente']);
if ($pendientes && is_array($pendientes) && count($pendientes)) {
  foreach ($pendientes as $key => $value) {

    $_REQUEST['id'] = $value['id'];
    $cita = buscarCita(); 
$total = $total +  intval($cita['total']);
}
}
die("Total: $total Bs. S.<script>var totalAjax= $total;</script>");
   ?>