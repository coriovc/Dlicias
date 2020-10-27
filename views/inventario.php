<?php
    /*session_start(); 
    if (empty($_SESSION['email']) or empty($_SESSION['password'])){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("location:index.php");
    }
    include('../controllers/controller-usuario.php');
    $l = UsuarioLog();
    if($l && count($l)){
    foreach ($l as $key => $value) {}
    }*/ 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include ('../php/head.php'); /* barra lateral y barra superior */
  ?>
  <title>Inventario</title>
</head>

<body onload="startTime()">
      <?php
      include ('../php/navbar.php');
      include ('../php/menu/menu_inventario.php'); /* barra lateral y barra superior */
      ?>
<section class="section-inv">
  <div class="container-fluid">
    <div class="section--center mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
      <div class="mdl-tabs__tab-bar mb-4 tct">
          <!--Ingredientes-->
            <a style="text-decoration:none" id="Perfil" href="#seccion-1" class="mdl-tabs__tab red is-active">          
              <div class="d-inline d-md-none">
                <span class="material-icons-round btn btn-icon red btn-sm">category</span>
              </div>
              <div class="d-none  d-md-inline">
                <span class="material-icons-round btn btn-icon red btn-sm mr-2">category</span>Stock de ingredientes
              </div>
            </a>    
      </div>  

      <div class="mdl-tabs__panel is-active" id="seccion-1">
              <div class="card mb-4 overflow-hidden">
                    <div class="card-header">
                      <i class="material-icons-round grand red">category</i>
                        <h2 class="red">Ingredientes</h2>
                    </div>

                    <div class="table-responsive">
                    <table class="table" width="100%">
                      <thead class="text-red bg-table-red">
                      <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Cantidad Disponible</th>
                        <th class="text-right">Acciones</th>
                      </tr>
                      </thead>                  
                      <tbody>
                          <tr>
                            <td>P1234</td>
                            <td>Producto</td>
                            <td>10</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">edit</span>Editar</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
                            </td>
                          </tr>
                          <tr>
                            <td>P1234</td>
                            <td>Producto</td>
                            <td>10</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">edit</span>Editar</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
                            </td>
                          </tr>
                          <tr>
                            <td>P1234</td>
                            <td>Producto</td>
                            <td>10</td>
                            <td align="right">
                              <a class="btn btn-purple rounded-pill btn-sm lift-img" href="#!"><span class="material-icons-round">edit</span>Editar</a>
                              <a class="btn btn-red rounded-pill btn-sm lift-X-r" href="#" ><span class="material-icons-round">close</span>Eliminar</a>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                    </div>
              </div>
          </div><!--fin de seccion 1-->
    </div>
  </div>
</section> 
<?php
/* footer */
include ('../php/footer.php'); 
/* scripts */
include ('../php/scripts.php');
/* Modales */
include ('../php/modal/modal_logout.php'); 
?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
