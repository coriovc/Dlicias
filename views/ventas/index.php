<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>
<?php
require_once "../../controladores/venta.php";
require_once "../../controladores/clientes.php";

if(isset($_REQUEST['operacion-cli']) && $_REQUEST['operacion-cli']=='eliminar-cli'){
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
      <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
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
        <div class="card tct o-visible mb-4" data-aos="fade-right" data-aos-delay="200">
            <div class="card-body">

              <div class="d-flex align-items-center justify-content-between" style="margin-left: -0.5rem;">
                  <h6 class="mb-0">Opciones</h6>
              </div>

              <div class="my-2">
                
                <a class="btn btn-blue btn-add tct mb-2 btn-block" href="../venta">
                  <div class="btn-icon bg-light text-blue shadow mr-2">
                  <i class="material-icons-round icon-size-35">payment</i></div>Nueva Venta</a>
                

                <a class="btn btn-blue btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-cliente">
                  <div class="btn-icon bg-light text-blue shadow mr-2">
                  <i class="material-icons-round icon-size-35">add</i></div>Nuevo Cliente</a>
              </div>
            </div>
        </div>
      </div>
        
        <div class="col-lg-8 col-xl-9 mb-4" data-aos="fade-up" data-aos-delay="1000">   
          <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active btn btn-white rounded-pill mx-2" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true"><span class="material-icons-round text-blue mr-2">store</span>Ventas</button>
            
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false"><span class="material-icons-round text-blue mr-2">person</span>Clientes</button>
          </li>
        </ul>
        <hr>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header justify-content-between">
                      <i class="material-icons-round grand blue">store</i>
                        <h2 class="blue">Ventas</h2>
                      <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
                        <div class="mr-3">
                          <a class="btn btn-blue rounded-pill shadow" href="javascript:popUp_pdf('imprimir_ventas.php')">
                            <span class="material-icons-round mr-2">article</span>
                            <div class="font-weight-500 tct">Imprimir PDF</div>
                          </a>
                        </div>
                      <?php } ?>
                    </div>

                    <div>
                    <table class="table display" width="100%">
                      <thead class="text-blue bg-table-blue">
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
          </div>
          <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header justify-content-between">
                      <i class="material-icons-round grand blue">person</i>
                        <h2 class="blue">Clientes</h2>
                        <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
                        <div class="mr-3">
                          <a class="btn btn-blue rounded-pill shadow" href="javascript:popUp_pdf('imprimir_clientes.php')">
                            <span class="material-icons-round mr-2">article</span>
                            <div class="font-weight-500 tct">Imprimir PDF</div>
                          </a>
                        </div>
                        <?php } ?>
                    </div>

                    <div>
                    <table class="table display" width="100%">
                      <thead class="text-blue bg-table-blue">
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
          </div>
        </div>

        </div> 
        
      </div>
    </div>
  </section> 
  <script type="text/javascript">
    function popUp_pdf(URL) {
        window.open(URL, 'Nombre de la ventana', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=900,height=800,left = 0,top = 50');
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
