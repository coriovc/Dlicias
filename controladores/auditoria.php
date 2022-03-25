<?php 

require_once("conexion-BD.php");

 function registrarOperacion($texto,$id,$tipo){
  global $db;
  mysqli_query($db,"INSERT INTO bitacora(campo_texto,fecha,id_usuario,tipo) VALUES ('".$texto."',NOW(), $id,'$tipo')");
}

 function listarOperaciones($fecha=null){
  global $db;
  $resultados = [];
  $sql = "SELECT bitacora.*,usuario.nombre FROM bitacora 
INNER JOIN usuario ON usuario.id=id_usuario
  WHERE 1 ";

  if(isset($_POST['fecha']) && trim($_POST['fecha'])!=''){
    $sql .= " AND fecha LIKE '%$_POST[fecha]%' ";
  }

  if(isset($_POST['usuario']) && trim($_POST['usuario'])!=''){
    $sql .= " AND id_usuario = '$_POST[usuario]' ";
  }

  $sql .= " ORDER BY fecha DESC";
  $r = mysqli_query($db,$sql);
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function listarOperacionesuser($fecha=null){
  global $db;
  $resultados = [];
  $sql = "SELECT bitacora.*,usuario.nombre FROM bitacora 
INNER JOIN usuario ON usuario.id=id_usuario
  WHERE 1 ";

  if(isset($_POST['fecha']) && trim($_POST['fecha'])!=''){
    $sql .= " AND fecha LIKE '%$_POST[fecha]%' ";
  }

  if(isset($_POST['usuario']) && trim($_POST['usuario'])!=''){
    $sql .= " AND id_usuario = '$_POST[usuario]' ";
  }

  $sql .= " ORDER BY fecha ASC";
  $r = mysqli_query($db,$sql);
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}


function eliminarBitacora(){ 
  global $db;
  mysqli_query($db,"TRUNCATE TABLE bitacora");
  
}

 ?>
