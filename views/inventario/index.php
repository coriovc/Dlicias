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
            <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
              <h1 class="display-3 tct text-white">Inventario</h1>
              <i class="material-icons-round icon-head icon-animate">bubble_chart</i>
            </div>
          </div>
        </div>            
    </header>

    <!--<div class="container" data-aos="fade-right" data-aos-delay="200">
            <div class="row" style="margin-top: -2rem;">
                <div class="my-2">
                  <form class="d-none d-sm-inline-block form-inline mw-100 navbar-search">
                      <input class="search search-inv" type="search" placeholder="Buscar">
                  </form>  
              </div>       
            </div>
        </div>-->


<section class="section-inv">
  <div class="container-fluid" data-aos="fade-up" data-aos-delay="1000">
    
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active btn btn-white rounded-pill mx-2" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true"><span class="material-icons-round text-red mr-2">egg</span>Ingredientes Stock</button>
      </li>
    </ul>

      <hr>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
              
            <div class="card mb-4 overflow-hidden">
        <div class="card-header">
          <i class="material-icons-round grand red">category</i>
          <h2 class="red">Ingredientes</h2>
        </div>
                    
        <table class="table display" width="100%">
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
                        <td>
                            Stock - <?php echo $r['cantidad']?> <?php echo $r['und']; ?>
                            <br>
                            EV - <?php echo round($r['cantidad'] / $r['equivalencia_venta']); ?> <?php echo $r['und']; ?>
                            <br>
                            EQ - <?php echo sprintf("%.2f",$r['cantidad'] / ($r['equivalencia_venta'] * $r['equivalencia'])); ?> <?php echo $r['und_entrada']; ?>
                            </td>
                        <td><?php echo $r['precio_c']; ?>Bs</td>
                        <td><?php echo $r['precio_v']; ?>Bs</td>
                        <td>
                            <!--<a href="producto_edicion.php?operacion=modificar&id=<?=$r['id'] ?>"><button class="btn bg-purple" title="Modificar"><i class="fa fa-edit"></i></button></a>
                          <button type="button" class="btn btn-danger" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#modal-danger">
                                    <i class="fa fa-times"></i>
                                  </button>-->
                          <a class="btn btn-purple btn-icon btn-sm lift-img" title="Editar" href="producto_edicion.php?operacion=modificar&id=<?=$r['id'] ?>"><span class="material-icons-round">edit</span></a>
                          
                          <button class="btn btn-red btn-icon btn-sm lift-X-r" title="Eliminar" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#eliminar-ingrediente"><span class="material-icons-round">close</span></button>
                        </td>

                        
                      </tr>
                    <?php } ?>
            </tbody>
        </table>
      </div>

          </div>
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
