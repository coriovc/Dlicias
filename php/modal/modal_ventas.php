<div class="modal fade filter-modal" id="modal-cliente" tabindex="-1" role="dialog" aria-labelledby="modal-cliente" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct" id="modal-cliente"><strong>Agregar Nuevo cliente</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>
      <div class="modal-body">
      <form action="clientes_guardar.php" method="post" class="needs-validation"> 

          <fieldset>
            <div class="form-group row">
              <div class="col">
                <label><strong>Nombre</strong></label><input type="txt" class="form-control" id="nombre" name="nombre" placeholder="Ejem (Nombre)" required><div class="invalid-feedback">Rellene este campo</div>
              </div>
          </fieldset>

          <fieldset>
            <div class="form-group row">
              <div class="col-sm-6">
                  <label for="paisnac"><strong>Documento (*)</strong></label>
                  <select class="form-control form-control-solid" id="tipo_doc_iden" name="tipo_documento" required>
                      <option>seleccionar</option>
                      <option value="Venezolano">Venezolano (V-)</option>
                      <option value="Extranjero">Extranjero (E-)</option>
                      <option value="Juridico">Juridico (J-)</option>
                      <option value="Pasaporte">Pasaporte (P-)</option> 
                  </select>
              </div>

              <div class="col-sm-6 ">
                <label><strong>Numero de Documento(*)</strong></label><input type="txt" pattern="-?[0-9]*(\.[0-9]+)?"  class="form-control" id="identificacion" name="identificacion" placeholder="Ejem (26 866 132)" required>
                <div class="invalid-feedback">Rellene este campo</div>
                <div class="valid-feedback">Numero Correcto!</div>
              </div>
            </div>
          </fieldset>
          

          <fieldset>
              <div class="form-group row">
                  <div class="col">
                 <label><strong>Direccion (*)</strong></label><input class="form-control" name="direccion"  type="text" id="direccion" required placeholder="Ejem (Marcay)"><div class="invalid-feedback">Rellene este campo</div>
                </div>
              </div>
              <div class="form-group row">
              <div class="col ">
                <label><strong>Correo (*)</strong></label><input type="Email" class="form-control" id="correo" name="correo" placeholder="Ejem (Correo@ocor.com)" required>
                <div class="invalid-feedback">Rellene este campo</div>
                <div class="valid-feedback">Este Correo es Correcto!</div>
              </div>
              </div>              
          </fieldset>

          <fieldset>
            <div class="form-group row">
              <div class="col-sm-6 ">
                <label><strong>Telefono (*)</strong></label><input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ejem (+58 412 4784959)" required>
                <div class="invalid-feedback">Rellene este campo</div>
                <div class="valid-feedback">Este Correo es Correcto!</div>
              </div>
              
              <div class="col-sm-6">
                <label><strong>Nombre de la empresa</strong></label><input type="txt" class="form-control" id="alergias" name="alergias" placeholder="Ejem (empresa)" required><div class="invalid-feedback">Rellene este campo</div>
              </div>
            </div>
          </fieldset>
          
        </div>

      <div class="modal-footer tct">
        <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal"><strong>Cancelar</strong></button>
        <button type="submit" class="btn btn-success">Agregar</button>
      </form>        
      </div>
    </div>
  </div>
</div>