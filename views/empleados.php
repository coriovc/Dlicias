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
  <title>Empleados</title>
  <!-- Estilos de esta pagina-->

</head>
<body onload="startTime()">
      <?php
      include ('../php/navbar.php');
      include ('../php/menu/menu_emp.php'); /* barra lateral y barra superior */
      ?>
  <header class="page-header bg-img-cover overlay overlay-30" style="background-color: #000;">
  <div class="container text-center" style="margin-top: 6rem;">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1 class="display-3 tct text-white">Empleados</h1>
      </div>
    </div>
  </div>
  <div class="svg-border-rounded text-white">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
  </div>
  </header>

  <section class="section-empleados">
    <div class="container-fluid">
      <div class="row">        
        <div class="col-lg-3 mb-4">
          <div class="justify-content-center tct text-center">
              
              <img style="width: 50%;" src="../imagenes/drawkit-developer-woman-flush.svg"/>
              <div class="d-flex mt-4" style="margin-left: -0.5rem;">
                    <h6 class="mb-0">Buscar Empleado:</h6>
                </div>
              <div class="my-2">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control rounded-pill no-rounded-right dark" placeholder="Ejem: victor corio...." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary btn-icon" type="button">
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
                  <a class="btn btn-secondary btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-producto">
                    <div class="btn-icon bg-light text-secondary shadow mr-2">
                    <i class="material-icons-round icon-size-35">person_add</i></div>Nuevo Empleado</a>

                  <a class="btn btn-secondary btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-producto">
                    <div class="btn-icon bg-light text-secondary shadow mr-2">
                    <i class="material-icons-round icon-size-35">add_task</i></div>Añadir Horario</a>

                  <a class="btn btn-yellow btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-pagar-emp">
                    <div class="btn-icon bg-light text-yellow shadow mr-2">
                    <i class="material-icons-round icon-size-35">attach_money</i></div>Pagar</a>
                  
                  <a class="btn btn-orange btn-add tct btn-block" href="#" data-toggle="modal" data-target="#modal-servicio">
                    <div class="btn-icon bg-light text-orange shadow mr-2">
                    <i class="material-icons-round icon-size-35">warning</i></div>Reportar</a>
                </div>
              </div>
          </div>
        </div>
        
        <div class="col-lg-8 col-xl-9 mb-4">   

         <div class="card my-4 overflow-hidden">
            <div class="card-header">
              <i class="material-icons-round grand red">group</i>
              <h2 class="red">Empleados</h2>
            </div>

                    <div class="datatable table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                      <thead class="text-primary bg-table-red">
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
                          <a class="btn btn-blue rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">account_circle</span>Ver</a>
                          <a class="btn btn-yellow rounded-pill btn-sm lift-img" href="#!" ><span class="material-icons-round">attach_money</span>Pagar</a>
                          <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
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
                          <a class="btn btn-blue rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">account_circle</span>Ver</a>
                          <a class="btn btn-yellow rounded-pill btn-sm lift-img" href="#!" ><span class="material-icons-round">attach_money</span>Pagar</a>
                          <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
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
                          <a class="btn btn-blue rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">account_circle</span>Ver</a>
                          <a class="btn btn-yellow rounded-pill btn-sm lift-img" href="#!" ><span class="material-icons-round">attach_money</span>Pagar</a>
                          <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
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
include ('../php/footer.php'); 
/* scripts */
include ('../php/scripts.php');
/* Modales */
include ('../php/modal/modal_logout.php'); 
?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>