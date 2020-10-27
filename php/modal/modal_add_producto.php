<div class="modal fade" id="modal-producto" tabindex="-1" role="dialog" aria-labelledby="modal-producto" aria-hidden="true">
  <div class="modal-dialog shadow-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Agregar Nuevo Producto Final</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form class="modal-body">                     
          <fieldset>
            <div class="form-group row">   
              <div class="col-12 mb-2">
                <label><strong>Nombre del producto*</strong></label>
                <input type="txt" class="form-control" id="#" name="#"placeholder="Ejem (Producto)" required>
              </div>

              <div class="col-12 mb-2">
                <label><strong>Descripcion*</strong></label>
                <textarea class="form-control" name="Descripcion" rows="3" placeholder="Escriba una breve Descripcion..."></textarea>
              </div>

                <div class="col-12 mb-2">
                  <label for="ingr"><strong>Ingredientes*</strong></label>
                  <select class="form-control form-control-solid" id="ingr" required>
                      <option>seleccionar</option>
                      <option value="ig">ingrediente 1</option>
                      <option value="ig">Ingrediente 2</option>
                  </select>
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

<div class="modal fade" id="modal-ingrediente" tabindex="-1" role="dialog" aria-labelledby="modal-ingrediente" aria-hidden="true">
  <div class="modal-dialog modal-lg-2 shadow-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Agregar Nuevo Ingrediente</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form class="modal-body">                     
          <fieldset>
            <div class="form-group row">   
              <div class="col-12 mb-2">
                <label><strong>Nombre del Ingrediente*</strong></label>
                <input type="txt" class="form-control" id="#" name="#"placeholder="Ejem (Producto)" required>
              </div>

              <div class="col-12 mb-2">
                <label><strong>Descripcion*</strong></label>
                <textarea class="form-control" name="Descripcion" rows="3" placeholder="Escriba una breve Descripcion..."></textarea>
              </div>

                <div class="col-12 mb-2">
                  <label for="ingr"><strong>Ingredientes*</strong></label>
                  <select class="form-control form-control-solid" id="ingr" required>
                      <option>seleccionar</option>
                      <option value="ig">ingrediente 1</option>
                      <option value="ig">Ingrediente 2</option>
                  </select>
                </div>
            </div>
          </fieldset>
          <fieldset>
              <div class="form-group row">
                <div class="col-sm-4">
                <label for="paisnac"><strong>Unidad de Compra *</strong></label>
                    <div class="custom-control custom-radio custom-control-solid">
                        <input class="custom-control-input" id="paquete" type="radio" name="customRadioSolid1">
                        <label class="custom-control-label" for="paquete">Paquete</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-solid">
                        <input class="custom-control-input" id="caja" type="radio" name="customRadioSolid1" checked>
                        <label class="custom-control-label" for="caja">Caja</label>
                    </div>                    
                    <div class="custom-control custom-radio custom-control-solid">
                        <input class="custom-control-input" id="unidad" type="radio" name="customRadioSolid1">
                        <label class="custom-control-label" for="unidad">Unidad</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-solid">
                        <input class="custom-control-input" id="frasco" type="radio" name="customRadioSolid1">
                        <label class="custom-control-label" for="frasco">Frasco</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-solid">
                        <input class="custom-control-input" id="litro" type="radio" name="customRadioSolid1">
                        <label class="custom-control-label" for="litro">Litro</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-solid">
                        <input class="custom-control-input" id="kilo" type="radio" name="customRadioSolid1">
                        <label class="custom-control-label" for="kilo">kilogramo</label>
                    </div>
                </div>

                <div class="col-sm-4">
                  <label for="U-consumo"><strong>Unidad de Consumo</strong></label>
                  <select class="form-control form-control-solid" id="U-consumo" required>
                      <option>seleccionar</option>
                      <option value="">Pizca</option>
                      <option value="">Cuacharada</option>
                      <option value="">Unidad</option>
                      <option value="">Taza</option> 
                      <option value="">Litro</option> 
                      <option value="">Kilogramo</option>
                  </select>
                </div>

                <div class="col-sm-4">
                  <label for="paisnac"><strong>Cantidad minima en Stock</strong></label>
                  <input class="form-control" name="#"  type="number" id="#" value="1">
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

<div class="modal fade" id="modal-compras" tabindex="-1" role="dialog" aria-labelledby="modal-compras" aria-hidden="true">
  <div class="modal-dialog modal-lg-2 shadow-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Registrar Nueva Compra</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form class="modal-body">                     
          <fieldset>
            <div class="form-group row">   
              <div class="col-12 col-lg-6 mb-2">
                <label><strong>Fecha*</strong></label>
                <input type="date" class="form-control" id="#" name="#"placeholder="Ejem (Producto)" required>
              </div>

              <div class="col-12 col-lg-6 mb-2">
                  <label for="ingr"><strong>Realizada por:</strong></label>
                  <select class="form-control form-control-solid" id="ingr" required>
                      <option>seleccionar</option>
                      <option value="ig">Empleado</option>
                      <option value="ig">Empleado</option>
                  </select>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-12 mb-2">
                  <label><strong>Nro de Factura*</strong></label>
                  <input class="form-control" name="#"  type="text" id="#" value="">
              </div>                
            </div>
          </fieldset>
          <fieldset> 
              <div class="form-group row">
                <div class="col-12 mb-2">
                  <label for="pro-compra"><strong>Productos Comprados*</strong></label>
                  <select class="form-control form-control-solid" id="pro-compra" required>
                      <option>seleccionar</option>
                      <option value="ig">Producto 1</option>
                      <option value="ig">Producto 2</option>
                  </select>
              </div>
                <div class="col-12 col-lg-4">
                  <label><strong>Cantidad</strong></label>
                  <input class="form-control" name="#" type="num" id="#">
                </div>
                <div class="col-12 col-lg-4">
                  <label><strong>Precio</strong></label>
                  <input class="form-control" name="#" type="text" id="#">
                </div>
                <div class="col-12 col-lg-4">
                  <label><strong>SubTotal</strong></label>
                  <input class="form-control" name="#" type="text" id="#" readonly>
                </div>


              </div>              
          </fieldset>
          <fieldset>
              <div class="form-group row">
                <div class="col-12">
                  <label for="paisnac"><strong>TOTAL</strong></label>
                  <input class="form-control" name="#" type="text" id="#" readonly>
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