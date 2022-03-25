<?php
require_once "../../controladores/producto.php";
require_once "../../controladores/unidad.php";
$unidades = listarUnidad();
$producto = buscarProducto();

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Editar</title>
  <!-- Estilos de esta pagina-->
</head>
<body>
    
    <header class="page-header bg-img-cover" style="background: rgb(1,76,255);background: linear-gradient(90deg, rgba(1,76,255,1) 0%, rgba(0,168,255,1) 100%);">
    <div class="container" style="margin-top: 6rem;">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-3 tct text-white">Editar Ingrediente</h1>
        </div>
      </div>
    </div>
    </header>

    
      <div class="row">
        <div class="col-lg-12 mb-4">
        <div class="card card-bor mb-4 mx-3" style="margin-top: -1rem;">
        
            <form  method="POST" name="form" autocomplete="off" action="producto_modificar.php" >
              
            <div class="card-body">

          <fieldset>
            <div class="form-group row">  
              <div class="col-12 col-lg-3 mb-2">
                <label><strong>codigo*</strong></label>
                <input type="txt" class="form-control" readonly="readonly" name="codigo_pt" title="Código del Producto" placeholder="codigo" required  value="<?= $producto['codigo_pt']?>">
              </div>

              <div class="col-12 col-lg-9 mb-2">
                <label><strong>Nombre del Ingrediente*</strong></label>
                <input type="txt" class="form-control" name="nombre" maxlength="20" title="Ingrese el Producto" placeholder="Ejem (Producto)" value="<?= $producto['nombre']?>" required>
              </div>

              <div class="col-12 col-lg-2 mb-2">
                <label><strong>Cantidad actual*</strong></label>
                  <input type="number" name="cantidad" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" class="form-control" title="Ingrese la Cantidad" placeholder="05" value="<?= $producto['cantidad']?>" required>
              </div>

              <div class="col-12 col-lg-5 mb-2">
                <label><strong>Precio de Compra (UNIDAD)*</strong></label>
                  <input type="text" id="precio_c" name="precio_c" title="Ingrese el Precio" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=10;" class="form-control preci" placeholder="5.000 Bs"required value="<?= $producto['precio_c']?>">
              </div>

              <div class="col-12 col-lg-5 mb-2">
                <label><strong>Precio de Venta (UNIDAD)*</strong></label>
                  <input type="text" id="precio_v" name="precio_v"  title="Ingrese el precio" class="form-control preci"  placeholder="3.000 Bs.S"required="required" value="<?= $producto['precio_v']?>">
              </div>

              <div class="col-12 col-lg-4 mb-2">
                <label><strong>Unidad de entrada*</strong></label>
                <select id="id_unidad_entrada"class="form-control select2" onchange="$('.unidadese').html(this.options[this.selectedIndex].label);" name="id_unidad" required title="Seleccione una Unidad" style="width: 100%;">
                  <?php
                  for ($i=0; $i < count($unidades); $i++){ 
                    ?>
                    <option value="<?=$unidades[$i]['id'] ?>"><?= $unidades[$i]['nombre'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12 col-lg-4 mb-2">
                <label><strong>Unidad de Consumo*</strong></label>
                <select class="form-control select2"id="id_unidad_consumo" onchange="$('.unidadesc').html(this.options[this.selectedIndex].label);" name="id_unidadconsumo" required title="Seleccione una Unidad" style="width: 100%;">
                <?php
                for ($i=0; $i < count($unidades); $i++){ 
                  ?>
                  <option value="<?=$unidades[$i]['id'] ?>"><?= $unidades[$i]['nombre'] ?></option>
                <?php
                }
                ?>
                </select>
              </div>
              <div class="col-12 col-lg-4 mb-2">
                <label><strong>Unidad De Venta*</strong></label>
                <select class="form-control select2" id="id_unidad_venta" onchange="$('.unidadesv').html(this.options[this.selectedIndex].label);" name="id_unidadventa" required title="Seleccione una Unidad" style="width: 100%;">
                <?php
                for ($i=0; $i < count($unidades); $i++){ 
                  ?>
                  <option value="<?=$unidades[$i]['id'] ?>"><?= $unidades[$i]['nombre'] ?></option>
                <?php
                }
                ?>
                </select>
              </div>
            </div>
          </fieldset>

          <fieldset>
              <div class="form-group row">
                <div class="col-12 col-lg-3">
                  <label><strong>Stock MIN.</strong></label>
                  <input id="id_stock_minimo"type="number" onchange="if(parseInt($(this).val()) > parseInt($('#stock_max').val()) ){alert('Error, el minimo no puede ser mayor al maximo');  $(this).val('');}" min="0" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" name="stock_min" class="form-control" id="stock_min" title="Ingrese el Stck Minimo" placeholder="20" required="required" value="<?= $producto['stock_min']?>">
                </div>

                <div class="col-12 col-lg-3">
                  <label><strong>Stock MAX.</strong></label>
                  <input id="id_stock_maximo" type="number" min="0"  name="stock_max" onchange="if(parseInt($(this).val()) < parseInt($('#stock_min').val()) ){alert('Error, el maximo no puede ser menor al minimo'); $(this).val('');}" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" title="Ingrese el Stock Maximo" id="stock_max" class="form-control"  placeholder="20"required="required" value="<?= $producto['stock_max']?>">
                </div>

              <div class="col-12 col-lg-3 mb-2">
                <label><strong>Equivalencia de venta*</strong></label>
                  <input id="id_equivalencia_venta" type="number" min="0" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=7;" name="equivalencia_v" onchange="if(parseInt($(this).val()) < parseInt($('#stock_min').val()) ){alert('Error, el maximo no puede ser menor al minimo'); $(this).val('');}" class="form-control" title="Ingrese la Equivalencia" placeholder="20"required="required" value="<?= $producto['equivalencia_venta']?>">
              </div>

              <div class="col-12 col-lg-3 mb-2">
                <label><strong>Equivalencia*</strong></label>
                  <input id="id_equivalencias" type="number" min="0" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=7;" name="equivalencia" onchange="if(parseInt($(this).val()) < parseInt($('#stock_min').val()) ){alert('Error, el maximo no puede ser menor al minimo'); $(this).val('');}" class="form-control"  placeholder="20"required="required" title="Ingrese la Equivalencia" value="<?= $producto['equivalencia']?>">
              </div>
              
              </div>
              
          </fieldset>
      

                  <small class="mt-2 ml-2">(*)Campos Obligatorios</small>
                </div>
              </div>
              <div class="modal-footer tct">        
                <!--<button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>-->
                <button type="submit" id="toastBasicTrigger" name="guardar" title="Agregar" class="btn btn-success">Modificar</button>
                <input type="hidden" name="id" value="<?= $producto['id']?>">
              </div>
              </fieldset>
            </form> 
        
        </div>
        </div>
      </div>
  
<div style=" position: fixed; top: 2rem; right: 1rem; z-index: 900;">
    <div class="toast" id="toast-success-categoria" role="alert" aria-live="assertive" aria-atomic="true" data-delay="6000">
        <div class="toast-header tct text-success">
            <span class="material-icons-round">check_circle_outline</span>
            <strong class="mr-auto">Se ha modificado Exitosamente</strong>
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
<!--<script>
    
    $('#toast-success-categoria').toast('show');
    sleep(7);

</script>-->
<script type="text/javascript">
function cargar(){
    opener.location.reload();
    window.close();
}
</script>

</body>
</html>