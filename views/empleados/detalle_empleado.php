<?php
require_once "../../controladores/empleado.php";
require_once "../../controladores/asistencia.php";

$empleado = buscarEmpleado(); 
$asis = buscarAsistencia(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Empleado | <?= $empleado['nombre']?></title>
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
      <div class="col-lg-12">
        <h1 class="display-3 tct text-white">Empleado</h1>
      </div>
    </div>
  </div>
  </header>

  <div class="container">
            <div class="row" style="margin-top: -1.5rem; margin-bottom: 3rem;">
                <div class="dropdown no-caret">
                    <a class="btn btn-white rounded-pill shadow-lg"href="javascript:history.back()">
                    <i class="material-icons-outlined">arrow_back</i>
                    <div class="font-weight-500">Volver</div></a>
                </div>          
            </div>
        </div>

  <section class="section-clientes"> 
    <div class="container-fluid">
      <div class="row justify-content-end">
        
      <div class="col-lg-9 mb-4 col-12">
          <div class="card o-visible mb-4 mt-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-12">
                    <h6>Nombre y Apellido</h6>
                    <h4><?= $empleado['nombre'].$empleado['apellido']?></h4>
                  </div>
                  
                  <div class="col-lg-4 col-12" >
                    <h6>cedula</h6>
                    <h4><?= $empleado['cedula']?></h4>
                  </div>

                  <div class="col-lg-4 col-12">
                    <h6>Correo</h6>
                    <h4><?= $empleado['correo']?></h4>
                  </div>
                  <div class="col-lg-4 col-12">
                    <h6>Telefono</h6>
                    <h4><?= $empleado['telefono']?></h4>
                  </div>
                  <div class="col-lg-4 col-12">
                    <h6>Cargo</h6>
                    <h4><?= $empleado['cargo']?></h4>
                  </div>
                  <div class="col-lg-4 col-12">
                    <h6>Sueldo</h6>
                    <h4>$<?= $empleado['sueldo']?></h4>
                  </div>
                  <div class="col-lg-12 col-12">
                    <h6>Direccion</h6>
                    <h4><?= $empleado['direccion']?></h4>
                  </div>
                  <div class="col-lg-12 col-12 mt-3"><a class="btn btn-blue btn-add tct mb-2 " href="#" data-toggle="modal" data-target="#modal-Banco">
                    <div class="btn-icon bg-light text-blue shadow mr-2">
                    <i class="material-icons-round icon-size-35">account_balance</i></div>Datos bancarios</a>

                    <a class="btn btn-blue btn-add tct mb-2 " href="#" data-toggle="modal" data-target="#">
                    <div class="btn-icon bg-light text-blue shadow mr-2">
                    <i class="material-icons-round icon-size-35">edit</i></div>Editar Datos</a>
                  </div>
                </div>

              </div>
          </div>
      </div>
      <div class="col-lg-9 mb-4 col-12">
        <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand blue">how_to_reg</i>
                        <h2 class="blue">Historial de Asistencias</h2>
                    </div>

                    <div>
                    <table class="table display" width="100%">
                      <thead class="text-blue bg-table-blue">
                      <tr>
                        <th>Fecha</th>
                        <th>Hora de Entrada</th>
                        <th>Hora de Salida</th>
                        <th>acciones</th>
                      </tr>
                      </thead>                  
                      <tbody>
                                <tr>                                  
                                  <td><?php echo date("d/m/Y",strtotime($asis['fecha'])); ?></td>
                                  <td><?php echo date("h:i a",strtotime($asis['hora_e'])); ?></td>
                                  <td><?php echo date("h:i a",strtotime($asis['hora_s'])); ?></td>
                                  <td>
                                    <buttom type="button" class="badge badge-marketing badge-red-soft badge-pill text-red"><strong>Marcar salida</strong></buttom>
                                  </td>
                                </tr>
           
                      </tbody>
                    </table>
                    </div>
        </div>
      </div>
      <div class="col-lg-9 mb-4 col-12">
        <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand blue">paid</i>
                        <h2 class="blue">Control de pagos</h2>
                    </div>

                    <div>
                    <table class="table display" width="100%">
                      <thead class="text-blue bg-table-blue">
                      <tr>
                        <th>Fecha</th>
                        <th>Monto</th>
                        <th>Estado</th>
                        <th class="text-right">Acciones</th>
                      </tr>
                      </thead>                  
                      <tbody>
                          <tr>
                            <td>Febrero -2022</td>
                            <td>50$</td>
                            <td><div class="badge badge-marketing badge-green-soft badge-pill text-green"><strong>Pagado</strong></div></td>
                            <td align="right">
                              <a class="btn btn-datatable btn-icon btn-transparent-dark lift-img" href="#" data-toggle="tooltip" data-placement="bottom" title="Ver detalles"><span class="material-icons-round">visibility</span></a>
                              
                              <a class="btn btn-datatable btn-icon btn-transparent-dark lift-img" href="#" data-toggle="tooltip" data-placement="bottom" title="Reportar pago"><span class="material-icons-round">payments</span></a>
                              
                            </td>
                          </tr> 
                          <tr>
                            <td>Febrero -2022</td>
                            <td>50$</td>
                            <td><div class="badge badge-marketing badge-yellow-soft badge-pill text-yellow"><strong>Pendiente</strong></div></td>
                            <td align="right">
                              <a class="btn btn-datatable btn-icon btn-transparent-dark lift-img" href="#" data-toggle="tooltip" data-placement="bottom" title="Ver detalles"><span class="material-icons-round">visibility</span></a>
                              
                              <a class="btn btn-datatable btn-icon btn-transparent-dark lift-img" href="#" data-toggle="tooltip" data-placement="bottom" title="Reportar pago"><span class="material-icons-round">payments</span></a>
                              
                            </td>
                          </tr> 
                          <tr>
                            <td>Febrero -2022</td>
                            <td>50$</td>
                            <td><div class="badge badge-marketing badge-red-soft badge-pill text-red"><strong>Error</strong></div></td>
                            <td align="right">
                              <a class="btn btn-datatable btn-icon btn-transparent-dark lift-img" href="#" data-toggle="tooltip" data-placement="bottom" title="Ver detalles"><span class="material-icons-round">visibility</span></a>
                              
                              <a class="btn btn-datatable btn-icon btn-transparent-dark lift-img" href="#" data-toggle="tooltip" data-placement="bottom" title="Reportar pago"><span class="material-icons-round">payments</span></a>
                              
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
       

  <div class="modal fade" id="modal-Banco" tabindex="-1" role="dialog" aria-labelledby="modal-categoria" aria-hidden="true">
  <div class="modal-dialog modal-lg-2 modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Datos bancarios</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>
      <form class="modal-body" method="POST" name="form"  action="#" > 
            <div class="form-group row"> 
              <div class="col-12 mb-2">
                  <label><strong>Datos bancarios</strong></label>                  
              </div>             
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Banco*</strong></label>
                  <input class="form-control" value="<?= $empleado['banco']?>" name="banco" type="text" id="banco" readonly>
              </div>
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Cedula de la ceunta*</strong></label>
                  <input class="form-control" value="<?= $empleado['ci_banco']?>" name="ci_banco" minlength="6" type="text" id="ci_banco"  readonly>
              </div>
              <div class="col-12 mb-2">
                  <label><strong>Numero de cuenta*</strong></label>
                  <input class="form-control" value="<?= $empleado['nro_cuenta']?>" name="nro_cuenta" maxlength="20"  type="text" id="nro_cuenta" readonly>
              </div>
              <div class="col-12 mb-2">
                  <label><strong>Nombre de la cuenta*</strong></label>
                  <input class="form-control" value="<?= $empleado['nombre_banco']?>" name="nombre_banco"  type="text" id="nombre_banco" readonly>
              </div>             
            </div> 
      </form>    
      
    </div>
  </div>
</div>

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
