<!-- Modal Cerrar Sesion-->
  <div class="modal tct fade filter-dark" id="Modal-eliminar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content ">
        <div><br>
          <strong><h3 style="text-align: center;">Estas seguro de eliminar : <strong><?php echo $row_empleado['nombre_emp']; ?></strong></h3></strong>
        </div>
        <div style="text-align: center;" class="modal-body"><h5>Esta accion no se podra deshacer</h5></div>
        <div class="modal-footer">
          <button class="btn btn-transparent-dark" type="button" data-dismiss="modal"><strong>Cancelar</strong></button>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <button type="submit" class="btn btn-danger">Eliminar</button><script type="text/javascript">$('.alert').alert('close');</script>
          <input type="hidden" name="id_empleado_hidden" id="id_empleado_hidden" value="<?php echo $row_empleado['id_empleado']; ?>">
          </form>
        </div>
      </div>
    </div>
  </div>
