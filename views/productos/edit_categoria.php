<?php
require_once "../../controladores/categoria.php";
$categoria = buscarCategoria();

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Nuevo Servicio</title>
  <!-- Estilos de esta pagina-->
</head>
<body>
    
    <header class="page-header bg-img-cover" style="background: rgb(1,76,255);background: linear-gradient(90deg, rgba(1,76,255,1) 0%, rgba(0,168,255,1) 100%);">
    <div class="container" style="margin-top: 6rem;">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-3 tct text-white">Editar Categoria</h1>
        </div>
      </div>
    </div>
    </header>

    
      <div class="row">
        <div class="col-lg-12 mb-4">
        <div class="card card-bor mb-4" style="margin-top: -1rem;">
        
            <form  method="POST" name="form"  action="categorias_modificar.php" >
              <fieldset>
              <div class="card-body">
                <div class="form-group row">            
                  <div class="col-12 col-lg-10">
                    <label><strong>Nombre de la categoria</strong></label>
                    <input type="text" name="nombre" maxlength="10" class="form-control form-control-solid" maxlength="10" title="Ingrede el Nombre de la Categoría" placeholder="Ejem: Reposteria" value="<?= $categoria['nombre']?>" required="required">
                  </div>

                  <small class="mt-2 ml-2">(*)Campos Obligatorios</small>
                </div>
              </div>
              <div class="modal-footer tct">        
                <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>
                <button type="submit" id="toastBasicTrigger" name="guardar" title="Agregar" class="btn btn-success">Agregar</button>
                <input type="hidden" name="operacion" value="guardar">
              </div>
              </fieldset>
            </form> 
        
        </div>
        </div>
      </div>
  
<div style=" position: fixed; top: 2rem; right: 1rem; z-index: 900;">
    <div class="toast" id="toast-success-servicio" role="alert" aria-live="assertive" aria-atomic="true" data-delay="6000">
        <div class="toast-header tct text-success">
            <span class="material-icons-round">check_circle_outline</span>
            <strong class="mr-auto">Se Registro un Servicio Exitosamente</strong>
        <button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
    </div>
</div>

<?php
/* scripts */
include ('../../php/scripts.php');
?>

<script>
    $('#toast-success-servicio').toast('show');}
    sleep(7);
</script>





<script type="text/javascript">
function cargar(){
    opener.location.reload();
    window.close();
}
</script>