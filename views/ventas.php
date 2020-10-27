<?php
    /*session_start(); 
    if (empty($_SESSION['email']) or empty($_SESSION['password'])){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("location:index.php");
    }
    include('../controllers/controller-usuario.php');
    $l = UsuarioLog();
    if($l && count($l)){
    foreach ($l as $key => $value) {}
    }*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include ('../php/head.php');
  ?>
  <title>Ventas</title>
  <!-- Estilos de esta pagina-->

</head>
<body onload="startTime()">
      <?php
      include ('../php/navbar.php');
      include ('../php/menu/menu_ventas.php'); /* barra lateral y barra superior */
      ?>
  <header class="page-header bg-img-cover overlay overlay-30" style="background-color: #000;">
  <div class="container text-center" style="margin-top: 6rem;">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1 class="display-3 tct text-white">Ventas</h1>
      </div>
    </div>
  </div>
  <div class="svg-border-rounded text-white">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
  </div>
  </header>

  <section class="section-ajustes"> 
    <div class="container-fluid">
      <div class="row">
        
      <div class="col-lg-3 mb-4">
        <div class="card tct o-visible mb-4">
            <div class="card-body">
              <div class="text-center">
                <img style="margin-top: -20%;width: 90%;" src="../imagenes/feature-icon-01.svg"/>
              </div>

              <div class="mt-3 d-flex align-items-center justify-content-between" style="margin-left: -0.5rem;">
                  <h6 class="mb-0 text-white">Opciones</h6>
              </div>

              <div class="my-2">
                <a class="btn btn-red btn-add tct mb-2 btn-block" href="error-404.php">
                  <div class="btn-icon bg-light text-red shadow mr-2">
                  <i class="material-icons-round icon-size-35">payment</i></div>Nueva Venta</a>

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
            <a style="text-decoration:none" id="ingredientes" href="#seccion-1" class="mdl-tabs__tab red is-active">          
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon red btn-sm">store</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon red btn-sm mr-2">store</span>Ventas Realizadas
              </div>
            </a>   

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

          <div class="mdl-tabs__panel is-active" id="seccion-1">
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand red">store</i>
                        <h2 class="red">Ventas</h2>
                    </div>

                    <div class="table-responsive">
                    <table class="table" width="100%">
                      <thead class="text-red bg-table-red">
                      <tr>
                        <th>Nro de venta</th>
                        <th>Cedula/RIF</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th class="text-right">Acciones</th>
                      </tr>
                      </thead>                  
                      <tbody>
                          <tr>
                            <td>P1234</td>
                            <td>V-26866132</td>
                            <td>Victor corio</td>
                            <td>20/20/20</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round mr-2">visibility</span>ver</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round mr-2">close</span>Eliminar</a>
                            </td>
                          </tr>
                          <tr>
                            <td>P1234</td>
                            <td>V-26866132</td>
                            <td>Victor corio</td>
                            <td>20/20/20</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round mr-2">visibility</span>ver</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round mr-2">close</span>Eliminar</a>
                            </td>
                          </tr>
                          <tr>
                            <td>P1234</td>
                            <td>V-26866132</td>
                            <td>Victor corio</td>
                            <td>20/20/20</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round mr-2">visibility</span>ver</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round mr-2">close</span>Eliminar</a>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                    </div>
              </div>
          </div><!--fin de seccion 1-->

          <div class="mdl-tabs__panel" id="seccion-2"> 
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand red">person</i>
                        <h2 class="red">Clientes</h2>
                    </div>

                    <div class="table-responsive">
                    <table class="table" width="100%">
                      <thead class="text-red bg-table-red">
                      <tr>
                        <th>Cedula/RIF</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th class="text-right">Acciones</th>
                      </tr>
                      </thead>                  
                      <tbody>
                          <tr>
                            <td>V-26866132</td>
                            <td>Victor Corio</td>
                            <td>0412 4784959</td>
                            <td>Maracay</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">edit</span>Editar</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
                            </td>
                          </tr>
                          <tr>
                            <td>V-26866132</td>
                            <td>Victor Corio</td>
                            <td>0412 4784959</td>
                            <td>Maracay</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">edit</span>Editar</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
                            </td>
                          </tr>
                          <tr>
                            <td>V-26866132</td>
                            <td>Victor Corio</td>
                            <td>0412 4784959</td>
                            <td>Maracay</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">edit</span>Editar</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
                            </td>
                          </tr>
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
       
<?php
/* footer */
include ('../php/footer.php'); 
/* scripts */
include ('../php/scripts.php');
/* Modales */
include ('../php/modal/modal_logout.php');
include ('../php/modal/modal_ventas.php'); 
?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
