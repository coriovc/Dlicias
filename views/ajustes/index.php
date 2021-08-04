<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>

<?php 
require_once "../../controladores/auditoria.php";
require_once "../../controladores/usuario.php";
if(isset($_REQUEST['operacion']) && $_REQUEST['operacion']=='eliminar'){
  eliminarBitacora();
}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include ('../../php/head.php');
  ?>
<title>Ajustes</title>
</head>
<body onload="startTime()">
    <?php
    include ('../../php/navbar.php');
    include ('../../php/menu/menu_confi.php'); /*barra superior */
    ?>
  <header class="page-header bg-img-cover overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
  <div class="container" style="margin-top: 6rem;">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-3 tct text-white">Ajustes</h1>
        <i class="material-icons-round icon-head icon-animate">settings</i>
      </div>
    </div>
  </div>
  </header>


  <section class="section-ajustes"> 
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-lg-3 mb-4">
          <div class="card o-visible mb-4 mt-4">
              <div class="card-body">
                <div class="content">
                <div class="text-center">
                  <img class="img-profile rounded-circle" src="../../imagenes/User-img.png"/>
                </div>

                <div>
                  <h6>CI</h6>
                  <h4><?php echo $_SESSION['admin']['ci']; ?></h4>
                </div>
                
                <div>
                  <h6>Nombre y Apellido</h6>
                  <h4><?php echo $_SESSION['admin']['nombre']; ?></h4>
                </div>

                <div>
                  <h6>Correo</h6>
                  <h4><?php echo $_SESSION['admin']['correo']; ?></h4>
                </div>
                
                <div class="mt-4 d-flex" style="margin-left: -0.5rem;">
                    <h6 class="mb-0">Opciones</h6>
                </div>

                <div class="my-2">
                  <a class="btn btn-red btn-add tct mb-2 btn-block" href="edit-perfil.php">
                    <div class="btn-icon bg-light text-red shadow mr-2">
                    <i class="material-icons-round icon-size-35">person</i></div>Editar prefil</a>

<?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>

                  <a class="btn btn-green btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-sistema">
                    <div class="btn-icon bg-light text-green shadow mr-2">
                    <i class="material-icons-round icon-size-35">wysiwyg</i></div>Ajustes del sistema</a>

                  <a class="btn btn-purple btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-privilegios">
                    <div class="btn-icon bg-light text-purple shadow mr-2">
                    <i class="material-icons-round icon-size-35">verified_user</i></div>Privilegios</a>

                  <a class="btn btn-purple btn-add tct btn-block" href="#" data-toggle="modal" data-target="#modal-usuario">
                    <div class="btn-icon bg-light text-purple shadow mr-2">
                    <i class="material-icons-round icon-size-35">person_add</i></div>Nuevo Usuario</a>
<?php } ?>  
                </div>
                </div>
              </div>
          </div>
        </div>
        
        <div class="col-lg-8 col-xl-9 mb-4">   
         <div class="section--center mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
          <div class="mdl-tabs__tab-bar mb-4 tct">
          
          <!--Perfil-->
            <a style="text-decoration:none" id="Perfil" href="#seccion-1" class="mdl-tabs__tab is-active">          
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon btn-sm">query_builder</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon btn-sm mr-2">query_builder</span>Mi Actividad
              </div>
            </a>
<?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>          
          <!--Mantenimiento-->  
            <a style="text-decoration:none" id="Mantenimiento" href="#seccion-2" class="mdl-tabs__tab yellow">
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon btn-sm yellow">build</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon btn-sm yellow mr-2">build</span>Mantenimiento
              </div>
            </a>
          
          <!--Centro de alertas
            <a style="text-decoration:none" id="CA" href="#seccion-4" class="mdl-tabs__tab red">
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon btn-sm red">notifications</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon btn-sm red mr-2">notifications</span>Centro de alertas
              </div>
            </a>-->  
          
          <!--informacion-->
            <a style="text-decoration:none" id="Imformacion" href="#seccion-5" class="mdl-tabs__tab green">          
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon btn-sm green">policy</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon btn-sm green mr-2">policy</span>Informacion
              </div>
            </a>
<?php } ?> 
          <!--Papelera-->  
            <a style="text-decoration:none" id="papelera" href="#seccion-6" class="mdl-tabs__tab red">
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon btn-sm red">delete</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon btn-sm red mr-2">delete</span>Papelera
              </div>
            </a>

          </div> 

          <div class="mdl-tabs__panel is-active" id="seccion-1"> 
                  <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand blue">history</i>
                        <h2>Mi Actividad</h2>
                    </div>

                    <div>
                    <table id="" class="table display" width="100%">
                      <thead class="text-blue bg-table-blue">
                      <tr>
                        <th>Actividad</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Actions</th>
                      </tr>
                      </thead>                  
                      <tbody>
                          <tr>
                            <td>Registro una venta</td>
                            <td>2011/04/25</td>
                            <td>12:00 PM</td>
                            <td>
                              <button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark mr-2"><i class="material-icons-round">more_vert</i></button><button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark"><span class="material-icons-round">delete</span></button>
                            </td>
                          </tr>
                          <tr>
                            <td>Registro una compra</td>
                            <td>2011/04/25</td>
                            <td>03:00 PM</td>
                            <td>
                              <button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark mr-2"><i class="material-icons-round">more_vert</i></button><button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark"><span class="material-icons-round">delete</span></button>
                            </td>
                          </tr>
                          <tr>
                            <td>Registro un estado sad</td>
                            <td>2011/04/25</td>
                            <td>11:11 PM</td>
                            <td>
                              <button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark mr-2"><i class="material-icons-round">more_vert</i></button><button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark"><span class="material-icons-round">delete</span></button>
                            </td>
                          </tr>
                          <tr>
                            <td>Registro una venta</td>
                            <td>2011/04/25</td>
                            <td>12:00 PM</td>
                            <td>
                              <button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark mr-2"><i class="material-icons-round">more_vert</i></button><button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark"><span class="material-icons-round">delete</span></button>
                            </td>
                          </tr>
                          <tr>
                            <td>Registro una compra</td>
                            <td>2011/04/25</td>
                            <td>03:00 PM</td>
                            <td>
                              <button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark mr-2"><i class="material-icons-round">more_vert</i></button><button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark"><span class="material-icons-round">delete</span></button>
                            </td>
                          </tr>
                          <tr>
                            <td>Registro un estado sad</td>
                            <td>2011/04/25</td>
                            <td>11:11 PM</td>
                            <td>
                              <button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark mr-2"><i class="material-icons-round">more_vert</i></button><button class="btn btn-datatable btn-icon btn-sm btn-transparent-dark"><span class="material-icons-round">delete</span></button>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
          </div> <!--fin de seccion 1-->

          <div class="mdl-tabs__panel" id="seccion-2">
            <div class="d-flex justify-content-between align-items-sm-center my-5">
              <div class="mr-4">
                  <h1 class="display-5 tct text-yellow">Bitacora</h1>
              </div>
              
              <div class="dropdown no-caret mr-3">
                  <a class="btn btn-white rounded-pill shadow-lg" href="#">
                      <i class="material-icons-round mr-2">download_for_offline</i>
                      <div class="font-weight-500 tct">Descargar PDF</div>
                  </a>
                  <a class="btn btn-white rounded-pill shadow-lg" href="#" data-toggle="modal" data-target="#modal-borrar-bitacora">
                      <i class="material-icons-round mr-2">delete</i>
                      <div class="font-weight-500 tct">Vaciar</div>
                  </a>
                  <a href="respaldo.php" onclick="respaldo()" class="btn btn-outline-warning rounded-pill lift-btn tct">
                    <i class="material-icons-round mr-2">file_download</i>
                    <h6 style="margin-bottom: 0;">Copia de seguridad de la BD</h6>
                  </a>
              </div>
            </div>
            
            <div class="card mb-4 overflow-hidden">
                <div class="card-header">
                  <i class="material-icons-round grand yellow">dns</i>
                  <h2 class="yellow" >Bitacora</h2>
                </div>

                        <div class="">
                        <table id="" class="table display" width="100%">
                          <thead class="text-yellow bg-table-yellow">
                          <tr>
                              <th>Tipo</th>                                   
                              <th>Actividad</th>
                              <th>Fecha y Hora</th>
                              <th>Acciones</th>
                          </tr>
                          </thead>

                          

                          <tbody>
                          <?php 
                          $resultados = listarOperaciones();
                          foreach ($resultados as $key => $r){ ?>
                              <tr>
                                
                                <td><div class="badge badge-purple badge-pill"><?php echo $r['tipo']; ?></div></td>
                                <td><?php echo $r['campo_texto']; ?></td>
                                <td><?php echo date("d/m/Y - h:i:s a",strtotime($r['fecha'])); ?></td>
                                <td>
                                  <button class="btn btn-sm btn-icon btn-transparent-dark">
                                  <span class="material-icons-round">delete</span></button>
                                </td>
                              </tr>
                              <?php } ?>
                          </tbody>
                        </table>
                        </div>
            </div>

            <hr>
            <!--<div class="row align-items-center my-5">
              <div class="col">
                <div class="text-center">
                  <h1 class="display-5 tct text-yellow">Copia de Seguridad</h1>
                </div>

                <div class="text-center">
                  <img style="width: 90%;" src="../../imagenes/CdS.png"/>
                </div>

                <div class="d-flex align-items-center justify-content-center my-4">
                  
                  <a href="respaldo.php" onclick="respaldo()" class="btn btn-yellow btn-sm rounded-pill lift-btn tct text-white"><h6 style="margin-bottom: 0;">Crear Copia de seguridad</h6><i class="material-icons-round ml-2">backup</i>
                  </a>
                </div>
              </div>

              <div class="col-lg-8">
                <div class="card mb-4 overflow-hidden">

                    <div class="card-header">
                      <i class="material-icons-round grand yellow">history</i>
                      <h2 class="yellow" >Copias de seguridad Realizadas</h2>
                    </div>

                    <div class="table-responsive">
                      <table class="table" width="100%">
                       <thead class="text-yellow bg-table-yellow">
                        <tr>
                          <th>Copia de seguridad</th>
                          <th>Generada por:</th>
                          <th>Fecha</th>
                          <th>Aciones</th>
                        </tr>
                       </thead>                  
                       <tbody>
                        <td>Backup-1234</td>
                        <td>Jan</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-datatable btn-icon btn-transparent-dark btn-sm"><span class="material-icons-round">restore</span></button>
                          <button class="btn btn-datatable btn-icon btn-transparent-dark btn-sm"><span class="material-icons-round">get_app</span></button>
                          <button class="btn btn-datatable btn-icon btn-transparent-dark btn-sm"><span class="material-icons-round">delete</span></button>
                        </td>
                       </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>-->

            <hr>

            <div class="d-flex justify-content-between align-items-sm-center my-5">
              <div class="mr-4">
                  <h1 class="display-5 tct text-yellow">Usuarios</h1>
              </div>
              
              <div class="dropdown no-caret mr-3">
                  <a class="btn btn-white rounded-pill shadow-lg" href="#" data-toggle="modal" data-target="#modal-usuario">
                      <i class="material-icons-round mr-2">person_add</i>
                      <div class="font-weight-500 tct">Nuevo Usuario</div>
                  </a>
              </div>
            </div>

            <div class="card my-4 overflow-hidden">
                <div class="card-header">
                  <i class="material-icons-round grand yellow">group</i>
                  <h2 class="yellow" >Usuarios</h2>
                </div>

                    <div class="datatable table-responsive">
                    <table id="" class="table display" width="100%">
                      <thead class="text-yellow bg-table-yellow">
                      <tr>
                        <th class="text-center">
                          <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="selectall">
                          <label class="custom-control-label" for="selectall"></label>
                          </div>
                        </th>            
                        <th>Nombre</th>
                        <th>Ci</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th></th>
                      </tr>
                      </thead>                  
                      <tbody>
                        <?php 
                        $resultados = listarUsuario();
                        foreach ($resultados as $key => $r){ ?>
                        <tr>
                        <td align="center">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input check" id="<?php echo $r['ci']; ?>">
                              <label class="custom-control-label check" for="<?php echo $r['ci']; ?>"></label>
                          </div>
                        </td>
                        <td><strong><?php echo $r['nombre']; ?></strong></td>
                        <td><strong><?php echo $r['ci']; ?></strong></td>
                        <td><strong><?php echo $r['tipo_usuario']; ?></strong></td>
                        <td>
                          <div class="badge badge-marketing badge-green-soft badge-pill text-green"><strong>Activo</strong></div>
                        </td>                      
                        <td align="right">
                          <a class="btn btn-yellow rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">account_circle</span>Ver</a>
                          <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
                        </td>
                      </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                    </div>                  
            </div>
          </div><!--fin de seccion 2-->
          
          <!--<div class="mdl-tabs__panel" id="seccion-4">
              <div class="card mb-4">
                  <div class="card-header">
                    <i class="material-icons-round grand red">notifications</i>
                    <h2 class="red">Alertas</h2>
                  </div>              
              <div class="card-body">
                  <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5><small>3 days ago</small>
                        </div>
                         <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                         <small>Donec id elit non mi porta.</small>
                      </a>

                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1 text-primary">List group item heading</h5><small>3 days ago</small>
                        </div>
                         <p class="mb-1 text-primary">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                         <small>Donec id elit non mi porta.</small>
                      </a>

                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1 text-primary">List group item heading</h5><small>3 days ago</small>
                        </div>
                         <p class="mb-1 text-primary">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                         <small>Donec id elit non mi porta.</small>
                      </a>
                  </div>
              </div><!-- fin card-body --  
              </div>
          </div>fin de seccion 4-->

          <div class="mdl-tabs__panel" id="seccion-5">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Informacion sobre D'leicias Cakes</h5>
                <div><a class="text-arrow-icon small" href="#!">Ver todo<i data-feather="arrow-right"></i></a></div>
              </div>
                <hr class="mb-4"/>                              
                <div class="row justify-content-center">
                  <div class="col-lg-5 col-xl-4 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-primary">Ajustes del sitema</h4>
                        <hr>     
                        <div class="content">
                          <h6>Moneda</h6>
                          <h4>Dolar</h4>
                        </div>
                        
                        <div class="content">
                          <h6>Simbolo</h6>
                          <h4>$</h4>
                        </div>
                        <div class="content">
                          <h6>Impuesto</h6>
                          <h4>IVA</h4>
                        </div> 
                        <div class="content">
                          <h6>Valor de Impuesto</h6>
                          <h4>13%</h4>
                        </div>                 
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-xl-4 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-primary">Informacion</h4>
                        <hr>     
                        <div class="content">
                          <h6>Empresa</h6>
                          <h4>D´licias Cakes</h4>
                        </div>
                        
                        <div class="content">
                          <h6>RIF</h6>
                          <h4>J-412387669</h4>
                        </div>
                        <div class="content">
                          <h6>Correo</h6>
                          <h4>Minimarket412@gmail.com</h4>
                        </div> 
                        <div class="content">
                          <h6>Telefono</h6>
                          <h4>0244-000000</h4>
                        </div>
                        <div class="content">
                          <h6>Direccion</h6>
                          <h4>Av principal el castaño, casa 188, maracay, Estado Aragua </h4>
                        </div>                 
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-xl-4 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-primary">Ajustes del sitema</h4>
                        <hr>
                          <div class="d-flex mb-4">
                            <div class="mr-3"><div class="btn-icon bg-primary"><span class="material-icons-round">article</span></div>
                            </div>
                            <div>
                            <div class="small txt-white">Documento 1</div>
                            <a class="text-primary small" href="#!"><h6 class="mb-1">Descargar</h6></a>
                            </div>
                          </div>
                          <div class="d-flex mb-4">
                            <div class="mr-3"><div class="btn-icon bg-primary"><span class="material-icons-round">article</span></div>
                            </div>
                            <div>
                            <div class="small txt-white">Documento 2</div>
                            <a class="text-primary small" href="#!"><h6 class="mb-1">Descargar</h6></a>
                            </div>
                          </div> 
                          <div class="d-flex mb-4">
                            <div class="mr-3"><div class="btn-icon bg-primary"><span class="material-icons-round">article</span></div>
                            </div>
                            <div>
                            <div class="small txt-white">Documento 3</div>
                            <a class="text-primary small" href="#!"><h6 class="mb-1">Descargar</h6></a>
                            </div>
                          </div> 
                          <div class="d-flex mb-4">
                            <div class="mr-3"><div class="btn-icon bg-primary"><span class="material-icons-round">article</span></div>
                            </div>
                            <div>
                            <div class="small txt-white">Documento 4</div>
                            <a class="text-primary small" href="#!"><h6 class="mb-1">Descargar</h6></a>
                            </div>
                          </div>                 
                      </div>
                    </div>
                  </div>               
                </div>

          </div><!--fin de seccion 5-->

          <div class="mdl-tabs__panel" id="seccion-6">

              <div class="text-left my-4">
                  <h6>En la papelera apareceran todos los elementos <span class="text-red">borrados</span> del sistema buedes buscarlos por <span class="text-red">nombre</span>, <span class="text-red">código</span> o <span class="text-red">fecha</span>.</h6>
              </div>

              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand red">auto_delete</i>
                        <h2 class="red">Papelera</h2>
                    </div>    
                        <div class="table-responsive">
                        <table id="" class="table display" width="100%">
                          <thead class="text-red bg-table-red">
                      <tr>
                        <th>Nombre</th>
                        <th>Ci</th>
                        <th>Tipo de Usuario</th>
                        <th>Estado</th>
                        <th>Aciones</th>
                      </tr>
                      </thead>                  
                      <tbody>
                        <?php 
                        $resultados = listarUsuarioBorrado();
                        foreach ($resultados as $key => $r){ ?>
                        <tr>
                        <td><strong><?php echo $r['nombre']; ?></strong></td>
                        <td><strong><?php echo $r['ci']; ?></strong></td>
                        <td><div class="btn btn-red btn-sm"><strong><?php echo $r['tipo_usuario']; ?></strong></div></td>
                        <td>
                          <div class="badge badge-marketing badge-red-soft badge-pill text-red"><strong>Inactivo</strong></div>
                        </td>                      
                        <td align="right">
                          <a class="btn btn-red rounded-pill text-white btn-sm lift-X-r"><span class="material-icons-round">restore</span>Restaurar</a>
                        </td>
                      </tr>
                      <?php } ?>
                        </table>
                        </div>
                </div>
          </div><!--fin de seccion 6-->

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
include ('../../php/modal/modal_eliminar.php');
include ('../../php/modal/modal_ajustes.php');
?>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>