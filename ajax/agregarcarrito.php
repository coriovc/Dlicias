<?php 
require_once  "../controladores/servicio.php";  

if(!isset($_SESSION))
	session_start();

if(isset($_POST["id_servicio"])){

  if(isset($_SESSION["venta"][$_POST["id_servicio"]])){
    $_SESSION["venta"][$_POST["id_servicio"]]['cantidad'] += intval($_POST["cantidad"]);
  }
  else{
    $_REQUEST["id"] = $_POST["id_servicio"];
    $servicio = buscarservicio();
    if($servicio){
      if(intval($_POST['cantidad']) * intval($servicio['equivalencia_venta']) > intval($servicio["cantidad"]))
      {
        ?>
<script type="text/javascript">alert('No hay suficiencia en stock. La cantidad de la que se dispone es: <?php echo intval($servicio['cantidad']) / intval($servicio['equivalencia_venta']); ?> <?php echo obtenerUnidadVenta($servicio['id']); ?>');</script>
        <?php
      }
      else{
      $_SESSION["venta"][$_POST["id_servicio"]] = [
        "nombre" => $servicio["nombre"],
        "cantidad" => $_POST["cantidad"],
        "precio_v" => $servicio["precio_v"],
        "unidad_venta" => obtenerUnidadVenta($servicio["id"])
      ];
      }
    }
  }
}

 
die( );
?>