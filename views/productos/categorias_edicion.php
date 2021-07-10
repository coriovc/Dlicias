<?php require_once "cabecera.php";
require_once "controladores/categoria.php";
$categoria = buscarCategoria();
?>
<form  method="POST" name="form"  action="categorias_modificar.php" >
            <input type="hidden" name="id" value="<?= $categoria['id']?>">
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center" style="color: white">
        EDICIÓN DEL CATEGORÍA
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 align="center" class="box-title">Edición de la Categoría</h3>


        <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> Nombre de la Categoría</span></label>
                  <input type="text" name="nombre" class="form-control" maxlength="10" title="Ingrede el Nombre de la Categoría" required="required" value="<?= $categoria['nombre']?>" id="nombre">
        </div>
        </div>

              <div class="box-footer">
              <p align="center">(*) Campos Obligatorios</p>
               <p align="center"><button type="submit" name="guardar" value="Cargar datos" class="btn bg-purple"><i class="fa fa-send"></i> <span>Guardar</span></button>
                <input type="hidden" name="operacion" value="guardar">
                 <button type="reset" class="btn bg-red"><i class="fa  fa-remove"></i> <span>Limpiar datos</span></button></p>
              </div>
</form>

<script>
  jQuery(function () { 
    jQuery('.select2').select2();
});
</script>
<?php require_once "piedepagina.php"; ?>