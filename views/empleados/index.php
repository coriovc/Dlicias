<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>

<?php
require_once "../../controladores/empleado.php";
$lisempleado = listarEmpleado();
if(isset($_REQUEST['operacionEmp']) && $_REQUEST['operacionEmp']=='eliminarEmp'){
  eliminarEmpleado();
}
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Empleados</title>
  <!-- Estilos de esta pagina-->

</head>
<body onload="startTime()">
      <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_empleados.php'); /* barra lateral y barra superior */
      ?>
  <header class="page-header bg-img-cover overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
  <div class="container" style="margin-top: 6rem;">
    <div class="row">
      <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
        <h1 class="display-3 tct text-white">Empleados</h1>
        <i class="material-icons-round icon-head icon-animate">supervised_user_circle</i>
      </div>
    </div>
  </div>
  </header>

  <section class="section-empleados">
    <div class="container-fluid" data-aos="fade-right" data-aos-delay="400">
      <div class="row">        
        <div class="col-lg-3 mb-4">
          <div class="card tct o-visible my-4">
              <div class="card-body">
                <div class="d-flex" style="margin-left: -0.5rem;">
                    <h6 class="mb-0">Opciones</h6>
                </div>

                <div class="my-2">
                  <a class="btn btn-yellow btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-new-empleado">
                    <div class="btn-icon bg-light text-yellow shadow mr-2">
                    <i class="material-icons-round icon-size-35">person_add</i></div>Nuevo Empleado</a>

                  
                  <a class="btn btn-yellow btn-add tct btn-block" href="#" data-toggle="modal" data-target="#modal-registrar-entrada">
                    <div class="btn-icon bg-light text-yellow shadow mr-2">
                    <i class="material-icons-round icon-size-35">pending_actions</i></div>Registrar entrada</a>
                </div>
              </div>
          </div>
        </div>
        
        <div class="col-lg-8 col-xl-9 mb-4" data-aos="fade-up" data-aos-delay="1000">   

         <div class="card my-4 overflow-hidden">
            <div class="card-header justify-content-between">
              <i class="material-icons-round grand yellow">group</i>
              <h2 class="yellow">Empleados</h2>
              <div class="mr-3">
                <a class="btn btn-yellow rounded-pill shadow" href="javascript:popUp_pdf('imprimir_empleados.php')">
                  <span class="material-icons-round mr-2">article</span>
                  <div class="font-weight-500 tct">Imprimir PDF</div>
                </a>
              </div>

            </div>

                    <div class="datatable table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                      <thead class="text-yellow bg-table-yellow">
                      <tr>           
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Cargo</th>
                        <th>Estado</th>
                        <th></th>
                      </tr>
                      </thead>                  
                      <tbody>
                        <?php 
                        $resultados = listarEmpleado();
                        foreach ($resultados as $key => $r){ ?>
                       <tr>
                        <td><strong><?php echo $r['nombre'].' '.$r['apellido']; ?></strong></a></td>
                        <td><strong><?php echo $r['cedula']; ?></strong></td>
                        <td><strong><?php echo $r['cargo']; ?></strong></td>
                        <td>
                          <div class="badge badge-marketing badge-green-soft badge-pill text-green"><strong>Activo</strong></div>
                        </td>                      
                        <td align="right">
                          <a class="btn btn-blue rounded-pill btn-sm lift-X-l"  href="detalle_empleado.php?id=<?=$r['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Ver Empleado"><span class="material-icons-round">account_circle</span>Ver</a>
                          
                          <button class="btn btn-icon btn-transparent-dark btn-sm " onmouseover="$('#id_empleado').val('<?=$r['id']?>');" data-toggle="modal" data-target="#eliminar-Empleado" type="button" title="Eliminar Empleado"><span class="material-icons-round">close</span></button>
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
  </section>



<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_empleado.php');
include ('../../php/modal/modal_eliminar.php');
include ('../../php/modal/modal_logout.php'); 
?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>  

<script type="text/javascript">
    function popUp_pdf(URL) {
        window.open(URL, 'Nombre de la ventana', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=900,height=800,left = 0,top = 50');
    }
  </script>
</body>
</html>