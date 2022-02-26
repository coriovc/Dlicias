
<div class="modal fade" id="modal-new-empleado" tabindex="-1" role="dialog" aria-labelledby="modal-new-empleado" aria-hidden="true">
  <div class="modal-dialog shadow-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Registrar Nuevo Empleado</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form action="empleado_guardar.php" method="post" class="modal-body">                     
          <fieldset>
            <div class="form-group row">
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Nombre*</strong></label>
                  <input class="form-control" name="nombre"  type="text" id="nombre" placeholder="Ingrese su nombre" required>
              </div>

              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Apellido*</strong></label>
                  <input class="form-control" name="apellido"  type="text" id="apellido" placeholder="Ingrese su apellido" required>
              </div>
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Cedula*</strong></label>
                  <input class="form-control" name="cedula"  type="text" id="cedula" placeholder="V26866132" required>
              </div>
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Numero de teléfono*</strong></label>
                  <input class="form-control" name="telefono"  type="tel" id="telefono" placeholder="+58 412 4784959" required>
              </div>             
            </div>
            <div class="form-group row">
              <div class="col-12 mb-2">
                  <label><strong>Email*</strong></label>
                  <input class="form-control" name="correo"  type="email" id="correo" placeholder="correo@mail.com" required>
              </div>      
              <div class="col-12 mb-2">
                  <label><strong>Dirección*</strong></label>
                  <input class="form-control" name="direccion"  type="text" id="direccion" placeholder="Maracay" required>
              </div>               
            </div>
            <div class="form-group row">
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Cargo*</strong></label>
                  <select class="form-control custom-select" name=cargo required>
                      <option value="Cocinero">Cocinero  (a)</option>
                      <option value="Cajero">Cajero (a)</option>
                      <option value="Mesero">Mesero  (a)</option>
                      <option value="Administrador">Administrador  (a)</option>
                      <option value="Obrero">Obrero  (a)</option>
                  </select>
              </div>
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Sueldo Mensual ($)*</strong></label>
                  <input type="text" id="sueldo" name="sueldo" title="Sueldo" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=10;" class="form-control sueldo" placeholder="50.00 $"required="required">
              </div>                  
            </div>
            <div class="form-group row"> 
            <div class="col-12 mb-2">
                  <label><strong>Datos bancarios</strong></label>                  
              </div>             
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Banco*</strong></label>
                  <input class="form-control" name="banco" type="text" id="banco" placeholder="Banesco">
              </div>
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Cedula de la ceunta*</strong></label>
                  <input class="form-control" name="ci_banco" minlength="6" type="text" id="ci_banco" placeholder="26866132">
              </div>
              <div class="col-12 mb-2">
                  <label><strong>Numero de cuenta*</strong></label>
                  <input class="form-control" name="nro_cuenta" maxlength="20"  type="text" id="nro_cuenta" placeholder="********1234">
              </div>
              <div class="col-12 mb-2">
                  <label><strong>Nombre de la cuenta*</strong></label>
                  <input class="form-control" name="nombre_banco"  type="text" id="nombre_banco" placeholder="Victor corio">
              </div>             
            </div>            
          </fieldset>
      <small>(*)Campos Obligatorios</small>
      <div class="modal-footer tct">        
        <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>
        <button type="submit" id="toastBasicTrigger" class="btn btn-success">Agregar</button>
      </div>
      </form>            
      
    </div>
  </div>
</div>


<div class="modal fade" id="modal-registrar-entrada" tabindex="-1" role="dialog" aria-labelledby="modal-categoria" aria-hidden="true">
  <div class="modal-dialog modal-lg-2 modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Registrar Entrada</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>
      <?php
        require_once "../../controladores/empleado.php";
      ?>
      <form class="modal-body" method="POST" name="form"  action="../../models/empleado/asistencia_guardar.php" >                     
          <fieldset>
            <div class="form-group row">   
              <div class="col-12 mb-2">
                <label><strong>Empleado*</strong></label>
                  <select class="form-control custom-select" name="id_empleado" required="required" title="Seleccione un Empleado" style="width: 100%;">
                  <?php
                  for ($i=0; $i < count($lisempleado); $i++){ 
                    ?>
                    <option value="<?=$lisempleado[$i]['id'] ?>"><?= $lisempleado[$i]['nombre'] ?></option>
                  <?php
                  }
                  ?>
                </select>                  
              </div>
              <div class="col-12 col-lg-6 mb-2">
                <label><strong>Fecha</strong></label>
                <input type="date" name="fecha" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly title="fecha">
              </div>
              <div class="col-12 col-lg-6 mb-2">
                <label><strong>Hora*</strong></label>
                <input type="time" name="nombre" class="form-control" title="hora" value="<?php echo date('h:i:s A'); ?>" required="required">
              </div>
            </div>            
          </fieldset>          
        <small>(*)Campos Obligatorios</small>
        <div class="modal-footer tct">        
          <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>
          <button type="submit" id="toastBasicTrigger" name="guardar" title="Agregar" class="btn btn-success">Agregar</button>
          <input type="hidden" name="operacion" value="guardar">
        </div>
      </form>            
      
    </div>
  </div>
</div>

<script type="text/javascript">
      $(".sueldo").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});
</script>