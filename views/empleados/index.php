<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
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
      include ('../../php/menu/menu_emp.php'); /* barra lateral y barra superior */
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
          <div class="justify-content-center tct text-center">
             
              <div class="d-flex mt-4" style="margin-left: -0.5rem;">
                    <h6 class="mb-0">Buscar Empleado:</h6>
                </div>
              <div class="my-2">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control rounded-pill no-rounded-right" placeholder="Ejem: victor corio...." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-yellow btn-icon" type="button">
                          <i class="material-icons-round">search</i>
                        </button>
                      </div>
                    </div>
                  </form>
              </div>
              
          </div>

          <div class="card tct o-visible my-4">
              <div class="card-body">
                <div class="d-flex" style="margin-left: -0.5rem;">
                    <h6 class="mb-0">Opciones</h6>
                </div>

                <div class="my-2">
                  <a class="btn btn-yellow btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-producto">
                    <div class="btn-icon bg-light text-yellow shadow mr-2">
                    <i class="material-icons-round icon-size-35">person_add</i></div>Nuevo Empleado</a>

                  
                  <a class="btn btn-yellow btn-add tct btn-block" href="#" data-toggle="modal" data-target="#modal-servicio">
                    <div class="btn-icon bg-light text-yellow shadow mr-2">
                    <i class="material-icons-round icon-size-35">pending_actions</i></div>Registrar entrada</a>
                </div>
              </div>
          </div>
        </div>
        
        <div class="col-lg-8 col-xl-9 mb-4" data-aos="fade-up" data-aos-delay="1000">   

         <div class="card my-4 overflow-hidden">
            <div class="card-header">
              <i class="material-icons-round grand yellow">group</i>
              <h2 class="yellow">Empleados</h2>
            </div>

                    <div class="datatable table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                      <thead class="text-yellow bg-table-yellow">
                      <tr>
                        <th class="text-center">
                          <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="selectall">
                          <label class="custom-control-label" for="selectall"></label>
                          </div>
                        </th>            
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Puesto</th>
                        <th>Estado</th>
                        <th></th>
                      </tr>
                      </thead>                  
                      <tbody>
                       <tr>
                        <td align="center">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input check" id="1">
                              <label class="custom-control-label check" for="1"></label>
                          </div>
                        </td>
                        <td><strong>CE-1234</strong></a></td>
                        <td><strong>Victor corio</strong></td>
                        <td><strong>Programador</strong></td>
                        <td>
                          <div class="badge badge-marketing badge-green-soft badge-pill text-green"><strong>Activo</strong></div>
                        </td>                      
                        <td align="right">
                          <a class="btn btn-blue rounded-pill btn-sm lift-img"  href="#!" data-toggle="tooltip" data-placement="bottom" title="Ver Empleado"><span class="material-icons-round">account_circle</span>Ver</a>
                          
                          <a class="btn btn-red rounded-pill btn-sm lift-img btn-icon"  href="#!" data-toggle="tooltip" data-placement="bottom" title="Eliminar empleado"><span class="material-icons-round">close</span></a>
                        </td>
                       </tr>
                       <tr>
                        <td align="center">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input check" id="2">
                              <label class="custom-control-label check" for="2"></label>
                          </div>
                        </td>
                        <td><strong>CE-1234</strong></a></td>
                        <td><strong>Victor corio</strong></td>
                        <td><strong>Programador</strong></td>
                        <td>
                          <div class="badge badge-marketing badge-green-soft badge-pill text-green"><strong>Activo</strong></div>
                        </td>                      
                        <td align="right">
                          <a class="btn btn-blue rounded-pill btn-sm lift-img"  href="#!" data-toggle="tooltip" data-placement="bottom" title="Ver Empleado"><span class="material-icons-round">account_circle</span>Ver</a>
                          
                          <a class="btn btn-red rounded-pill btn-sm lift-img btn-icon"  href="#!" data-toggle="tooltip" data-placement="bottom" title="Eliminar empleado"><span class="material-icons-round">close</span></a>
                        </td>
                       </tr> 
                       <tr>
                        <td align="center">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input check" id="3">
                              <label class="custom-control-label check" for="3"></label>
                          </div>
                        </td>
                        <td><strong>CE-1234</strong></a></td>
                        <td><strong>Victor corio</strong></td>
                        <td><strong>Programador</strong></td>
                        <td>
                          <div class="badge badge-marketing badge-green-soft badge-pill text-green"><strong>Activo</strong></div>
                        </td>                      
                        <td align="right">
                          <a class="btn btn-blue rounded-pill btn-sm lift-img"  href="#!" data-toggle="tooltip" data-placement="bottom" title="Ver Empleado"><span class="material-icons-round">account_circle</span>Ver</a>
                          
                          <a class="btn btn-red rounded-pill btn-sm lift-img btn-icon"  href="#!" data-toggle="tooltip" data-placement="bottom" title="Eliminar empleado"><span class="material-icons-round">close</span></a>
                        </td>
                       </tr> 
                        

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
include ('../../php/modal/modal_logout.php'); 
?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>