<?php 
require_once "../../controladores/producto.php";
$productos = listarProducto(); 

if(isset($_POST["id_producto"])){
  if(isset($_SESSION["compras"][$_POST["id_producto"]])){
    $_SESSION["compras"][$_POST["id_producto"]]['cantidad'] += intval($_POST["cantidad"]);
  }
  else{
    $_REQUEST["id"] = $_POST["id_producto"];
    $producto = buscarProducto();
    if($producto){
      $_SESSION["compras"][$_POST["id_producto"]] = [
        "nombre" => $producto["nombre"],
        "cantidad" => $_POST["cantidad"],
        "precio_c" => $producto["precio_c"],
        "unidad" => $producto["unidad"]
      ];
    }
  }
}
elseif(isset($_GET["remover"])){
  unset($_SESSION["compras"][$_GET["remover"]]);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Nueva Compra</title>
  <!-- Estilos de esta pagina-->
</head>
<body>
    
    <header class="page-header bg-img-cover" style="background: rgb(1,76,255);background: linear-gradient(90deg, rgba(1,76,255,1) 0%, rgba(0,168,255,1) 100%);">
    <div class="container" style="margin-top: 6rem;">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-3 tct text-white">Compra de Ingrediente</h1>
        </div>
      </div>
    </div>
    </header>

    
      <div class="row">
        <div class="col-lg-12 mb-4">
        <div class="card card-bor mb-4 mx-3" style="margin-top: -1rem;">
        
          <form  method="POST" name="form"  action="ingre_nuevo.php" >

        <div class="card-body">
            <div class="form-group row">           
                  
                <div class="col-12 col-lg-6 mb-2">
                    <label><strong>Ingrediente *</strong></label>
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
                <div class="col-12 col-lg-4 mb-2">
                    <label><strong>Cantidad *</strong></label>
                    <input type="tel" name="cantidad" id="cantidad_carrito" maxlength="10" class="form-control form-control-solid" placeholder="Ejem: (5)" required="required">
                </div>

                <div class="col-2 col-lg-2" style="margin-top: auto;">
                <button class="btn btn-green" name="guardar" value="Cargar datos" title="Agregar">Agregar</button></div>


              <div id="carritotabla" class="col-12 my-2">
                <table id="example2" class="table table-bordered table-hover">       
                    <thead>
                    <tr>
                      <th>Producto</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Monto</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $total = 0;
                    if(isset($_SESSION["compras"]) && is_array($_SESSION["compras"]) && count($_SESSION["compras"])){
                      foreach($_SESSION["compras"] as $id_producto => $elemento){
                    $total = $total + intval($elemento['cantidad']) * intval($elemento['precio_c']);
                       ?>
                        <tr>
                          <td><?=$elemento['nombre']?></td>
                          <td><?=$elemento['precio_c']?> Bs. S.</td>
                          <td><?=$elemento['cantidad']?> <?=$elemento['unidad']?> </td>
                          <td><?=intval($elemento['cantidad']) * intval($elemento['precio_c']) ?></td>
                          <td><span onclick="window.location='ingre_nuevo.php?remover=<?=$id_producto ?>';">&times;</span></td>
                        </tr>
                      <?php }
                      } ?>            
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td><?= $total; ?>$</td>
                      </tr>
                    </tbody>
                </table>
              </div>
        </form>
        <form action="ingre_guardar.php" method="post"class="col-12 my-2">
                  
                  <div class="col-12 col-lg-6 mb-2">
                    <label><strong>Fecha</strong></label>
                    <input type="date"  name="fecha" id="fecha" onchange="$('#escondido2').val(this.value); llamado();" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" class="form-control form-control-solid" placeholder="ejmpl:12/12/2019" readonly title="Ingrese la Fecha">
                  </div>
                  <div class="col-12 col-lg-6 mb-2">
                    <label><label for="factura"> Dieron factura?</label>
                    <input type="checkbox" name="dieronfactura" id="dieronfactura" onchange="if(this.checked){ jQuery('#numerofactura').css('display','inline').attr('required','required');  }else{ jQuery('#numerofactura').css('display','none').removeAttr('required');}" >
                    <input type="number" class="form-control form-control-solid" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=10;" title="Ingrese la Factura" name="numerofactura" id="numerofactura" style="display: none;">
                  </div>
                  
                  <small class="mt-2 ml-2">(*)Campos Obligatorios</small>
                  </div>
                  <div class="modal-footer tct">
                    <input type="hidden" name="operacion" value="guardar">     
                      <!--<button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>-->
                      <button type="submit" id="toastBasicTrigger" name="guardar" title="Comprar" class="btn btn-success">Comprar</button>
                  </div>
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