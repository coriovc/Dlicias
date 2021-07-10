<?php
require_once "../../controladores/clientes.php";

$cliente = buscarCliente(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Cliente | <?= $cliente['nombre']?></title>
  <!-- Estilos de esta pagina-->

</head>
<body onload="startTime()">
      <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_ventas.php'); /* barra lateral y barra superior */
      ?>
  <header class="page-header bg-img-cover overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
  <div class="container" style="margin-top: 6rem;">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-3 tct text-white">Cliente</h1>
      </div>
    </div>
  </div>
  </header>

  <div class="container">
            <div class="row" style="margin-top: -1.5rem; margin-bottom: 3rem;">
                <div class="dropdown no-caret">
                    <a class="btn btn-white rounded-pill shadow-lg"href="../ventas">
                    <i class="material-icons-outlined">arrow_back</i>
                    <div class="font-weight-500">Volver</div></a>
                </div>          
            </div>
        </div>

  <section class="section-clientes"> 
    <div class="container-fluid">
      <div class="row justify-content-end">
        
      <div class="col-lg-9 mb-4 col-12">
          <div class="card o-visible mb-4 mt-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-12">
                    <h6>Nombre y Apellido</h6>
                    <h4><?= $cliente['nombre']?></h4>
                  </div>

                  <div class="col-lg-2 col-12" >
                    <h6>Codigo</h6>
                    <h4><?= $cliente['id']?></h4>
                  </div>
                  
                  <div class="col-lg-5 col-12" >
                    <h6>cedula</h6>
                    <h4><?= $cliente['identificacion']?></h4>
                  </div>

                  <div class="col-lg-4 col-12">
                    <h6>Correo</h6>
                    <h4><?= $cliente['correo']?></h4>
                  </div>
                  <div class="col-lg-4 col-12">
                    <h6>Telefono</h6>
                    <h4><?= $cliente['telefono']?></h4>
                  </div>
                  <div class="col-lg-12 col-12">
                    <h6>Direccion</h6>
                    <h4><?= $cliente['direccion']?></h4>
                  </div>
                </div>

                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
       
<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_logout.php');
include ('../../php/modal/modal_ventas.php'); 
?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
