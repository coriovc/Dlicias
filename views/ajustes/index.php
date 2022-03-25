<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>

<?php 
require_once "../../controladores/auditoria.php";
require_once "../../controladores/usuario.php";
if(isset($_REQUEST['operacion-b']) && $_REQUEST['operacion-b']=='eliminar-b'){
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
    include ('../../php/menu/menu_ajustes.php'); /*barra superior */
    ?>
  <header class="page-header bg-img-cover overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
  <div class="container" style="margin-top: 6rem;">
    <div class="row">
      <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
        <h1 class="display-3 tct text-white">Ajustes</h1>
        <i class="material-icons-round icon-head icon-animate">settings</i>
      </div>
    </div>
  </div>
  </header>


  <section class="section-ajustes"> 
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="1000">
          <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <!--Perfil-->
          <li class="nav-item" role="presentation">
            <button class="nav-link active btn btn-white rounded-pill mx-2" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true"><span class="material-icons-round text-red mr-2">admin_panel_settings</span>Perfil</button>
          </li>
        <!--Empresa-->
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false"><span class="material-icons-round text-green mr-2">store</span>Empresa</button>
          </li>

          <?php if($_SESSION['admin']['tipo_usuario']=="Admin" || $_SESSION['admin']['tipo_usuario']=="Nivel socia"){ ?>
        <!--Gestion del sistema--> 
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false"><span class="material-icons-round text-yellow mr-2">settings_suggest</span>Gestion del sistema</button>
          </li>
          <?php } ?> 
        <!--Estructura de costo
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false"><span class="material-icons-round text-blue mr-2">paid</span>Costos</button>
          </li>
        <!--Cargos
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false"><span class="material-icons-round text-blue mr-2">badge</span>Cargos</button>
          </li>
        <!--pagos
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6" aria-selected="false"><span class="material-icons-round text-blue mr-2">payment</span>Pagos</button>
          </li>
        <!--informacion
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-7-tab" data-bs-toggle="pill" data-bs-target="#pills-7" type="button" role="tab" aria-controls="pills-7" aria-selected="false"><span class="material-icons-round text-green mr-2">policy</span>Parametros</button>
          </li>--> 
        </ul>

      <hr>

        <div class="tab-content" id="pills-tabContent">
        <!--Perfil-->
          <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
              
            <div class="row">
              <div class="col-lg-3 col-12 mb-4" data-aos="fade-right" data-aos-delay="200">
                <div class="card o-visible mb-4 mt-5">
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

                      </div>
                      </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-9 col-12 mb-4" data-aos="fade-right" data-aos-delay="200">
                <div class="card mb-4 overflow-hidden mt-5">
                      <div class="card-header">
                        <i class="material-icons-round grand red">history</i>
                          <h2 class="text-red">Mi Actividad</h2>
                      </div>

                      <div class="table-responsive">
                      <table class="table" width="100%">
                        <thead class="text-red bg-table-red">
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
              </div>  
            </div> 

          </div>
        <!--Empresa-->
          <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
              
            <div class="d-flex justify-content-between align-items-sm-center mt-5 mb-2">
              <div class="mr-4">
                  <h1 class="display-5 tct text-green">Datos de la empresa</h1>
              </div>
              
              <div class="dropdown no-caret mr-3">
                  
                  <a href="#" class="btn btn-outline-green rounded-pill lift-btn tct">
                    <i class="material-icons-round mr-2">edit</i>
                    <h6 style="margin-bottom: 0;">Editar</h6>
                  </a>                  
              </div>
            </div>
                <hr class="mb-4"/>                              
                <div class="row justify-content-center">
                  <div class="col-lg-5 col-xl-4 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-green">Ajustes del sitema</h4>
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
                        <h4 class="text-green">Informacion</h4>
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
                        <h4 class="text-green">Documentos</h4>
                        <hr>
                          <div class="d-flex mb-4">
                            <div class="mr-3"><div class="btn-icon bg-green"><span class="material-icons-round">article</span></div>
                            </div>
                            <div>
                            <div class="small txt-white">Documento 1</div>
                            <a class="text-green small" href="#!"><h6 class="mb-1">Descargar</h6></a>
                            </div>
                          </div>
                          <div class="d-flex mb-4">
                            <div class="mr-3"><div class="btn-icon bg-green"><span class="material-icons-round">article</span></div>
                            </div>
                            <div>
                            <div class="small txt-white">Documento 2</div>
                            <a class="text-green small" href="#!"><h6 class="mb-1">Descargar</h6></a>
                            </div>
                          </div> 
                          <div class="d-flex mb-4">
                            <div class="mr-3"><div class="btn-icon bg-green"><span class="material-icons-round">article</span></div>
                            </div>
                            <div>
                            <div class="small txt-white">Documento 3</div>
                            <a class="text-green small" href="#!"><h6 class="mb-1">Descargar</h6></a>
                            </div>
                          </div> 
                          <div class="d-flex mb-4">
                            <div class="mr-3"><div class="btn-icon bg-green"><span class="material-icons-round">article</span></div>
                            </div>
                            <div>
                            <div class="small txt-white">Documento 4</div>
                            <a class="text-green small" href="#!"><h6 class="mb-1">Descargar</h6></a>
                            </div>
                          </div>                 
                      </div>
                    </div>
                  </div>               
                </div>

          </div>
        <!--Gestion del sistema--> 
          <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
              
            <div class="row">
            <div class="col-lg-3 mb-4">
              <div class="card tct o-visible mb-4">
                  <div class="card-body">
                   
                    <div class="d-flex align-items-center justify-content-between" style="margin-left: -0.5rem;">
                      <h6 class="mb-0">Opciones Usuarios</h6>
                    </div>
                          <div class="my-2">
                            <a class="btn btn-yellow btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-usuario">
                              <div class="btn-icon bg-light text-yellow shadow mr-2">
                              <i class="material-icons-round icon-size-35">person_add</i></div>Nuevo Usuario</a>
                          </div>

                    <div class="d-flex align-items-center justify-content-between" style="margin-left: -0.5rem;">
                      <h6 class="mb-0">Opciones Bitacora</h6>
                    </div>

                          <div class="my-2">
                            <a class="btn btn-yellow btn-add tct mb-2 btn-block" href="#">
                              <div class="btn-icon bg-light text-yellow shadow mr-2">
                              <i class="material-icons-round icon-size-35">download_for_offline</i></div>Descargar PDF</a>

                            <a class="btn btn-yellow btn-add tct mb-2 btn-block"  href="respaldo.php" onclick="respaldo()">
                              <div class="btn-icon bg-light text-yellow shadow mr-2">
                              <i class="material-icons-round icon-size-35">file_download</i></div>Respaldo de BD</a>

                            <a class="btn btn-yellow btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-borrar-bitacora">
                              <div class="btn-icon bg-light text-yellow shadow mr-2">
                              <i class="material-icons-round icon-size-35">delete</i></div>Vaciar</a>
                          </div>

                  </div>
              </div>
            </div>

            <div class="col-lg-9 col-12">
              <div class="card mb-4 overflow-hidden">
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

            </div>
           </div>

          </div>
        <!--costos-->
          <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
              
            <div class="row">
              <div class="col-lg-3 mb-4">
                <div class="card tct o-visible mb-4">
                    <div class="card-body">
                     
                      <div class="d-flex align-items-center justify-content-between" style="margin-left: -0.5rem;">
                        <h6 class="mb-0">Opciones Gastos locales</h6>
                      </div>
                            <div class="my-2">
                              <a class="btn btn-red btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-usuario">
                                <div class="btn-icon bg-light text-red shadow mr-2">
                                <i class="material-icons-round icon-size-35">add</i></div>Nuevo Gasto</a>
                            </div>


                    </div>
                </div>
              </div>

              <div class="col-lg-9 col-12">                
                <div class="card mb-4 overflow-hidden">
                  <div class="card-header">
                    <i class="material-icons-round grand red">privacy_tip</i>
                    <h2 class="red">Gastos locales</h2>
                  </div>

                      <div class="">
                        <table id="" class="table" width="100%">
                            <thead class="text-red bg-table-red">
                            <tr>
                                <th>Servicio</th>                                   
                                <th>Costo</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>

                            <tbody>                          
                              <tr>                                
                                <td scope="row">Luz</td>
                                <td>20.00 Bs.D</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark btn-sm"data-toggle="tooltip" data-placement="bottom" title="Editar Servicio" ><span class="material-icons-round">edit</span></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark btn-sm"data-toggle="tooltip" data-placement="bottom" title="Eliminar Servicio" ><span class="material-icons-round">delete</span></button>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                      </div>
                </div>
              </div>

            </div> 

          </div>
        <!--cargos-->
          <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
              
            <div class="row">

              <div class="col-lg-3 mb-4">
                <div class="card tct o-visible mb-4">
                    <div class="card-body">
                     
                      <div class="d-flex align-items-center justify-content-between" style="margin-left: -0.5rem;">
                        <h6 class="mb-0">Opciones</h6>
                      </div>
                            <div class="my-2">
                              <a class="btn btn-red btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-usuario">
                                <div class="btn-icon bg-light text-red shadow mr-2">
                                <i class="material-icons-round icon-size-35">add</i></div>Nuevo cargo</a>
                            </div>


                    </div>
                </div>
              </div>

              <div class="col-lg-9 col-12">                
                <div class="card mb-4 overflow-hidden">
                  <div class="card-header">
                    <i class="material-icons-round grand red">badge</i>
                    <h2 class="red">Cargos</h2>
                  </div>

                      <div class="">
                        <table id="" class="table" width="100%">
                          <thead class="text-red bg-table-red">
                          <tr>
                              <th>Cargo</th>                                   
                              <th>Tipo de pago</th>
                              <th>Salario</th>
                              <th>Acciones</th>
                          </tr>
                          </thead>

                          

                          <tbody>
                              <tr>
                                
                                <td scope="row">Administrador</td>
                                <td><div class="badge badge-purple badge-pill">Quincenal</div></td>
                                <td>50.00 BS.D</td>
                                <td>
                                  <button class="btn btn-datatable btn-icon btn-transparent-dark btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar Cargo"><span class="material-icons-round">edit</span></button>
                                  <button class="btn btn-datatable btn-icon btn-transparent-dark btn-sm" data-toggle="tooltip" data-placement="bottom" title="Eliminar Cargo"><span class="material-icons-round">delete</span></button>
                                </td>
                              </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
              </div>

            </div>

          </div>
        <!--pagos-->
          <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
              
            <div class="d-flex justify-content-between align-items-sm-center mt-5 mb-2">
              <div class="mr-4">
                  <h1 class="display-5 tct text-blue">Medios de pago</h1>
              </div>              
            </div>
                <div class="row justify-content-center">


                  <div class="col-lg-4 col-12 mb-4">
                    <div class="card">
                      <img src="../../imagenes/paypal.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">datos de conexión entre PayPal y la Plataforma.</p>
                        <a href="#" class="btn btn-blue">Configurar</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-12 mb-4">
                    <div class="card">
                      <img src="../../imagenes/transferencia.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">datos de la cuenta bancaria destinada a recibir los pagos de los clientes.</p>
                        <a href="#" class="btn btn-blue">Configurar</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-12 mb-4">
                    <div class="card">
                      <img src="../../imagenes/pago-movil.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">datos del Pago Móvil destinado a recibir los pagos de los clientes.</p>
                        <a href="#" class="btn btn-blue">Configurar</a>
                      </div>
                    </div>
                  </div>                               
                </div>

          </div>
        <!--parametros-->
          <div class="tab-pane fade" id="pills-7" role="tabpanel" aria-labelledby="pills-7-tab">
              
           <div class="d-flex justify-content-between align-items-sm-center mt-5 mb-2">
              <div class="mr-4">
                  <h1 class="display-5 tct text-green">Parametros  del sistema</h1>
              </div>
              
              <div class="dropdown no-caret mr-3">
                  
                  <a href="#" class="btn btn-outline-green rounded-pill lift-btn tct">
                    <i class="material-icons-round mr-2">edit</i>
                    <h6 style="margin-bottom: 0;">Editar</h6>
                  </a>                  
              </div>
            </div>

                <hr class="mb-4"/>   
                <form>
                <div class="row justify-content-center">


                  <div class="col-lg-4 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-green">Moneda</h4>                          
                            <div class="content">
                              <div class="form-group row">
                                <div class="col">
                                <select class="form-control custom-select rounded-pill" name=pregunta_de_seguridad>
                                  <option value="dolar">$ (Dolares)</option>
                                  <option value="bolivar">Bs (Bolivares)</option>
                                  <option value="euro">€ (Euros)</option>
                                </select>
                                 <small id="emailHelp" class="form-text text-muted mt-2">Es la moneda con la que el sistema va a operar.</small>
                                </div> 
                              </div>
                            </div>                                        
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-green">Impuesto</h4>                          
                            <div class="content">
                              <div class="form-group row">
                                <div class="col">                                  
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">%</div>
                                    </div>
                                    <input type="text" class="form-control" id="porce" placeholder="Porcentaje" value="16" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
                                  </div>
                                 <small id="emailHelp" class="form-text text-muted mt-2">Es el porcentaje que es aplicado a los costos unitarios para cumplir con el pago de impuestos.</small>
                                </div> 
                              </div>
                            </div>                                        
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-green">Utilidad</h4>                          
                            <div class="content">
                              <div class="form-group row">
                                <div class="col">                                  
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">%</div>
                                    </div>
                                    <input type="text" class="form-control" id="porce" placeholder="Porcentaje" value="32" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
                                  </div>
                                 <small id="emailHelp" class="form-text text-muted mt-2">Es el porcentaje que es aplicado a los costos unitarios para obtener ganancias sobre las ventas realizadas.</small>
                                </div> 
                              </div>
                            </div>                                        
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-green">Comisión por consumo externo</h4>                          
                            <div class="content">
                              <div class="form-group row">
                                <div class="col">                                  
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">%</div>
                                    </div>
                                    <input type="text" class="form-control" id="porce" placeholder="Porcentaje" value="5" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
                                  </div>
                                 <small id="emailHelp" class="form-text text-muted mt-2">Es el porcentaje que es aplicado a un monto total en el caso de que el cliente haga su pedido en el local para llevarselo posteriormente.</small>
                                </div> 
                              </div>
                            </div>                                        
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-green">Comisión por entregas a Domicilio (Delivery)</h4>                          
                            <div class="content">
                              <div class="form-group row">
                                <div class="col">                                  
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">%</div>
                                    </div>
                                    <input type="text" class="form-control" id="porce" placeholder="Porcentaje" value="8,5" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
                                  </div>
                                 <small id="emailHelp" class="form-text text-muted mt-2">Es el porcentaje que es aplicado a un monto total en el caso de que el cliente haga su pedido por la plataforma, requiriendo el servicio de entrega a domicilio (Delivery).</small>
                                </div> 
                              </div>
                            </div>                                        
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="text-green">Margen de Error</h4>                          
                            <div class="content">
                              <div class="form-group row">
                                <div class="col">                                  
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">%</div>
                                    </div>
                                    <input type="text" class="form-control" id="porce" placeholder="Porcentaje" value="5" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
                                  </div>
                                 <small id="emailHelp" class="form-text text-muted mt-2">Es el porcentaje que es aplicado a los costos variables de una receta, por las perdidas de materia prima en la confección de un producto.</small>
                                </div> 
                              </div>
                            </div>                                        
                      </div>
                    </div>
                  </div>
                               
                </div>
                </form>

          </div>
        <!--Papelera-->
          
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