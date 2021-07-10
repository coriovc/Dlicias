<?php 
require_once  "../clasedb.php";  
require_once  "../controladores/cita.php";  

 function citasPendientes($id){
  global $db;
  $r = mysqli_query($db,"SELECT citas.* FROM citas 
    WHERE citas.id_identificacion=$id AND citas.estado='PENDIENTE' AND citas.fecha='$_REQUEST[fecha]'");
  	$resultados = [];
	while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}
$totals = 0;
$pendientes = citasPendientes($_REQUEST['id_cliente']);
if ($pendientes && is_array($pendientes) && count($pendientes)) {

	echo '<table   class="table table-bordered table-hover">       
            <thead>
            <tr>
              <th>Cita</th> 
              <th>Monto</th> 
            </tr>
            </thead>
            <tbody>';
	foreach ($pendientes as $key => $value) {
    $_REQUEST['id'] = $value['id'];
    $cita = buscarCita(); 
$totals = $totals +  intval($cita['total']);
   ?>
    <tr>
      <td><?='CITA PROGRAMADA PARA EL '.$cita['fecha'].' A LAS '.$cita['hora']?></td>
      <td><?=$cita['total']?> Bs. S.</td>   </td>
    </tr>
  <?php 
  } 
	echo '</tbody></table>';
}
else die('<h4><option value="">No tiene citas por pagar</h4>');
?>
