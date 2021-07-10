<?php 
require_once  "../controladores/producto.php";  

if(!isset($_SESSION))
	session_start();

if(isset($_POST["id_producto"])){

  if(isset($_SESSION["venta"][$_POST["id_producto"]])){
    $_SESSION["venta"][$_POST["id_producto"]]['cantidad'] += intval($_POST["cantidad"]);
  }
  else{
    $_REQUEST["id"] = $_POST["id_producto"];
    $producto = buscarProducto();
    if($producto){
      if(intval($_POST['cantidad']) * intval($producto['equivalencia_venta']) > intval($producto["cantidad"]))
      {
        ?>
<script type="text/javascript">alert('No hay suficiencia en stock. La cantidad de la que se dispone es: <?php echo intval($producto['cantidad']) / intval($producto['equivalencia_venta']); ?> <?php echo obtenerUnidadVenta($producto['id']); ?>');</script>
        <?php
      }
      else{
      $_SESSION["venta"][$_POST["id_producto"]] = [
        "nombre" => $producto["nombre"],
        "cantidad" => $_POST["cantidad"],
        "precio_v" => $producto["precio_v"],
        "unidad_venta" => obtenerUnidadVenta($producto["id"])
      ];
      }
    }
  }
}

 
die( );
?>