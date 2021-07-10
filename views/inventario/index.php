<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>
<?php
require_once "../../controladores/producto.php";
if(isset($_REQUEST['operacion']) && $_REQUEST['operacion']=='eliminar'){
  eliminarProducto();
}
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include ('../../php/head.php'); /* barra lateral y barra superior */
  ?>
  <title>Inventario</title>
</head>

<body onload="startTime()">
      <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_inventario.php'); /* barra lateral y barra superior */
      ?>

<header class="page-header bg-img-cover overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
        <div class="container" style="margin-top: 6rem;">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="display-3 tct text-white">Inventario</h1>
              <i class="material-icons-round icon-head icon-animate">bubble_chart</i>
            </div>
          </div>
        </div>            
    </header>

    <div class="container">
            <div class="row" style="margin-top: -2rem;">
                <div class="my-2">
                  <form class="d-none d-sm-inline-block form-inline mw-100 navbar-search">
                      <input class="search search-inv" type="search" placeholder="Buscar">
                  </form>  
              </div>       
            </div>
        </div>


<section class="section-inv">
  <div class="container-fluid">
    <div class="section--center mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
      <div class="mdl-tabs__tab-bar mb-4 tct">
          <!--Ingredientes-->
            <a style="text-decoration:none" id="Perfil" href="#seccion-1" class="mdl-tabs__tab red is-active">          
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon red btn-sm">category</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon red btn-sm mr-2">category</span>Stock de ingredientes
              </div>
            </a>    
      </div>  

      <div class="mdl-tabs__panel is-active" id="seccion-1">
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand red">category</i>
                        <h2 class="red">Ingredientes</h2>
                    </div>

                    <div class="table-responsive">
                    <table class="table" width="100%">
<thead>
  <tr>
    <th>Nro</th>
    <th>Código de Producto</th>
    <th>Nombre</th>
    <th>Cantidad</th>
    <th>Precio de Compra</th>
    <th>Precio de Venta</th>
    <th>Acciones</th>
  </tr>
  </thead>
    <tbody>
<?php 
$resultados = listarProducto();
foreach ($resultados as $key => $r){ ?>
  <tr>
    <td><?php echo $r['id']; ?></td>
    <td><?php echo $r['codigo_pt']; ?></td>
    <td><?php echo $r['nombre']; ?></td>
    <td><?php echo sprintf("%.2f",$r['cantidad'] / ($r['equivalencia_venta'] * $r['equivalencia'])); ?> <?php echo $r['und_entrada']; ?><br>
      <?php echo round($r['cantidad'] / $r['equivalencia_venta']); ?> <?php echo $r['und']; ?><br>
    
  <?php echo $r['cantidad'] /// $r['equivalencia_venta']; ?> <?php echo $r['und_consumo']; ?><br></td>
    <td><?php echo $r['precio_c']; ?></td>
    <td><?php echo $r['precio_v']; ?></td>
    <td>
        <a href="producto_edicion.php?operacion=modificar&id=<?=$r['id'] ?>"><button class="btn bg-purple" title="Modificar"><i class="fa fa-edit"></i></button></a>
      <button type="button" class="btn btn-danger" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#modal-danger">
                <i class="fa fa-times"></i>
              </button>
    </td>

    
  </tr>
<?php } ?>
  </tbody>
                    </table>
                    </div>
              </div>
          </div><!--fin de seccion 1-->
    </div>
  </div>
</section> 
<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_logout.php'); 
?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
