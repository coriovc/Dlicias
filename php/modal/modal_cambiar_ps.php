<!-- Modal-->
  <div class="modal tct fade animacion filter-modal" id="modal_cambiar_ps" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="text-center tct" style="margin-top: 7rem;">
        <div style="margin-bottom: -1.5rem;" class="display-4 text-white">Cambiar Pregunta de seguridad</div>
        </div>
    <div class="modal-dialog border-0 modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body tct">
        <form action="../models/usuario/editar.php" method="post"> 
          <fieldset>
            
            <div class="form-group row">
              <div class="col">
                  <label><strong>Pregunta</strong></label>
                  <select class="form-control rounded-pill" required>
                      <option>seleccionar</option>
                      <option value="p1">Pregunta 1</option>
                      <option value="p2">Pregunta 2</option> 
                  </select>
                </div>
            </div>
            <div class="form-group row">
              <div class="col was-validated">
                <label><strong>Respuesta</strong></label>
                <input type="text" class="form-control rounded-pill" id="confirm_password" name="confirm_password" required>
                <div class="invalid-feedback">Campo obligatorio</div>
              </div>
            </div>
          </fieldset>        
      </div>
    </div>
    </div>

    <div class="row justify-content-center">          
      <button type="submit"  class="btn btn-secondary shadow shadow-lg rounded-pill btn-sm shadow lift-img m-1">Cambiar
        <i class="material-icons-round">done</i></button>
      
      <button type="reset"  class="tct btn shadow shadow-lg btn-icon btn-light lift-img m-1">
        <i class="material-icons-round">refresh</i></button>
      <a href="#" data-dismiss="modal" class="tct btn shadow shadow-lg btn-icon btn-light lift-X-r m-1">
        <i class="material-icons-round">close</i></a>
    </div>
    </form>
  </div>
