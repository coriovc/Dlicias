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
require_once "../../controladores/compra.php";
$productos = listarProducto();
$categorias = listarCategorias();
$compras = listarCompra();

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
if(isset($_REQUEST['operacion-c']) && $_REQUEST['operacion-c']=='eliminar-c'){
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
                <a class="btn btn-purple btn-add tct mb-2 btn-block" href="javascript:popUp('Ingrediente_nuevo.php')">
                  <div class="btn-icon bg-light text-purple shadow mr-2">
                  <i class="material-icons-round icon-size-35">add_shopping_cart</i></div>Comprar Ingredientes</a>
              </div>
            </div>
        </div>
      </div>
         
      <div class="col-lg-8 col-xl-9 mb-4" data-aos="fade-up" data-aos-delay="1000">   
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active btn btn-white rounded-pill mx-2" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true"><span class="material-icons-round text-purple mr-2">egg</span>Ingredientes</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false"><span class="material-icons-round text-purple mr-2">shopping_cart</span>Compras</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false"><span class="material-icons-round text-purple mr-2">room_service</span>Servicios</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-white rounded-pill mx-2" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false"><span class="material-icons-round text-purple mr-2">view_cozy</span>Categorias</button>
          </li>
        </ul>

      <hr>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
              
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header justify-content-between">
                      <i class="material-icons-round grand text-purple">egg</i>
                        <h2 class="text-purple">Ingredientes</h2>
                        <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
                        <div class="mr-3">
                          <a class="btn btn-purple rounded-pill shadow" href="javascript:popUp_pdf('imprimir_ingredientes.php')">
                            <span class="material-icons-round mr-2">article</span>
                            <div class="font-weight-500 tct">Imprimir PDF</div>
                          </a>
                        </div>
                        <?php } ?>
                    </div>

                    <table class="table display" width="100%">
                       <thead class="text-purple bg-table-purple">
                      <tr>
                        <th>Nro</th>
                        <th>Código</th>
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
                            Stock - <?php echo $r['cantidad']?> <?php echo $r['und']; ?>
                            <br>
                            EV - <?php echo round($r['cantidad'] / $r['equivalencia_venta']); ?> <?php echo $r['und']; ?>
                            <br>
                            EQ - <?php echo sprintf("%.2f",$r['cantidad'] / ($r['equivalencia_venta'] * $r['equivalencia'])); ?> <?php echo $r['und_entrada']; ?>
                            </td>
                        <td><?php echo $r['precio_c']; ?>Bs</td>
                        <td><?php echo $r['precio_v']; ?>Bs</td>
                        <td>
                            <!--<a href="producto_edicion.php?operacion=modificar&id=<?=$r['id'] ?>"><button class="btn bg-purple" title="Modificar"><i class="fa fa-edit"></i></button></a>
                          <button type="button" class="btn btn-danger" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#modal-danger">
                                    <i class="fa fa-times"></i>
                                  </button>-->
                          <a class="btn btn-purple btn-icon btn-sm lift-img" title="Editar" 
                          href="javascript:popUp_producto('edit_ingrediente.php?operacion=modificar&id=<?=$r['id'] ?>')"><span class="material-icons-round">edit</span></a>
                          
                          <button class="btn btn-red btn-icon btn-sm lift-X-r" title="Eliminar" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#eliminar-ingrediente"><span class="material-icons-round">close</span></button>
                        </td>

                        
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>
              </div>

          </div>
          <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
              
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header justify-content-between">
                      <i class="material-icons-round grand text-purple">shopping_cart</i>
                        <h2 class="text-purple">Compras Realizadas</h2>
                        <div class="mr-3">
                          <a class="btn btn-purple rounded-pill shadow" href="javascript:popUp_pdf('imprimir_compras.php')">
                            <span class="material-icons-round mr-2">article</span>
                            <div class="font-weight-500 tct">Imprimir PDF</div>
                          </a>
                        </div>
                    </div>

                    <table class="table display" width="100%">
                      <thead class="text-purple bg-table-purple">
                      <tr>
                        <th>Nro</th>
                        <th>Fecha</th>
                        <th>Ingrediente</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Nro Factura</th>
                        <th>Acciones</th>
                      </tr>
                      </thead>
                      <tbody>
                    <?php 
                    $resultados = listarCompra();
                    foreach ($resultados as $key => $r){ ?>
                      <tr>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['fecha']; ?></td>
                        <td><?php echo $r['id_producto']; ?></td>
                        <td><?php echo $r['cantidad']; ?></td>
                        <td><?php echo $r['precio_c']; ?></td>
                        <td><?php echo $r['numero_factura']; ?></td>

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
          <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
              
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header justify-content-between">
                      <i class="material-icons-round grand text-purple">room_service</i>
                        <h2 class="text-purple">Servicios</h2>
                        <div class="mr-3">
                          <a class="btn btn-purple rounded-pill shadow" href="javascript:popUp_pdf('imprimir_servicios.php')">
                            <span class="material-icons-round mr-2">article</span>
                            <div class="font-weight-500 tct">Imprimir PDF</div>
                          </a>
                        </div>
                    </div>

                    <table class="table display" width="100%">
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
                          <!--<a class="btn btn-purple btn-icon btn-sm lift-img" title="Editar" href="servicios_edicion.php?operacion=modificar&id=<?=$r['id'] ?>&primeracarga"><span class="material-icons-round">edit</span></a>-->
                          
                          <a class="btn btn-red btn-icon btn-sm lift-X-r" title="Eliminar" href="#" ><span class="material-icons-round">close</span></a>
                        </td>
                        </td>
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>
              </div>

          </div>
          <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
              
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand text-purple">view_cozy</i>
                      
                        <h2 class="text-purple">Categorias</h2>
                    </div>

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
                          <a class="btn btn-purple btn-icon btn-sm lift-img" title="Editar" 
                          href="javascript:popUp_categoria('edit_categoria.php?operacion=modificar&id=<?=$r['id'] ?>')"><span class="material-icons-round">edit</span></a>
                          
                          <button class="btn btn-red btn-icon btn-sm lift-X-r" title="Eliminar" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#eliminar-categoria"><span class="material-icons-round">close</span></button>
                        </td>

                        
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>
              </div>

          </div>
        </div>

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
  <script type="text/javascript">
    function popUp_categoria(URL) {
        window.open(URL, 'Categoria', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=500,height=800,left=50,top=80');
    }
  </script>
  <script type="text/javascript">
    function popUp_producto(URL) {
        window.open(URL, 'Categoria', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=1500,height=800,left=0,top=80');
    }
  </script>
  <script type="text/javascript">
    function popUp_pdf(URL) {
        window.open(URL, 'Nombre de la ventana', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=900,height=800,left = 0,top = 50');
    }
  </script>
  <script>
    function eliminar(id_pedido) {
      //console.log(id_pedido+"--------");
      $("#id_pedido").val(id_pedido);
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
