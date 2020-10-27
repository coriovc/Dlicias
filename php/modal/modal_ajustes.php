<div class="modal fade" id="modal-sistema" tabindex="-1" role="dialog" aria-labelledby="modal-sistema" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Ajustes del sistema</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form class="modal-body"> 
        <fieldset>
              <div class="form-group row">
                <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Nombre de la Moneda*</strong></label>
                  <input type="txt" class="form-control" id="#" name="#"placeholder="Ejem (Bolivar)" required>
                </div>
                <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Simbolo*</strong></label>
                  <input type="txt" class="form-control" id="#" name="#"placeholder="Ejem (Bs.)" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Nombre de Impuesto*</strong></label>
                  <input type="txt" class="form-control" id="#" name="#"placeholder="Ejem (Bolivar)" required>
                </div>
                <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Valor del Impuesto (%)*</strong></label>
                  <input type="txt" class="form-control" id="#" name="#"placeholder="Ejem (12%)" required>
                </div>
              </div>
              
          </fieldset>
      <small>(*)Campos Obligatorios</small>
      <div class="modal-footer tct">        
        <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>
        <button type="submit" id="toastBasicTrigger" class="btn btn-success">Guardar</button>
      </div>
      </form>            
      
    </div>
  </div>
</div>

<div class="modal fade" id="modal-privilegios" tabindex="-1" role="dialog" aria-labelledby="modal-privilegios" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Privilegios</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form class="modal-body"> 
        <fieldset>
              <div class="form-group row">
                <div class="col-12 col-lg-5 mb-2">
                  <label for="ingr"><strong>Nivel de acceso</strong></label>
                  <select class="form-control form-control-solid" id="ingr" required>
                      <option value="1">Empleados, gerente, SU</option>
                      <option value="2">gerente, SU</option>
                      <option value="3">SU</option>
                  </select>
                </div>
                <div class="col-12 col-lg-5">
                <label for="paisnac"><strong>Modulos del sistema</strong></label>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="Ajustes" type="checkbox" checked/>
                    <label class="custom-control-label small" for="Ajustes">Ajustes</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="mantenimiento" type="checkbox" checked/>
                    <label class="custom-control-label small" for="mantenimiento">Mantenimiento</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="usuarios" type="checkbox" checked/>
                    <label class="custom-control-label small" for="usuarios">Usuarios</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="Empleados" type="checkbox" checked/>
                    <label class="custom-control-label small" for="Empleados">Empleados</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="Clientes" type="checkbox" checked/>
                    <label class="custom-control-label small" for="Clientes">Clientes</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="Compras" type="checkbox" checked/>
                    <label class="custom-control-label small" for="Compras">Compras</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="Ventas" type="checkbox" checked/>
                    <label class="custom-control-label small" for="Ventas">Ventas</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="Ingredientes" type="checkbox" checked/>
                    <label class="custom-control-label small" for="Ingredientes">Ingredientes</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="Productos" type="checkbox" checked/>
                    <label class="custom-control-label small" for="Productos">Productos finales</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input small" id="insidencias" type="checkbox" checked/>
                    <label class="custom-control-label small" for="insidencias">Insidencias</label>
                  </div>

                    
                </div>
              </div>
              
          </fieldset>
      <small>(*)Campos Obligatorios</small>
      <div class="modal-footer tct">        
        <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>
        <button type="submit" id="toastBasicTrigger" class="btn btn-success">Guardar</button>
      </div>
      </form>            
      
    </div>
  </div>
</div>

<div class="modal fade" id="modal-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-usuario" aria-hidden="true">
  <div class="modal-dialog shadow-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Registrar Nuevo Usuario</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form class="modal-body">                     
          <fieldset>
            <div class="form-group row">
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Nombre*</strong></label>
                  <input class="form-control" name="#"  type="text" id="#" placeholder="Ingrese su nombre">
              </div>

              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Apellido*</strong></label>
                  <input class="form-control" name="#"  type="text" id="#" placeholder="Ingrese su apellido">
              </div>              
            </div>
            <div class="form-group row">
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Usuario*</strong></label>
                  <input class="form-control" name="#"  type="text" id="#" placeholder="Ingrese un usuario">
              </div>

              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Email*</strong></label>
                  <input class="form-control" name="#"  type="email" id="#" placeholder="correo@mail.com">
              </div>              
            </div>

            <div class="form-group row">
              <div class="col-12 mb-2">
                  <label><strong>Contraseña*</strong></label>
                  <input class="form-control" name="#"  type="password" id="#" placeholder="Ingrese una contraseña">
              </div>                
            </div>
            <div class="form-group row">
              <div class="col-12 mb-2">
                  <label><strong>Confirme su Contraseña*</strong></label>
                  <input class="form-control" name="#"  type="password" id="#" placeholder="Confirme su contraseña">
              </div>                
            </div>
          </fieldset>
          <fieldset> 
            <div class="form-group row">
              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Pregunta de seguridad*</strong></label>
                  <input class="form-control" name="#"  type="text" id="#" placeholder="Ingrese una pregunta de seguridad">
              </div>

              <div class="col-12 col-lg-6 mb-2">
                  <label><strong>Respuesta*</strong></label>
                  <input class="form-control" name="#"  type="text" id="#" placeholder="Ingrese su respuesta">
              </div>              
            </div>            
          </fieldset>
          <fieldset>
              <div class="form-group row">
                <div class="col-12">
                <label for="paisnac"><strong>Tipo de Usuario*</strong></label>
                    <div class="custom-control custom-radio custom-control-solid">
                        <input class="custom-control-input" id="gerente" type="radio" name="customRadioSolid1">
                        <label class="custom-control-label" for="gerente">Gerente</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-solid">
                        <input class="custom-control-input" id="empleado" type="radio" name="customRadioSolid1" checked>
                        <label class="custom-control-label" for="empleado">Empleado</label>
                    </div> 
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

