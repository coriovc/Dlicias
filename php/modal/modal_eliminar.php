<!-- Modal Eliminar Ingrediente-->
  <div class="modal tct fade filter-dark" id="eliminar-ingrediente" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="index.php?operacionIngre=eliminarIngre" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Eliminar Ingrediente</h2>
                <h4>No podrá deshacer esta acción, Esta seguro de continuar?</h4>
                <input type="hidden" name="id" id="id_ingre" value="">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">cancel</i>NO
              </button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">delete</i>Eliminar
              </button>                 
              </div>            
          </div>
        </form>         
        </div>
    </section>
    <script>
      function eliminar(id_ingre) {
        //console.log(id_ingre+"--------");
        $("#id_ingre").val(id_ingre);
      }
    </script>
  </div>

<!-- Modal Eliminar Servicio-->
  <div class="modal tct fade filter-dark" id="eliminar-servicio" tabindex="-1" role="dialog" aria-labelledby="eliminar-servicio" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="index.php?operacionserv=eliminarserv" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Eliminar Servicio</h2>
                <h4>No podrá deshacer esta acción, Esta seguro de continuar?</h4>
                <input type="hidden" name="id" id="id_serv" value="">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">cancel</i>NO
              </button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">delete</i>Eliminar
              </button>                 
              </div>            
          </div>
        </form>         
        </div>
        <script>
      function eliminar(id_serv) {
        //console.log(id_serv+"--------");
        $("#id_serv").val(id_serv);
      }
    </script>
    </section>
  </div>


<!-- Modal Eliminar Category-->
  <div class="modal tct fade filter-dark" id="eliminar-categoria" tabindex="-1" role="dialog" aria-labelledby="eliminar-categoria" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="index.php?operacionc=eliminarc" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Eliminar Categoria</h2>
                <h4>No podrá deshacer esta acción, Esta seguro de continuar?</h4>
                <input type="hidden" name="id" id="id_cate" value="">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">cancel</i>NO
              </button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">delete</i>Eliminar
              </button>                 
              </div>            
          </div>
        </form>         
        </div>
        <script>
          function eliminar(id_cate) {
            //console.log(id_cate+"--------");
            $("#id_cate").val(id_cate);
          }
        </script>
    </section>
  </div>


<!-- Modal Eliminar cliente-->
  <div class="modal tct fade filter-dark" id="eliminar-Cliente" tabindex="-1" role="dialog" aria-labelledby="eliminar-Cliente" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="index.php?operacioncli=eliminarcli" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Eliminar Cliente </h2>
                <h4>Al eliminar este cliente se borraran todas las ventas del mismo.</h4>
                <h4>No podrá deshacer esta acción, Desea Continuar?</h4>
                <input type="hidden" name="id" id="id_cliente" value="S">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">cancel</i>NO
              </button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">delete</i>Eliminar
              </button>                   
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

  <!-- Modal Eliminar Empleado-->
  <div class="modal tct fade filter-dark" id="eliminar-Empleado" tabindex="-1" role="dialog" aria-labelledby="eliminar-Empleado" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="index.php?operacionEmp=eliminarEmp" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Desea Eliminar este Empleado?</h2>
                <h4>Puedes recuperarlo luego</h4>
                <input type="hidden" name="id" id="id_empleado" value="">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r">NO
              <i class="material-icons-round">cancel</i></button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r">Mover a la papelera
              <i class="material-icons-round">delete</i></button>                   
              </div>            
          </div>
        </form>         
        </div>
        <script>
          function eliminar(id_empleado) {
            //console.log(id_empleado+"--------");
            $("#id_empleado").val(id_empleado);
          }
        </script>
    </section>
  </div>


  <!-- Modal Eliminar Bitacora-->
  <div class="modal tct fade filter-dark" id="modal-borrar-bitacora" tabindex="-1" role="dialog" aria-labelledby="modal-borrar-bitacora" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="index.php?operacion-b=eliminar-b" method="post" accept-charset="utf-8">
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

<!-- Modal Eliminar user-->
  <div class="modal tct fade filter-dark" id="eliminar-Usuario" tabindex="-1" role="dialog" aria-labelledby="eliminar-Usuario" aria-hidden="true">
    <section class="modal-dialog Exit-section" role="document">
      <div class="modal-content container">
        <form action="index.php?operacionUser=eliminarUser" method="post" accept-charset="utf-8">
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-7 home-content">
                <h2>Eliminar Usuario</h2>
                <h4>No podrá deshacer esta acción, Esta seguro de continuar?</h4>
                <input type="hidden" name="id" id="id_user" value="">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-white mr-2 shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">cancel</i>NO
              </button>
            <button type="submit" class="btn btn-danger shadow-lg rounded-pill lift-X-r"><i class="material-icons-round">delete</i>Eliminar
              </button>                 
              </div>            
          </div>
        </form>         
        </div>
      <script>
        function eliminar(id_user) {
          //console.log(id_user+"--------");
          $("#id_user").val(id_user);
        }
      </script>
    </section>
  </div>





                
              
                
              
