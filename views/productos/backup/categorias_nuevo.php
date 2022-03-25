<?php require_once "cabecera.php";
require_once "controladores/categoria.php";
?>
     <section class="content-header" >
            <ol class="breadcrumb">
        <li><a href="cabecera.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href=""> </a>Categorías</li>
        <li><a href=""></a>Registrar Categoría</li>
        <li class="active"</li>
      </ol>
    </section>
    <form  method="POST" name="form"  action="categorias_guardar.php" >
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center" style="color: white">
        APERTURAR GATEGORÍA
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <center> <h3 align="center" class="box-title">Datos de las Categorías</h3></center>
          <p align="center">(*) Campos Obligatorios</p>


        <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Nombre de la CategorÍa</span></label>
                  <input type="text" name="nombre" maxlength="10" class="form-control" maxlength="10" title="Ingrede el Nombre de la Categoría" placeholder="ejmpl:Manos, pies..." required="required">
        </div>
        </div>

                <div class="box-footer">
            
               <p align="center"><button type="submit" name="guardar" title="Guardar" value="Cargar datos" class="btn bg-green"><i class="fa fa-send"></i> <span>Guardar</span> </button>
                <input type="hidden" name="operacion" value="guardar">
                 <button type="reset" class="btn bg-red" title="Eliminar"><i class="fa  fa-remove"></i><span> Eliminar</span> </button></p>
               
              </div>
</form>

<script>
  jQuery(function () { 
    jQuery('.select2').select2();
});
</script>
<?php require_once "piedepagina.php"; ?>