<div class="modal fade filter-modal " id="modal-servicio" tabindex="-1" role="dialog" aria-labelledby="modal-servicio" aria-hidden="true"><!--data-backdrop="static"-->
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct" id="modal-servicio"><strong>Agregar Nuevo Servicio</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form class="modal-body">
                     
          <fieldset>
            <div class="form-group row">
              <div class="col-sm-6 was-validated">
                <label><strong>Codigo</strong></label><input type="txt" class="form-control" id="#" name="#" placeholder="Ejem (COD-001)" required>
                <div class="invalid-feedback">Rellene este campo</div>
              </div>
            

              <div class="col-sm-6">
                <label><strong>Nombre del Servivio</strong></label><input type="txt" class="form-control" id="#" name="#"placeholder="Ejem (Servicio 1)" required>
              </div>

              <div class="col-sm-12">
                <label><strong>Descripcion</strong></label>
                <textarea class="form-control" name="Descripcion" id="Descripcion"rows="3" placeholder="Escriba una breve Descripcion..."></textarea>
              </div>

            </div>
          </fieldset>

          <fieldset>
              <div class="form-group row">
                <div class="col was-validated">
                 <label><strong>Costo del servicio</strong></label><input onkeyup="format(this)" onchange="format(this)" class="form-control" name="#"  type="text" id="#" required placeholder="Ejem (10.000)">
                 <div class="invalid-feedback">Rellene este campo</div>
                 <small id="passwordHelpBlock" class="form-text text-muted">Ingrese el precio</small>
                </div> 

                <small class="form-inline text-muted">De</small>
                <div class="col-sm-2">
                  <label><strong>Duracion</strong></label>
                  <input class="form-control form-control-solid" name="#"  type="text" id="#" value="1">
                </div>
                <small class="form-inline text-muted">a</small>
                <div class="col-sm-2">
                  <label>.</label>
                  <input class="form-control form-control-solid" name="#"  type="text" id="#" value="2">
                </div>
                <div class="form-inline col-sm-3">
                  <select class="form-control form-control-solid" required>
                      <option>seleccionar</option>
                      <option value="mi">Minutos</option>
                      <option value="hr">Horas</option>
                      <option value="di">Dias</option>
                      <option value="me">Meses</option>
                      <option value="añ">Años</option>  
                  </select>
                </div>
                
                
          </fieldset>

          <fieldset>
              
          </fieldset>
        </form>  

      <div class="modal-footer tct">
        <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal"><strong>Cancelar</strong></button>
        <button type="submit" class="btn btn-success">Agregar</button>          
      </div>
    </div>
  </div>
</div>