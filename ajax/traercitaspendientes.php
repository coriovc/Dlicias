<?php 
require_once  "../clasedb.php";  
require_once  "../controladores/pedido.php";  

 function pedidosPendientes($id){
  global $db;
  $r = mysqli_query($db,"SELECT pedidos.* FROM pedidos 
    WHERE pedidos.id_identificacion=$id AND pedidos.estado='PENDIENTE' AND pedidos.fecha='$_REQUEST[fecha]'");
  	$resultados = [];
	while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}
$totals = 0;
$pendientes = pedidosPendientes($_REQUEST['id_cliente']);
if ($pendientes && is_array($pendientes) && count($pendientes)) {

	echo '<table   class="table table-bordered table-hover">       
            <thead>
            <tr>
              <th>pedido</th> 
              <th>Monto</th> 
            </tr>
            </thead>
            <tbody>';
	foreach ($pendientes as $key => $value) {
    $_REQUEST['id'] = $value['id'];
    $pedido = buscarpedido(); 
$totals = $totals +  intval($pedido['total']);
   ?>
    <tr>
      <td><?='pedido PROGRAMADA PARA EL '.$pedido['fecha'].' A LAS '.$pedido['hora']?></td>
      <td><?=$pedido['total']?> Bs. S.</td>   </td>
    </tr>
  <?php 
  } 
	echo '</tbody></table>';
}
else die('<h4><option value="">No tiene pedidos por pagar</h4>');
?>
