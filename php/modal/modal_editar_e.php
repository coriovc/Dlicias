<div class="modal tct fade filter-modal" id="Modal-editar" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_edit">Editar</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
        </div>
          <form class="modal-body" name="frm_nvoempleado" id="frm_nvoempleado" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
              
                     
                      <div class="form-group">
                          <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Subir imagen</label>
                        </div>
                      </div> 

                      <div class="form-group">
                          <input class="form-control form-control-user" readonly="readonly" type="value" value="<?php echo $row_empleado['codigo_emp']; ?>" id="txt_codigo_emp" name="txt_codigo_emp" placeholder="Codigo">
                      </div>  
                      <br>

                       <div class="form-group">
                          <input class="form-control form-control-user" type="text" value="<?php echo $row_empleado['nombre_emp']; ?>" id="txt_nombre_emp" name="txt_nombre_emp" placeholder="Nombre">
                      </div>                                             

                      <div class="form-group">
                          <input class="form-control form-control-user" type="text" value="<?php echo $row_empleado['apellido_emp']; ?>" id="txt_apellido_emp" name="txt_apellido_emp" placeholder="Apellido">
                      </div>
                       
                       
                        <div class="form-group">
                          <input class="form-control form-control-user" type="text" value="<?php echo $row_empleado['ci_emp']; ?>" pattern="-?[0-9]*(\.[0-9]+)?" id="num_ci_emp" name="num_ci_emp" placeholder="Cedula de Identidad">
                      </div>
                      
                      <div class="form-group">
                          <input class="form-control form-control-user" type="text" value="<?php echo $row_empleado['correo_emp']; ?>" id="txt_correo_emp" name="txt_correo_emp" placeholder="Correo">
                      </div>

                      <div class="form-group">
                          <input class="form-control form-control-user" type="text" value="<?php echo $row_empleado['estado_emp']; ?>" id="txt_estado_emp" name="txt_estado_emp" placeholder="Estado">
                      </div>

                      <div class="form-group">
                          <input class="form-control form-control-user" type="text" value="<?php echo $row_empleado['telmov_emp']; ?>" id="num_telmov_emp" name="num_telmov_emp" placeholder="Telefono Movil">
                      </div>

                      <div class="form-group">
                          <input class="form-control form-control-user" type="text" value="<?php echo $row_empleado['cargo_emp']; ?>" id="txt_cargo_emp" name="txt_cargo_emp" placeholder="Cargo">
                      </div> 

        <div class="modal-footer">
          
          <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal"><strong>Cancelar</strong></button>
          <button type="submit" class="btn btn-success">Guardar Cambios</button>
          
                    
        </div>
      </div>
    </div>
  </div>
</form>