<!--<?php
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
?>-->
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include ('../php/head.php');
  ?>
  <title>Dashboard</title>
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body onload="startTime(); mostrarsaludo()">  
     <?php
      include ('../php/navbar.php');
      include ('../php/menu/menu_dash.php');
      ?>

    <header class="page-header bg-img-cover overlay overlay-30" style="background-color: #000;">
        <div class="container text-center" style="margin-top: 6rem;">
          <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 tct text-white"><strong id="txtsaludo"></strong><strong><!--<?php echo " " .$value->nombre ." " . $value->apellido; ?>-->Victor</strong></h1>
                <p class="page-header-text text-white mb-0">Estamos para ayudarte</p>
            </div>
          </div>
        </div>
                        
      <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
      </div>
    </header>

        <div class="container text-center">
            <div class="row justify-content-center" style="margin-top: -1.5rem; margin-bottom: 3rem;">
                <div class="dropdown no-caret">
                    <a class="btn btn-white rounded-pill shadow-lg dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons-outlined">description</i>&nbsp;&nbsp;
                    <div class="font-weight-500">Generar Informe</div>
                    <i class="fas fa-chevron-right dropdown-arrow"></i></a>
                    
                    <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#!">Ultimos 30 dias</a>
                            <a class="dropdown-item" href="#!">Semana Pasada</a>
                            <a class="dropdown-item" href="#!">Este Año</a>
                            <a class="dropdown-item" href="#!">Ayer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Personalizar</a>
                    </div>
                </div>          
            </div>
        </div>

        

    <section class="dash-section">
        <div class="container">
         <div class="row">

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="error-404.php">
                    <div class="card-body">
                      <div class="content">
                          <img src="../imagenes/icon/008-credit card.svg" width="45">
                          <h3 class="text-blue">Venta Rapida</h3>
                          <p>Realice una venta rapida</p><br>
                      </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="productos.php">
                    <div class="card-body">
                      <div class="content">
                          <img src="../imagenes/icon/017-coin.svg" width="45">
                          <h3 class="text-yellow">Productos</h3>
                          <p>Agrega nuevos ingredientes y productos</p>
                      </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="empleados.php">
                    <div class="card-body">
                      <div class="content">
                          <img src="../imagenes/icon/007-group.svg" width="45">
                          <h3 class="text-green">Empleados</h3>
                          <p>Problemas con pagos, o la facturacion.</p>
                      </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="ajustes.php">
                    <div class="card-body">
                      <div class="content">
                          <img src="../imagenes/icon/019-rating.svg" width="45">
                          <h3 class="text-purple">Privilegios</h3>
                          <p>Configuracion de privilegios de ususarios.</p>
                      </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="#!">
                    <div class="card-body">
                      <div class="content">
                          <img src="../imagenes/icon/049-checked.svg" width="45">
                          <h3 class="text-red">Mi Actividad</h3>
                          <p>Revisa tus ultimos movimientos.</p>
                      </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="ajustes.php">
                    <div class="card-body">
                      <div class="content">
                          <img src="../imagenes/icon/002-settings.svg" width="45">
                          <h3 class="text-blue">Ajustes</h3>
                          <p>Usuario, Mantenimiento, Bitacora, Papelera</p>
                      </div>
                    </div>
                </a>
            </div>
        </div>
        </div>     
    </section>
<br>

   <!--<script>
      $(document).ready(function()
      {
         $("#modalbienvenida").modal("show");
      });
    </script>-->


<div class="modal fade filter-foster" id="modalbienvenida" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" aria-live="assertive" aria-atomic="true" data-delay="10000">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img style="border-radius: 0.35rem;" class="d-block w-100" src="../imagenes/13.jpg" width="50" alt="First slide">
                <div class="carousel-caption d-none tct text-white d-md-block">
                    <h5>hola amore como estas</h5>
                    <p>afasfasf</p>
                </div>
            </div>
            <div class="carousel-item">
              <img style="border-radius: 0.35rem;" class="d-block w-100" src="../imagenes/16.jpg" width="50" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img style="border-radius: 0.35rem;" class="d-block w-100" src="../imagenes/30.jpg" width="50" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="material-icons-round">chevron_left</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="material-icons-round">chevron_right</span>
          </a>
        </div>
    </div>
    </div>
    <div class="row justify-content-center">
        <a href="#" data-dismiss="modal" class="tct btn btn-sm shadow shadow-lg rounded-pill btn-light">
        <strong>Entendido</strong> <i class="material-icons-round">arrow_right</i></a>
    </div>
</div>




<?php
/* footer */
include ('../php/footer.php'); 
/* scripts */
include ('../php/scripts.php');
/* Modales */
include ('../php/modal/modal_logout.php'); 
?>

<script type="text/javascript">
        function mostrarsaludo(){
          fecha = new Date(); 
          hora = fecha.getHours();
          if(hora >= 0 && hora < 12){
            texto = "Buenos Días ";}          
          if(hora >= 12 && hora < 18){
            texto = "Buenas Tardes ";}
          if(hora >= 18 && hora < 24){
            texto = "Buenas Noches ";}
          document.getElementById('txtsaludo').innerHTML = texto;}
</script>
</body>
</html>
