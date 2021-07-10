<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>
<?php
require_once "../../controladores/venta.php";
require_once "../../controladores/clientes.php";
if(isset($_REQUEST['operacion']) && $_REQUEST['operacion']=='eliminar'){
  eliminarCliente();
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Ventas</title>
  <!-- Estilos de esta pagina-->

</head>
<body onload="startTime()">
      <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_ventas.php'); /* barra lateral y barra superior */
      ?>
  <header class="page-header bg-img-cover overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
  <div class="container" style="margin-top: 6rem;">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-3 tct text-white">Ventas</h1>
        <i class="material-icons-round icon-head icon-animate">payment</i>
      </div>
    </div>
  </div>
  </header>

  <section class="section-ajustes"> 
    <div class="container-fluid">
      <div class="row">
        
      <div class="col-lg-3 mb-4">
        <div class="card tct o-visible mb-4">
            <div class="card-body">

              <div class="d-flex align-items-center justify-content-between" style="margin-left: -0.5rem;">
                  <h6 class="mb-0">Opciones</h6>
              </div>

              <div class="my-2">
                <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
                <a class="btn btn-red btn-add tct mb-2 btn-block" href="../venta">
                  <div class="btn-icon bg-light text-red shadow mr-2">
                  <i class="material-icons-round icon-size-35">payment</i></div>Nueva Venta</a>
                <?php } ?>

                <a class="btn btn-secondary btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-cliente">
                  <div class="btn-icon bg-light text-secondary shadow mr-2">
                  <i class="material-icons-round icon-size-35">add</i></div>Nuevo Cliente</a>
              </div>
            </div>
        </div>
      </div>
        
        <div class="col-lg-8 col-xl-9 mb-4">   
          
         <div class="section--center mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
          <div class="mdl-tabs__tab-bar mb-4 tct">
          
          <!--Ingredientes-->
          <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
            <a style="text-decoration:none" id="ingredientes" href="#seccion-1" class="mdl-tabs__tab red is-active">          
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon red btn-sm">store</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon red btn-sm mr-2">store</span>Ventas Realizadas
              </div>
            </a>   
            <?php } ?>   
          <!--Productos finales-->  
            <a style="text-decoration:none" id="productos" href="#seccion-2" class="mdl-tabs__tab red">
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon btn-sm red">person</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon btn-sm red mr-2">person</span>Clientes
              </div>
            </a>

          </div> 
          <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
          <div class="mdl-tabs__panel  is-active" id="seccion-1">
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header justify-content-between">
                      <i class="material-icons-round grand red">store</i>
                        <h2 class="red">Ventas</h2>
                    <div class="dropdown no-caret mr-3">
                        <a class="btn btn-white rounded-pill shadow" href="javascript:popUp('imprimir_venta.php')">
                            <i class="material-icons-round mr-2">description</i>
                            <div class="font-weight-500 tct">Imprimir PDF</div>
                        </a>
                    </div>
                    </div>

                    <div class="table-responsive">
                    <table class="table display" width="100%">
                      <thead class="text-red bg-table-red">
                      <tr>
                        <th>Código</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Forma de pago</th>
                        <th>Total</th>
                        <th class="text-right">Acciones</th>
                      </tr>
                      </thead>                  
                      <tbody>
                        <?php 
                        $resultados = listarVenta();
                        foreach ($resultados as $key => $r){ ?>
                          <tr>
                            <td><?php echo $r['codigo_venta']; ?></td>
                            <td><?php echo $r['nombre']; ?></td>
                            <td><?php echo date("d/m/Y",strtotime($r['fecha'])); ?></td>
                            <td><?php echo $r['forma_pago']; ?></td>
                            <td><?php echo totalVenta($r['id']); ?> Bs. s.</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#"><span class="material-icons-round mr-2">visibility</span>ver</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round mr-2">close</span>Eliminar</a>
                            </td>
                          </tr>
                          <?php } ?>                          
                      </tbody>
                    </table>
                    </div>
              </div>
          </div><!--fin de seccion 1-->
          <?php } ?>   
          <div class="mdl-tabs__panel " id="seccion-2"> 
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand red">person</i>
                        <h2 class="red">Clientes</h2>
                    </div>

                    <div class="table-responsive">
                    <table class="table display" width="100%">
                      <thead class="text-red bg-table-red">
                      <tr>
                        <th>Nro</th>
                        <th>Cedula/RIF</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th class="text-right">Acciones</th>
                      </tr>
                      </thead>                  
                      <tbody>
                        <?php 
                        $resultados = listarCliente();
                        foreach ($resultados as $key => $r){ ?>
                          <tr>
                            <td><?php echo $r['id']; ?></td>
                            <td><?php echo $r['identificacion']; ?></td>
                            <td><?php echo $r['nombre']; ?></td>
                            <td><?php echo $r['telefono']; ?></td>
                            <td align="right">
                              <a class="btn btn-purple btn-icon btn-sm lift-img" href="detalle_cliente.php?id=<?=$r['id'] ?>"><span class="material-icons-round">visibility</span></a>
                              <a class="btn btn-purple btn-icon btn-sm lift-img" href="editar_cliente.php?id=<?=$r['id'] ?>"><span class="material-icons-round">edit</span></a>
                              <button class="btn btn-red btn-icon btn-sm lift-X-r" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#eliminar-Cliente" type="button" ><span class="material-icons-round">close</span></button>
                            </td>
                          </tr>
                          <?php } ?>                      
                      </tbody>
                    </table>
                    </div>
              </div>
          </div> <!--fin de seccion 2-->
         </div>
        </div> 
        
      </div>
    </div>
  </section> 
  <script type="text/javascript">
    function popUp(URL) {
        window.open(URL, 'Nombre de la ventana', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=900,height=800,left = 390,top = 50');
    }
  </script>

<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_eliminar.php');
include ('../../php/modal/modal_logout.php');
include ('../../php/modal/modal_ventas.php'); 
?>
<script src="../../js/material.js"></script>
</body>
</html>
