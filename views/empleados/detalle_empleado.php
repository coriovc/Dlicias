<?php
require_once "../../controladores/empleado.php";
require_once "../../controladores/asistencia.php";

if(isset($_GET['marcar'])){
  actualizarSalida($_GET['marcar']);
  header("Location: detalle_empleado.php?id=$_GET[id]");
}

$empleado = buscarEmpleado(); 
$asist = buscarAsistencias($_GET['id']); 
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
                    <a class="btn btn-white rounded-pill shadow-lg" href="index.php">
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
                    <h4><?= $empleado['nombre']." ".$empleado['apellido']?></h4>
                  </div>
                  
                  <div class="col-lg-4 col-12" >
                    <h6>Nro de cedula</h6>
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

                    <a class="btn btn-blue btn-add tct mb-2 " href="#" data-toggle="modal" data-target="#modal-edit-empleado">
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
                        <?php foreach ($asist as $key => $asis) {
                          // code...
                        ?>
                                <tr>                                  
                                  <td><?php   echo date("d/m/Y",strtotime($asis['fecha'])); ?></td>
                                  <td><?php echo date("h:i a",strtotime($asis['hora_e'])); ?></td>
                                  <td><?php $sal = date("h:i a",strtotime($asis['hora_s']));
                                  if($sal=='12:00 am') echo 'N/A'; else echo 
                                  $sal; ?></td>
                                  <td>
                                    <?php if($sal=='12:00 am'){ ?>
                                    <a href="<?php echo $_SERVER['REQUEST_URI'].'&marcar='; ?><?php   echo $asis['id']; ?>" type="button" class="badge badge-marketing badge-red-soft badge-pill text-red"><strong>Marcar salida</strong></a>
            <?php   } ?>
                                  </td>
                                </tr>
            <?php   } ?>
                      </tbody>
                    </table>
                    </div>
        </div>
      </div>
      <!--<div class="col-lg-9 mb-4 col-12">
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
      </div>-->
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

<div class="modal fade" id="modal-edit-empleado" tabindex="-1" role="dialog" aria-labelledby="modal-edit-empleado" aria-hidden="true">
  <div class="modal-dialog shadow-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Editar</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form action="empleado_modificar.php" method="post" class="modal-body">
      <input type="hidden" name="id" value="<?= $empleado['id']?>">                  
          <fieldset>
            <div class="form-group row">
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Nombre*</strong></label>
                  <input class="form-control" name="nombre"  type="text" id="nombre" placeholder="Ingrese su nombre" required value="<?= $empleado['nombre']?>">
              </div>

              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Apellido*</strong></label>
                  <input class="form-control" name="apellido"  type="text" id="apellido" placeholder="Ingrese su apellido" required value="<?= $empleado['apellido']?>">
              </div>
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Cedula*</strong></label>
                  <input class="form-control" name="cedula"  type="text" id="cedula" placeholder="V26866132" required value="<?= $empleado['cedula']?>">
              </div>
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Numero de teléfono*</strong></label>
                  <input class="form-control" name="telefono"  type="tel" id="telefono" placeholder="+58 412 4784959" required value="<?= $empleado['telefono']?>">
              </div>             
            </div>
            <div class="form-group row">
              <div class="col-12 mb-2">
                  <label><strong>Email*</strong></label>
                  <input class="form-control" name="correo"  type="email" id="correo" placeholder="correo@mail.com" required value="<?= $empleado['correo']?>">
              </div>      
              <div class="col-12 mb-2">
                  <label><strong>Dirección*</strong></label>
                  <input class="form-control" name="direccion" value="<?= $empleado['direccion']?>" type="text" id="direccion" placeholder="Maracay" required>
              </div>               
            </div>
            <div class="form-group row">
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Cargo*</strong></label>
                  <select class="form-control custom-select" name=cargo required>
                      <option  <?php if($empleado['cargo'] == 'Cocinero' ) echo 'selected'; ?>value="Cocinero">Cocinero  (a)</option>
                      <option  <?php if($empleado['cargo'] == 'Cajero' ) echo 'selected'; ?>value="Cajero">Cajero (a)</option>
                      <option  <?php if($empleado['cargo'] == 'Mesero' ) echo 'selected'; ?>value="Mesero">Mesero  (a)</option>
                      <option  <?php if($empleado['cargo'] == 'Administrador' ) echo 'selected'; ?>value="Administrador">Administrador  (a)</option>
                      <option  <?php if($empleado['cargo'] == 'Obrero' ) echo 'selected'; ?>value="Obrero">Obrero  (a)</option>
                  </select>
              </div>
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Sueldo Mensual ($)*</strong></label>
                  <input type="text" id="sueldo" name="sueldo" title="Sueldo" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=10;" class="form-control sueldo" placeholder="50.00 $"required="required" value="<?= $empleado['sueldo']?>">
              </div>                  
            </div>
            <div class="form-group row"> 
            <div class="col-12 mb-2">
                  <label><strong>Datos bancarios</strong></label>                  
              </div>             
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Banco*</strong></label>
                  <input class="form-control" name="banco" type="text" id="banco" placeholder="Banesco" value="<?= $empleado['banco']?>">
              </div>
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Cedula de la ceunta*</strong></label>
                  <input class="form-control" name="ci_banco" minlength="6" type="text" id="ci_banco" placeholder="26866132" value="<?= $empleado['ci_banco']?>">
              </div>
              <div class="col-12 mb-2">
                  <label><strong>Numero de cuenta*</strong></label>
                  <input class="form-control" name="nro_cuenta" maxlength="20"  type="text" id="nro_cuenta" placeholder="********1234" value="<?= $empleado['nro_cuenta']?>">
              </div>
              <div class="col-12 mb-2">
                  <label><strong>Nombre de la cuenta*</strong></label>
                  <input class="form-control" name="nombre_banco" type="text" id="nombre_banco" placeholder="Victor corio" value="<?= $empleado['nombre_banco']?>">
              </div>             
            </div>            
          </fieldset>
      <small>(*)Campos Obligatorios</small>
      <div class="modal-footer tct">        
        <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>
        <button type="submit" id="toastBasicTrigger" class="btn btn-success">Editar</button>
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
