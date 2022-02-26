<?php
require_once "../../controladores/categoria.php";
require_once "../../controladores/producto.php";
require_once "../../controladores/clientes.php";
$productos = listarProducto();
$categorias = listarCategorias();

if(isset($_POST["id_producto"])){

  if(isset($_SESSION["materiales"][$_POST["id_producto"]])){
    $_SESSION["materiales"][$_POST["id_producto"]]['cantidad'] += floatval($_POST["cantidad"]);
  }
  else{
    $_REQUEST["id"] = $_POST["id_producto"];
    $producto = buscarProducto();
    if($producto){
      $_SESSION["materiales"][$_POST["id_producto"]] = [
        "nombre" => $producto["nombre"],
        "cantidad" => $_POST["cantidad"], 
        "unidad" => obtenerUnidadConsumo($producto["id"])
      ];
    }
  }
}
elseif(isset($_GET["remover"])){
  unset($_SESSION["materiales"][$_GET["remover"]]);
}

 ?>
 <script>
      function llamado(idp){
        $.ajax(
          {
            url:'ajax/traerunidad.php',
            method:'GET',
            data: {id_producto : idp},
            success: function(data){
              $('.unidadesc').html(data);
            }
          }

          );
      }
    </script>
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
          <h1 class="display-3 tct text-white">Nuevo servicio</h1>
        </div>
      </div>
    </div>
    </header>

    
      <div class="row">
        <div class="col-lg-12 mb-4">
        <div class="card card-bor mb-4" style="margin-top: -1rem;">
        <div class="card-body">
        <form  method="POST" name="form"  action="servicios_nuevo.php" >
          <fieldset>
            <legend>Agregar productos al servicio</legend>
            <div class="form-group row">
              <div class="col-7 col-lg-7">
                <label><strong>Producto*</strong></label>
                <select onchange="llamado( $(this).val() );" class="form-control form-control-solid select2" name="id_producto" required="required" title="Seleccione un Producto" style="width: 100%;">
                  <option value="0">Seleccionar</option>
                <?php
                  for ($i=0; $i < count($productos); $i++){ 
                    ?>
                    
                    <option value="<?=$productos[$i]['id'] ?>"><?= $productos[$i]['nombre'] ?> </option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            
              <div class="col-3 col-lg-3">
                <label><strong>Cantidad</strong></label>
                <input type="text" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" pattern="|[0-9]+(\.[0-9]+)?|" name="cantidad" id="cantidad_carrito" class="form-control form-control-solid" title="Ingrese la Cantidad" placeholder="20" required="required">
              </div>
              <div class="col-2 col-lg-2" style="margin-top: auto;">
                <button class="btn btn-green" name="guardar" value="Cargar datos" title="Agregar">Agregar</button></div>

            </div>
          </fieldset>
          <fieldset class="mb-2">
              <legend>Detalles</legend>
                <div class="datatable table-responsive">
                 <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                     <thead>
                        <tr>
                          <th>Producto o Servicio</th>
                          <th>Cantidad</th>
                          <th>Unidad</th>
                          <th>Accion</th>
                        </tr>
                     </thead>                                      
                     <tbody>
                      <?php 
                        $total = 0;
                      if(isset($_SESSION["materiales"]) && is_array($_SESSION["materiales"]) && count($_SESSION["materiales"])){
                        foreach($_SESSION["materiales"] as $id_producto => $elemento){
                         ?>
                      <tr>
                        <td><?=$elemento['nombre']?></td>
                        <td><?=$elemento['cantidad']?></td>
                        <td><?=$elemento['unidad']?></td>
                        <td><button class="btn badge-danger rounded-pill btn-sm btn-icon" onclick="window.location='servicios_nuevo.php?remover=<?=$id_producto ?>';"><i class="material-icons-round">clear</i></button></td>
                      </tr>
                      <?php }
                        } ?>  
                     </tbody>
                 </table>
             </div>
          </fieldset>
        </form>  
        <form method="POST" name="form"  action="servicios_guardar.php">
          <fieldset>
            <div class="form-group row">
              <div class="col-6 col-lg-6">
                <label><strong>Codigo del Servicio*</strong></label>
                <input type="text" name="codigo_s" title="Código del Producto" readonly="readonly" class="form-control" required="required" value="<?php
                $permitted_chars = '0123456789';
                // Output: video-g6swmAP8X5VG4jCi.mp4
                echo 'SE'.substr(str_shuffle($permitted_chars), 0, 4);
                 
                ?>">
              </div>
              <div class="col-6 col-lg-6 mb-2">
                <label><strong>Nombre del Servicio*</strong></label>
                <input type="text" name="nombre" maxlength="20" class="form-control"  placeholder="Ingrese Nombre del Servicio" required="required">
              </div>

              <div class="col-12 col-lg-12 mb-2">
                <label><strong>Categoria*</strong></label>
                <select class="form-control select2" name="id_categoria" required="required" title="Seleccione una Categoría" style="width: 100%;">
                  <option>Seleccionar</option>
                  <?php
                  for ($i=0; $i < count($categorias); $i++) { 
                    ?>
                    <option value="<?=$categorias[$i]['id'] ?>"><?= $categorias[$i]['nombre'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            
              <div class="col-6 col-lg-6 mb-2">
                <label><strong>Tiempo*</strong></label>
                <input type="number" min="30" max="180" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=2;" name="tiempo" title="Ingrese el tiempo" class="form-control" placeholder="30 min." required="required">
              </div>

              <div class="col-6 col-lg-6 mb-2">
                <label><strong>Precio*</strong></label>
                <input type="text" name="precio" id="number" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=10;" title="Ingrese el Precio" class="form-control" placeholder="12.000bs" required="required">
              </div>

            </div>
          </fieldset>
          
                  
                  <div align="center">
                  <button onclick="javascript:closeWindow()" type="button" class="btn btn-transparent-dark"><strong>Cancelar</strong></button>
                  <button type="submit" onclick="cargar()" name="guardar" title="Guardar" class="btn btn-green">Registrar</button>
        </form>
                            </div>
                          </div>
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
    $('#toast-servicio').on('click', function(e) { 
    e.preventDefault(); 
    $('#toast-success-servicio').toast('show');});
    sleep(7);
</script>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>