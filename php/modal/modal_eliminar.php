<!-- Modal Eliminar Ingrediente-->
  <div class="modal tct fade filter-dark" id="eliminar-ingrediente" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="?operacion=eliminar" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Está Seguro que desea eliminar </h2>
                <h4>Luego podrá recuperarlo en papelera.</h4>
                <input type="hidden" name="id" id="id_cita" value="">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r">NO
              <i class="material-icons-round">cancel</i></button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r">Eliminar
              <i class="material-icons-round">delete</i></button>                   
              </div>            
          </div>
        </form>         
        </div>
    </section>
  </div>

<!-- Modal Eliminar Category-->
  <div class="modal tct fade filter-dark" id="eliminar-categoria" tabindex="-1" role="dialog" aria-labelledby="eliminar-categoria" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="?operacion=eliminar" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Está Seguro que desea eliminar </h2>
                <h4>Luego podrá recuperarlo en papelera.</h4>
                <input type="hidden" name="id" id="id_cate" value="">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r">NO
              <i class="material-icons-round">cancel</i></button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r">Eliminar
              <i class="material-icons-round">delete</i></button>                   
              </div>            
          </div>
        </form>         
        </div>
    </section>
  </div>


<!-- Modal Eliminar Ingrediente-->
  <div class="modal tct fade filter-dark" id="eliminar-Cliente" tabindex="-1" role="dialog" aria-labelledby="eliminar-Cliente" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="index.php?operacion=eliminar" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Está Seguro que desea eliminar </h2>
                <h4>Luego podrá recuperarlo en papelera.</h4>
                <input type="hidden" name="id" id="id_cliente" value="">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r">NO
              <i class="material-icons-round">cancel</i></button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r">Eliminar
              <i class="material-icons-round">delete</i></button>                   
              </div>            
          </div>
        </form>         
        </div>
        <script>
  function eliminar(id_cliente) {
    //console.log(id_cliente+"--------");
    $("#id_cliente").val(id_cliente);
  }
</script>
    </section>
  </div>


  <!-- Modal Eliminar Bitacora-->
  <div class="modal tct fade filter-dark" id="modal-borrar-bitacora" tabindex="-1" role="dialog" aria-labelledby="modal-borrar-bitacora" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="../../controladores/auditoria.php?operacion=eliminar" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Está Seguro que desea Vaciar La Bitacora </h2>
                <h4>Esta opcion no se podrá Deshacer</h4>
                <input type="hidden" name="id" id="id_bitacora" value="">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r">NO
              <i class="material-icons-round">cancel</i></button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r">Vaciar
              <i class="material-icons-round">delete</i></button>                   
              </div>            
          </div>
        </form>         
        </div>
        <script>
  function eliminar(id_bitacora) {
    //console.log(id_bitacora+"--------");
    $("#id_bitacora").val(id_bitacora);
  }
</script>


    </section>
  </div>






                
              
                
              
