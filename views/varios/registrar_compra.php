<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include ('../php/head.php');
  ?>
  <title>Registrar Compra</title>
  <!-- Estilos de esta pagina-->
</head>
<body onload="startTime()">
      <?php
      include ('../php/navbar.php');
      include ('../php/menu/menu_0.php'); /* barra lateral y barra superior */
      ?>
      <br>
     <div class="container-fluid">
      <main>
        <div align="center" class="justify-content-between">
              <div class="mr-4 mb-3 mb-sm-0">
                <h1 class="tct display-4 text-white">Registrar Compra</h1>
              </div>
        </div><br>
      <div class="row">
          <div class="col-lg-4 col-xl-3 mb-4">

              <div class="filter mb-4">
                <div class="card-header tct">Panel de opciones</div>
                  <div class="list-group list-group-flush small">
                      <a class="list-group-item list-group-item-action" href="#" data-toggle="modal" data-target="#modal-proveedor">
                        <i class="fas fa-dollar-sign fa-fw text-blue mr-2"></i>Agregar Nuevo Proveedor</a>
                      <a class="list-group-item list-group-item-action" href="#" data-toggle="modal" data-target="#modal-producto">
                        <i class="fas fa-tag fa-fw text-purple mr-2"></i>Agregar Nuevo Producto</a>
                      <a class="list-group-item list-group-item-action" href="#" data-toggle="modal" data-target="#modal-servicio">
                        <i class="fas fa-mouse-pointer fa-fw text-green mr-2"></i>Agregar Nuevo Servicio</a>
                  </div>
                <div class="card-footer"></div>
              </div>

              <div class="filter o-visible mb-4">
                <div class="card-body">
                <h4 class="text-white tct">Sabias que?</h4>
                  <p class="text-white-50">Debes llenar todos los camos asi no pierdes ni un detalle.</p>
                  <img class="float-left" src="../imagenes/drawkit-developer-woman-flush.svg" style="width: 8rem; margin-left: -2.5rem; margin-bottom: -5.5rem;" />
                </div>
              </div>

        </div>
        <div class="col-lg-8 col-xl-9 mb-4">
        <div class="card mb-4">
        <div class="card-body">

      <form class="needs-validation" name="frm_nvoempleado" id="frm_nvoempleado" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                
          <fieldset>
            <div class="form-group row">
              <div class="col-sm-6 was-validated">
                  <label><strong>Proveedor</strong></label>
                  <select class="form-control custom-select form-control-solid" required>
                            <option value=""   >seleccionar</option>
                            <option value="pv1">Proveedor 1</option>
                            <option value="pv2">Proveedor 2</option>
                            <option value="pv3">Proveedor 3</option>
                            <option value="pv4">Proveedor 4</option>
                            <option value="pv5">Proveedor 5</option>
                  </select>
                </div>
            
              <div class="col-sm-3 was-validated">
                <label><strong>Codigo de compra</strong></label><input type="code"  placeholder="CO-1234" class="form-control form-control-solid"  id="#" name="#" value="CO-" required>
              </div>
            
            <div class="col-sm-3">
                <label><strong>Fecha de la compra</strong></label><input type="date" class="form-control form-control-solid"  id="fecha" name="fecha">
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend><strong>Elija sus Productos o Servicios</strong></legend>
                <div class="form-group row">
                <div class="col-sm-10 ">
                <label>Producto o Servicio</label><input class="form-control form-control-solid" name="#"  type="text" id="#" placeholder="Buscar..." >
              </div>
              <div class="col-sm-2"><a style="margin-bottom: -5.0rem;" class="btn btn-primary" href="#!">Seleccionar</a></div>
            </div>
                                <legend>Detalles</legend>
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Producto o Servicio</th>
                                                <th>Cantidad</th>
                                                <th>Costo</th>
                                                <th>Divisa</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>                                      
                                        <tbody>
                                            <tr>
                                                <td>Producto 1</td>
                                                <td><input type="number" placeholder="Ejem. (1)" class="form-control form-control-solid btn-sm" id="#" name="#" value="1"></td>
                                                <td><input type="text" placeholder="Ejem. (10.000)" class="form-control form-control-solid btn-sm" id="#" name="#" value="20.000"></td>
                                                <td>
                                                  <select class="form-control form-control-solid btn-sm">
                                                            <option>seleccionar</option>
                                                            <option value="BS">Bolivar</option>
                                                            <option value="USD">Dolar</option> 
                                                  </select>
                                                </td>
                                                <td><a class="btn badge-danger rounded-pill btn-sm btn-icon" href="#" ><i class="material-icons-round">clear</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Producto 2</td>
                                                <td><input type="number" placeholder="Ejem. (1)" class="form-control form-control-solid btn-sm" id="#" name="#" value="3"></td>
                                                <td><input type="text" placeholder="Ejem. (10.000)" class="form-control form-control-solid btn-sm" id="#" name="#" value="20.000"></td>
                                                <td>
                                                  <select class="form-control form-control-solid btn-sm">
                                                            <option>seleccionar</option>
                                                            <option value="BS">Bolivar</option>
                                                            <option value="USD">Dolar</option> 
                                                  </select>
                                                </td>
                                                <td><a class="btn badge-danger rounded-pill btn-sm btn-icon" href="#" ><i class="material-icons-round">clear</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Servicio 1</td>
                                                <td><input type="number" placeholder="Ejem. (1)" class="form-control form-control-solid btn-sm" id="#" name="#" value="2"></td>
                                                <td><input type="text" placeholder="Ejem. (10.000)" class="form-control form-control-solid btn-sm" id="#" name="#" value="20.000"></td>
                                                <td>
                                                  <select class="form-control form-control-solid btn-sm">
                                                            <option>seleccionar</option>
                                                            <option value="BS">Bolivar</option>
                                                            <option value="USD">Dolar</option> 
                                                  </select>
                                                </td>
                                                <td><a class="btn badge-danger rounded-pill btn-sm btn-icon" href="#" ><i class="material-icons-round">clear</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Producto 4</td>
                                                <td><input type="number" placeholder="Ejem. (1)" class="form-control form-control-solid btn-sm" id="#" name="#" value="6"></td>
                                                <td><input type="text" placeholder="Ejem. (10.000)" class="form-control form-control-solid btn-sm" id="#" name="#" value="20.000"></td>
                                                <td>
                                                  <select class="form-control form-control-solid btn-sm">
                                                            <option>seleccionar</option>
                                                            <option value="BS">Bolivar</option>
                                                            <option value="USD">Dolar</option> 
                                                  </select>
                                                </td>
                                                <td><a class="btn badge-danger rounded-pill btn-sm btn-icon" href="#" ><i class="material-icons-round">clear</i></a>
                                                </td>
                                            </tr>

                                            
                                            
                                        </tbody>
                                    </table>
                                </div>

          </fieldset>
        
        
                &nbsp;
                &nbsp;
                &nbsp;
                  
                  <div align="center">
                  <button type="reset"  class="btn btn-transparent-dark btn-icon"><i class="material-icons-round">sync</i></button>
                  <a href="tables.php" type="button" class="btn btn-transparent-dark"><strong>Cancelar</strong></a>
                  <button type="submit" id="toastBasicTrigger" class="btn btn-primary">Registrar</button>
</form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
<div style=" position: fixed; bottom: 2rem; right: 1rem; z-index: 900;">
    <div class="toast" id="toastBasic" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
        <div class="toast-header tct text-success">
            <span class="material-icons-round">check_circle_outline</span>
            <strong class="mr-auto">Se Registro Exitosamente</strong>
        <small class="text-gray-500 ml-2">Justo Ahora</small>
        <button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
    </div>
</div><!-- Toast container -->
<?php
/* footer */
include ('../php/footer.php'); 
/* scripts */
include ('../php/scripts-1.php');
/* Modales */
include ('../php/modal/modal_add_proveedor.php');
include ('../php/modal/modal_add_producto.php');
include ('../php/modal/modal_add_servicio.php');
include ('../php/modal/modal_add_cliente.php');
include ('../php/modal/modal_logout.php'); 
?>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>