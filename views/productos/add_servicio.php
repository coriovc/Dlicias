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

     <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 align="center" class="box-title">Datos del Servicio</h3>

    <form  method="POST" name="form"  action="servicios_nuevo.php" >
                
                <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Producto</span></label>
              <select onchange="llamado( $(this).val() );" class="form-control select2" name="id_producto" required="required" title="Seleccione un Producto" style="width: 100%;">
          <?php
          for ($i=0; $i < count($productos); $i++){ 
            ?>
            <option value="<?=$productos[$i]['id'] ?>"><?= $productos[$i]['nombre'] ?> </option>
          <?php
          }
          ?>
          </select>
          </div>
        </div>
                <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Cantidad (<span class="unidadesc"></span>)</span></label>
                  <input type="text" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" pattern="|[0-9]+(\.[0-9]+)?|" name="cantidad" id="cantidad_carrito" class="form-control" title="Ingrese la Cantidad" placeholder="20" required="required">
        </div>
        </div>

        <p align="center"><button name="guardar" value="Cargar datos" class="btn bg-blue" title="Agregar"><i class="fa fa-plus"></i> <span>Agregar</span></button></p>
       <div id="carritotabla">
           <table class="table table-bordered table-hover">       
            <thead>
            <tr>
              <th>Producto</th>
              <th>Cantidad</th>
              <th></th>
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
      <td><?=$elemento['cantidad']?> <?=$elemento['unidad']?></td> 
      <td><span onclick="window.location='servicios_nuevo.php?remover=<?=$id_producto ?>';">&times;</span></td>
    </tr>
  <?php }
  } ?>            
            </tbody>
          </table>
         </div>
</form>
    <form  method="POST" name="form"  action="servicios_guardar.php" >
        <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Código de Servicio</span></label>
                  <input type="text" name="codigo_s" title="Código del Producto" readonly="readonly" class="form-control" required="required" value="<?php
$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: video-g6swmAP8X5VG4jCi.mp4
echo 'SR'.substr(str_shuffle($permitted_chars), 0, 5);
 
?>">
        </div>
        </div>
                <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Nombre de Servicio</span></label>
                  <input type="text" name="nombre" maxlength="20" class="form-control"  placeholder="Ingrese Nombre del Servicio" required="required">
        </div>
        </div>
                <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Categoría</span></label>
              <select class="form-control select2" name="id_categoria" required="required" title="Seleccione una Categoría" style="width: 100%;">
          <?php
          for ($i=0; $i < count($categorias); $i++) { 
            ?>
            <option value="<?=$categorias[$i]['id'] ?>"><?= $categorias[$i]['nombre'] ?></option>
          <?php
          }
          ?>
          </select>
          </div>
        </div>
                <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Precio</span></label>
                  <input type="text" name="precio" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=10;" title="Ingrese el Precio" class="form-control" placeholder="12.000bs" required="required">
        </div>
        </div>
                <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Tiempo</span></label>
                  <input type="number" min="30" max="180" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=2;" name="tiempo" title="Ingrese el tiempo" class="form-control" placeholder="90" required="required">
        </div>
        </div>              <div class="box-footer">
              <p align="center">(*) Campos Obligatorios</p>
               <p align="center"><button type="submit" name="guardar" title="Guardar" value="Cargar datos" class="btn bg-green"><i class="fa fa-send"></i> <span>Guardar</span> </button>
                <input type="hidden" name="operacion" value="guardar">
                 <button type="reset" class="btn bg-red" title="Eliminar"><i class="fa  fa-remove"></i><span> Eliminar</span> </button></p>
        
              </div>
</form>
</section>

<script type="text/javascript">
function cargar(){
    opener.location.reload();
    window.close();
}
</script>