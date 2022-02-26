<?php 

if(file_exists("conexion-BD.php"))
require_once("conexion-BD.php");
else
require_once("conexion-BD.php");
require_once "auditoria.php";

 function registrarPedido(){
  global $db;
  $id_cliente = $_REQUEST['id_cliente'];
  $fecha = $_REQUEST['fecha'];
  $hora = $_REQUEST['hora'];  
  $codigo = 'CT'.substr(md5(rand(1,96786)), 0,3); 
  mysqli_query($db,"INSERT INTO pedidos VALUES (NULL,'".$id_cliente."','0','".$codigo."','".$fecha."','".$hora."',0,'PENDIENTE')");

  $r = mysqli_query($db,"SELECT MAX(id) as ultimoid FROM pedidos");
  $temporal = mysqli_fetch_assoc($r);
  if(!$temporal) die('Error de sintaxis');
  registrarOperacion(" ha registrado una pedido",$_SESSION['admin']['id'],"pedido");
  return $temporal['ultimoid'];

}

 function aEsaHora(){ 
  global $db;
  $resultados=[];
  $r = mysqli_query($db,"SELECT * from pedidos WHERE fecha='$_REQUEST[fecha]' and hora='$_REQUEST[hora]'");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function traerServicios(){ 
  global $db;
  $resultados=[];
  $r = mysqli_query($db,"SELECT pedido_servicio.id_servicio,pedido_servicio.id_servicio,pedido_servicio.precio, servicio.nombre,servicio.tiempo  
    FROM pedido_servicio 
inner join servicio on servicio.id=pedido_servicio.id_servicio
    WHERE id_pedido=$_REQUEST[id]");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}


 function insertarPedidoServicio($id_pedido,$id_servicio,$precio){
  global $db; 
  mysqli_query($db,"INSERT INTO pedido_servicio VALUES (NULL,'".$id_pedido."','".$id_servicio."','".$precio."')"); 
}

 function cancelarPedido(){ 
  global $db;
  mysqli_query($db,"UPDATE pedidos SET estado='CANCELADA' WHERE id=$_REQUEST[id]");
  registrarOperacion(" ha cancelado una pedido",$_SESSION['admin']['id'],"pedido");
  $_SESSION['eliminada']=1;

}


 function postergarPedido(){ 
  global $db;
  mysqli_query($db,"UPDATE pedidos SET fecha='$_REQUEST[fecha]',hora='$_REQUEST[hora]' WHERE id=$_REQUEST[id]");
$_SESSION['modificada'] = date("d/m/Y h:i:s a",strtotime($_REQUEST['fecha'].' '.$_REQUEST['hora'])); 
  registrarOperacion(" ha postergado una pedido",$_SESSION['admin']['id'],"pedido");
}


 function listarPedidosDia(){
  global $db;
  $resultados = [];
  $sql = "SELECT pedidos.*,cliente.nombre FROM pedidos
  INNER JOIN cliente ON cliente.id=pedidos.id_identificacion
WHERE pedidos.estado='PENDIENTE'  AND fecha = CURRENT_DATE() ";
  
  $r = mysqli_query($db,$sql); 
  return mysqli_num_rows($r);
}


 function listarPedido(){
  global $db;
  $resultados = [];
  $sql = "SELECT pedidos.*,cliente.nombre FROM pedidos
  INNER JOIN cliente ON cliente.id=pedidos.id_identificacion
WHERE pedidos.estado<>'CANCELADA'";

  if(isset($_POST['fecha']) && trim($_POST['fecha'])!=''){
    $sql .= " AND fecha LIKE '%$_POST[fecha]%' ";
  }
  
   $sql .= "ORDER BY fecha DESC";
  $r = mysqli_query($db,$sql);
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarPedidos(){
  global $db;
  mysqli_query($db,"UPDATE servicio SET codigo_s='$_REQUEST[codigo_s]',nombre='$_REQUEST[nombre]',precio='$_REQUEST[precio]' WHERE id='$_REQUEST[id]'");
  registrarOperacion(" ha modificado una pedido",$_SESSION['admin']['id'],"pedido");
}

 function buscarPedido(){
  global $db;
 $r =  mysqli_query($db,"SELECT *,SUM(servicio.precio) as total FROM `pedidos` INNER JOIN pedido_servicio ON pedidos.id=pedido_servicio.id_pedido INNER JOIN servicio ON servicio.id=pedido_servicio.id_servicio WHERE pedidos.id=$_REQUEST[id] GROUP BY pedido_servicio.id_pedido");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}

 function totalDia($fecha){
      global $db;
      $total = 0;
 $r =  mysqli_query($db,"SELECT * from pedidos WHERE fecha='$fecha'");
    while($temporal = mysqli_fetch_assoc($r) ){
      
        $r2 =  mysqli_query($db,"select SUM(servicio.tiempo) as sumatiempo from  pedido_servicio 
          INNER JOIN pedidos ON pedidos.id = pedido_servicio.id_pedido
          INNER JOIN servicio ON servicio.id = pedido_servicio.id_servicio
         WHERE id_pedido=$temporal[id]");
          $fila = mysqli_fetch_assoc($r2);
          $total += $fila['sumatiempo'];

         
    }
  return $total;

}


 ?>