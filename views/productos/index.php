<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>
<?php
require_once "../../controladores/producto.php";
require_once "../../controladores/unidad.php";

$unidades = listarUnidad();
?>
<?php
require_once "../../controladores/categoria.php";
require_once "../../controladores/producto.php";
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
 <?php 
require_once "../../controladores/servicio.php";
if(isset($_REQUEST['operacion']) && $_REQUEST['operacion']=='eliminar'){
  eliminarServicio();
  header("Location: URL");
}
 ?>
 <?php require_once "../../controladores/producto.php";
if(isset($_REQUEST['operacion']) && $_REQUEST['operacion']=='eliminar'){
  eliminarProducto();
  header("Location: index.php");
}
 ?>

  <?php require_once "../../controladores/categoria.php";
if(isset($_REQUEST['operacion']) && $_REQUEST['operacion']=='eliminar'){
  eliminarCategoria();
  header("Location: index.php");
}
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Productos</title>
  <!-- Estilos de esta pagina-->

</head>
<body onload="startTime()">
      <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_productos.php'); /* barra lateral y barra superior */
      ?>
  <header class="page-header bg-img-cover overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
    <div class="container" style="margin-top: 6rem;">
      <div class="row">
        <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
          <h1 class="display-3 tct text-white">Productos</h1>
          <i class="material-icons-round icon-head icon-animate">category</i>
        </div>
      </div>
    </div>
  </header>

  <section class="section-ajustes"> 
    <div class="container-fluid">
      <div class="row">
        
      <div class="col-lg-3 mb-4">
        <div class="card tct o-visible mb-4" data-aos="fade-right" data-aos-delay="200">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between" style="margin-left: -0.5rem;">
                  <h6 class="mb-0 text-white">Opciones</h6>
              </div>

              <div class="my-2">
                <a class="btn btn-purple btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-categoria">
                  <div class="btn-icon bg-light text-purple shadow mr-2">
                  <i class="material-icons-round icon-size-35">add</i></div>Nueva Categoria</a>

                <a class="btn btn-purple btn-add tct mb-2 btn-block" href="#" data-toggle="modal" data-target="#modal-ingrediente">
                  <div class="btn-icon bg-light text-purple shadow mr-2">
                  <i class="material-icons-round icon-size-35">add</i></div>Nuevo Ingrediente</a>

                <a class="btn btn-purple btn-add tct mb-2 btn-block" href="javascript:popUp('servicios_nuevo.php')">
                  <div class="btn-icon bg-light text-purple shadow mr-2">
                  <i class="material-icons-round icon-size-35">add</i></div>Nuevo Servicio</a>
              </div>
            </div>
        </div>
      </div>
        
        <div class="col-lg-8 col-xl-9 mb-4" data-aos="fade-up" data-aos-delay="1000">   
         <div class="section--center mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
          <div class="mdl-tabs__tab-bar mb-4 tct">
          
          <!--Ingredientes-->
            <a style="text-decoration:none" id="ingredientes" href="#seccion-1" class="mdl-tabs__tab purple is-active">          
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon purple btn-sm">restaurant_menu</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon purple btn-sm mr-2">restaurant_menu</span>Ingredientes
              </div>
            </a>   

          <!--Servicios-->  
            <a style="text-decoration:none" id="productos" href="#seccion-2" class="mdl-tabs__tab purple">
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon btn-sm purple">room_service</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon btn-sm purple mr-2">room_service</span>Servicios
              </div>
            </a>

          <!--Servicios-->  
            <a style="text-decoration:none" id="productos" href="#seccion-3" class="mdl-tabs__tab purple">
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon btn-sm purple">category</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon btn-sm purple mr-2">category</span>Categorias
              </div>
            </a>

          </div> 

          <div class="mdl-tabs__panel is-active" id="seccion-1">
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand text-purple">restaurant_menu</i>

                        <h2 class="text-purple">Ingredientes</h2>
                    </div>

                    <div class="table-responsive">
                    <table class="table" width="100%">
                       <thead class="text-purple bg-table-purple">
                      <tr>
                        <th>Nro</th>
                        <th>Código de Producto</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio de Compra</th>
                        <th>Precio de Venta</th>
                        <th>Acciones</th>
                      </tr>
                      </thead>
                        <tbody>
                    <?php 
                    $resultados = listarProducto();
                    foreach ($resultados as $key => $r){ ?>
                      <tr>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['codigo_pt']; ?></td>
                        <td><?php echo $r['nombre']; ?></td>
                        <td>
                          <?php echo sprintf("%.2f",$r['cantidad'] / ($r['equivalencia_venta'] * $r['equivalencia'])); ?><?php echo $r['und_entrada']; ?><br>
                          <?php echo round($r['cantidad'] / $r['equivalencia_venta']); ?> <?php echo $r['und']; ?><br>
                          <?php echo $r['cantidad'] /// $r['equivalencia_venta']; ?> <?php echo $r['und_consumo']; ?><br></td>
                        <td><?php echo $r['precio_c']; ?></td>
                        <td><?php echo $r['precio_v']; ?></td>
                        <td>
                            <!--<a href="producto_edicion.php?operacion=modificar&id=<?=$r['id'] ?>"><button class="btn bg-purple" title="Modificar"><i class="fa fa-edit"></i></button></a>
                          <button type="button" class="btn btn-danger" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#modal-danger">
                                    <i class="fa fa-times"></i>
                                  </button>-->
                          <a class="btn btn-purple btn-icon btn-sm lift-img" title="Editar" href="producto_edicion.php?operacion=modificar&id=<?=$r['id'] ?>"><span class="material-icons-round">edit</span></a>
                          
                          <button class="btn btn-red btn-icon btn-sm lift-X-r" title="Eliminar" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#eliminar-ingrediente"><span class="material-icons-round">close</span></button>
                        </td>

                        
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>
                    </div>
              </div>
          </div><!--fin de seccion 1-->

          <div class="mdl-tabs__panel" id="seccion-2"> 
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand text-purple">room_service</i>
                        <h2 class="text-purple">Servicios</h2>
                    </div>

                    <div class="table-responsive">
                    <table class="table" width="100%">
                      <thead class="text-purple bg-table-purple">
                      <tr>
                        <th>Nro</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Nombre de Categoria</th>
                        <th>Tiempo</th>
                        <th>Acciones</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php 
                    $resultados = listarServicio();
                    foreach ($resultados as $key => $r){ ?>
                      <tr>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['nombre']; ?></td>
                        <td><?php echo $r['precio']; ?></td>
                        <td><?php echo $r['nombrecategoria']; ?></td>
                        <td><?php if ($r['tiempo']>60) {
                          echo sprintf("%.2f",$r['tiempo']/60);
                          echo ' H';
                          
                        }
                       else{  echo $r['tiempo'];
                          echo ' min';
                       } ?>

                       </td>

                        <td>
                          <a class="btn btn-purple btn-icon btn-sm lift-img" title="Editar" href="servicios_edicion.php?operacion=modificar&id=<?=$r['id'] ?>&primeracarga"><span class="material-icons-round">edit</span></a>
                          
                          <a class="btn btn-red btn-icon btn-sm lift-X-r" title="Eliminar" href="#" ><span class="material-icons-round">close</span></a>
                        </td>
                        </td>
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>
                    </div>
              </div>
          </div> <!--fin de seccion 2-->

          <div class="mdl-tabs__panel" id="seccion-3">
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand text-purple">category</i>
                      
                        <h2 class="text-purple">Categorias</h2>
                    </div>

                    <div class="table-responsive">
                    <table class="table" width="100%">
                       <thead class="text-purple bg-table-purple">
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
                          <button class="btn btn-purple btn-icon btn-sm lift-img" title="Editar" href="#" data-toggle="modal" data-target="#modal-categoria-edit"><span class="material-icons-round">edit</span></button>
                          
                          <button class="btn btn-red btn-icon btn-sm lift-X-r" title="Eliminar" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#eliminar-categoria"><span class="material-icons-round">close</span></button>
                        </td>

                        
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>
                    </div>
              </div>
          </div><!--fin de seccion 1-->
        

         </div>
        </div> 
        
      </div>
    </div>
  </section> 
       
  <script type="text/javascript">
    function popUp(URL) {
        window.open(URL, 'Nombre de la ventana', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=600,height=800,left = 390,top = 50');
    }
  </script>
  <script>
    function eliminar(id_cita) {
      //console.log(id_cita+"--------");
      $("#id_cita").val(id_cita);
    }
  </script>
  <script>
  function eliminar(id_cate) {
    //console.log(id_cate+"--------");
    $("#id_cate").val(id_cate);
  }
</script>
<script>
  function modificar(id_modi) {
    //console.log(id_modi+"--------");
    $("#id_modi").val(id_modi);
  }
</script>
<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_logout.php');
include ('../../php/modal/modal_eliminar.php');
include ('../../php/modal/modal_add_producto.php'); 
?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
