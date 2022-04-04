<div class="modal fade" id="modal-categoria" tabindex="-1" role="dialog" aria-labelledby="modal-categoria" aria-hidden="true">
  <div class="modal-dialog modal-lg-2 modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Registrar Nueva Categoria</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>
      <?php
        require_once "../../controladores/categoria.php";
      ?>
      <form class="modal-body" method="POST" name="form"  action="categorias_guardar.php" >                     
          <fieldset>
            <div class="form-group row">   
              <div class="col-12 col-lg-12 mb-2">
                <label><strong>Nombre de la categoria*</strong></label>
                <input type="text" name="nombre" maxlength="10" class="form-control" maxlength="10" title="Ingrede el Nombre de la Categoría" placeholder="Ejem: Reposteria" required="required">
              </div>
            </div>            
          </fieldset>          
        <small>(*)Campos Obligatorios</small>
        <div class="modal-footer tct">        
          <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>
          <button type="submit" id="toastBasicTrigger" name="guardar" title="Agregar" class="btn btn-success">Agregar</button>
          <input type="hidden" name="operacion" value="guardar">
        </div>
      </form>            
      
    </div>
  </div>
</div>




<div class="modal fade" id="modal-ingrediente" tabindex="-1" role="dialog" aria-labelledby="modal-ingrediente" aria-hidden="true">
  <div class="modal-dialog modal-xl shadow-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Agregar Nuevo Ingrediente</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>

      <form class="modal-body" autocomplete="off" method="POST" name="form"  action="producto_guardar.php">                     
          <fieldset>
            <div class="form-group row">   
              <div class="col-12 col-lg-3 mb-2">
                <label><strong>codigo*</strong></label>
                <input type="txt" class="form-control" readonly="readonly" name="codigo_pt" title="Código del Producto" placeholder="codigo" required  value="<?php
                $permitted_chars = '0123456789';
                // Output: video-g6swmAP8X5VG4jCi.mp4
                echo 'PRO'.substr(str_shuffle($permitted_chars), 0, 5);
                 
                ?>">
              </div>

              <div class="col-12 col-lg-9 mb-2">
                <label><strong>Nombre del Ingrediente*</strong></label>
                <input type="txt" class="form-control" name="nombre" maxlength="20" title="Ingrese el Producto" placeholder="Ejem (Producto)" required>
              </div>

              <div class="col-12 col-lg-2 mb-2">
                <label><strong>Cantidad actual*</strong></label>
                  <input type="number" name="cantidad" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" class="form-control" title="Ingrese la Cantidad" placeholder="05" required="required">
              </div>

              <div class="col-12 col-lg-5 mb-2">
                <label><strong>Precio de Compra (UNIDAD)*</strong></label>
                  <input type="text" id="precio_c" name="precio_c" title="Ingrese el Precio" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=10;" class="form-control preci" placeholder="5.000 $"required="required">
              </div>

              <div class="col-12 col-lg-5 mb-2">
                <label><strong>Precio de Venta (UNIDAD)*</strong></label>
                  <input type="text" id="precio_v" name="precio_v"  title="Ingrese el precio" class="form-control preci"  placeholder="3.000 $"required="required">
              </div>

              <div class="col-12 col-lg-4 mb-2">
                <label><strong>Unidad de entrada*</strong></label>
                <select id="id_unidad_entrada"class="form-control select2" onchange="$('.unidadese').html(this.options[this.selectedIndex].label);" name="id_unidad" required="required" title="Seleccione una Unidad" style="width: 100%;">
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
                <select class="form-control select2"id="id_unidad_consumo" onchange="$('.unidadesc').html(this.options[this.selectedIndex].label);" name="id_unidadconsumo" required="required" title="Seleccione una Unidad" style="width: 100%;">
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
                <select class="form-control select2" id="id_unidad_venta" onchange="$('.unidadesv').html(this.options[this.selectedIndex].label);" name="id_unidadventa" required="required" title="Seleccione una Unidad" style="width: 100%;">
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
                  <input id="id_stock_minimo"type="number" onchange="if(parseInt($(this).val()) > parseInt($('#stock_max').val()) ){alert('Error, el minimo no puede ser mayor al maximo');  $(this).val('');}" min="0" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" name="stock_min" class="form-control" id="stock_min" title="Ingrese el Stck Minimo" placeholder="20" required="required">
                </div>

                <div class="col-12 col-lg-3">
                  <label><strong>Stock MAX.</strong></label>
                  <input id="id_stock_maximo" type="number" min="0"  name="stock_max" onchange="if(parseInt($(this).val()) < parseInt($('#stock_min').val()) ){alert('Error, el maximo no puede ser menor al minimo'); $(this).val('');}" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" title="Ingrese el Stock Maximo" id="stock_max" class="form-control"  placeholder="20"required="required">
                </div>

              <div class="col-12 col-lg-3 mb-2">
                <label><strong>Equivalencia de venta*</strong></label>
                  <input id="equivalencia_venta" type="number" min="1" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=7;" name="equivalencia_venta" onchange="if(parseInt($(this).val()) < parseInt($('#stock_min').val()) ){alert('Error, el maximo no puede ser menor al minimo'); $(this).val('');}" class="form-control" title="Ingrese la Equivalencia" placeholder="20"required="required">
              </div>

              <div class="col-12 col-lg-3 mb-2">
                <label><strong>Equivalencia*</strong></label>
                  <input id="equivalencia" type="number" min="1" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=7;" name="equivalencia" onchange="if(parseInt($(this).val()) < parseInt($('#stock_min').val()) ){alert('Error, el maximo no puede ser menor al minimo'); $(this).val('');}" class="form-control"  placeholder="20"required="required" title="Ingrese la Equivalencia">
              </div>
              
              </div>
              
          </fieldset>
      <small>(*)Campos Obligatorios</small>
      <div class="modal-footer tct">        
        <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>
        <button type="submit" name="guardar" title="Guardar" id="toastBasicTrigger" class="btn btn-success">Agregar</button>
        <input type="hidden" name="operacion" value="guardar">
      </div>
      </form>            
      
    </div>
  </div>
</div>
<script type="text/javascript">
      $(".preci").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});
</script>

