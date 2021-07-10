<?php require_once "cabecera.php";
require_once "controladores/categoria.php";
$categoria = listarCategorias();
if(isset($_REQUEST['operacion']) && $_REQUEST['operacion']=='eliminar'){
	eliminarCategoria();
}
 ?>
     <section class="content-header" >
            <ol class="breadcrumb">
        <li><a href="cabecera.php"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href=""> </a>Categorías</li>
        <li><a href=""></a>Listar Categoría</li>
        <li class="active"></li>
      </ol>
    </section>
    <br>
    <section class="content-header">
      <h1 align="center" style="color: white">
        LISTADO DE CATEGORÍAS
      </h1>
    
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <?php if(isset($_SESSION['eliminada'])): ?>
                <div id="mensaje" class="alert alert-success">
                  <p><strong>&Eacute;xito!</strong> Categoría eliminada.</p>
                </div>
                <script type="text/javascript">
                  setTimeout(function(){
                    $('#mensaje').hide(500);
                  },10000);
                </script>
              <?php 
              unset($_SESSION['eliminada']);
            endif; ?>

              <?php if(isset($_SESSION['creada'])): ?>
                <div id="mensaje" class="alert alert-success">
                  <p><strong>&Eacute;xito!</strong> Categoría agregada.</p>
                </div>
                <script type="text/javascript">
                  setTimeout(function(){
                    $('#mensaje').hide(500);
                  },10000);
                </script>
              <?php 
              unset($_SESSION['creada']);
            endif; ?>

              <?php if(isset($_SESSION['modificada'])): ?>
                <div id="mensaje" class="alert alert-success">
                  <p><strong>&Eacute;xito!</strong> Categoría modificada.</p>
                </div>
                <script type="text/javascript">
                  setTimeout(function(){
                    $('#mensaje').hide(500);
                  },10000);
                </script>
              <?php 
              unset($_SESSION['modificada']);
            endif; ?>
              <table id="example2" class="table table-bordered table-hover">
               
	<thead>
	<tr>
		<th>Nro</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	</thead>
	<tbody>
<?php 
$resultados = listarCategorias();
foreach ($resultados as $key => $r){ ?>
	<tr>
		<td><?php echo $r['id']; ?></td>
		<td><?php echo $r['nombre']; ?></td>
		<td>
			<a href="categorias_edicion.php?operacion=modificar&id=<?=$r['id'] ?>"><button class="btn bg-purple" title="Modificar"><i class="fa fa-edit"></i></button></a>
			<button type="button" class="btn btn-danger" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#modal-danger">
                <i class="fa fa-times"></i>
              </button>
		</td>
		</td>

		
	</tr>
<?php } ?>
	</tbody>
</table>
</div>
        
</div>
</div>
</div>
<div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <form action="categorias_listado.php?operacion=eliminar" method="post" accept-charset="utf-8">
                
              <div class="modal-body">
                <p>Seguro desea eliminar la Categoría?</p>
                <input type="hidden" name="id" id="id_cita" value="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline">Enviar</button>
              </div>
                
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</section>
<script>
  function eliminar(id_cita) {
    //console.log(id_cita+"--------");
    $("#id_cita").val(id_cita);
  }
</script>
</section>
<?php require_once "piedepagina.php"; ?>