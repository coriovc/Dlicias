<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Dashboard</title>
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body onload="startTime(); mostrarsaludo()">  
     <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_dashboard.php');
      ?>

    <header class="page-header bg-img-cover-dash overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
        <div class="container text-left" style="margin-top: 6rem;">
          <div class="row">
            <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
                <h1 class="display-4 tct text-white"><strong id="txtsaludo"></strong><strong><?php echo $_SESSION['admin']['nombre']; ?></strong></h1>
                <p class="page-header-text text-white mb-0">Estamos para ayudarte</p>
                <i class="material-icons-round icon-head-dash icon-animate">emoji_people</i>
            </div>
          </div>
        </div>              
    </header>

        <div class="container">
            <div class="row" style="margin-top: -1.5rem; margin-bottom: 3rem;">
                <div class="dropdown no-caret" data-aos="fade-right" data-aos-delay="700">
                    <a class="btn btn-white rounded-pill shadow-lg dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/nocovwne.json"
                            trigger="loop"
                            delay="4000"
                            colors="primary:#151515,secondary:#f73636"
                            stroke="50"
                            scale="53"
                            style="width:40px;height:40px">
                        </lord-icon>
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

        

    <section class="dash-section" data-aos="fade-up" data-aos-delay="1000">
        <div class="container">
         <div class="row">
          <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?> 
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card bg-blue lift-img" href="../Venta/">
                  <div class="card-head"><span class="material-icons-round text-white">monetization_on</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-white">Venta Rapida</h3>
                          <p class="text-white">Realice una venta rapida</p><br>
                      </div>
                    </div>
                </a>
            </div>
           <?php } ?>
           <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="#" data-toggle="modal" data-target="#modal-registrar-entrada">
                  <div class="card-head"><span class="material-icons-round text-yellow">how_to_reg</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-yellow">Asistencia</h3>
                          <p>Registrar asitencia de hoy!</p>
                      </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="#" data-toggle="modal" data-target="#modal-ingrediente">
                  <div class="card-head"><span class="material-icons-round text-purple">add_circle_outline</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-purple">Ingrediente</h3>
                          <p>Agregar nuevo ingrediente</p>
                      </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../productos/">
                  <div class="card-head"><span class="material-icons-round text-purple">room_service</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-purple">Servicio</h3>
                          <p>Agregar nuevo Servicio</p>
                      </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../ventas/#seccion-2">
                  <div class="card-head"><span class="material-icons-round text-blue">person_add</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-blue">Cliente</h3>
                          <p>Agregar nuevo cliente</p>
                      </div>
                    </div>
                </a>
            </div>                  
            <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../empleados/">
                  <div class="card-head"><span class="material-icons-round text-green">people</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-green">Empleados</h3>
                          <p>Gestion de empleados</p>
                      </div>
                    </div>
                </a>
            </div>
            <?php } ?>

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../ayuda/">                  
                  <div class="card-head"><span class="material-icons-round text-yellow">help</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-yellow">Ayuda</h3>
                          <p>Manual de usuario y mas.</p>
                      </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-12 col-lg-2 my-4">
                <a class="card lift-img" href="../ajustes/">                  
                  <div class="card-head"><span class="material-icons-round text-red">settings</span></div>
                    <div class="card-body">
                      <div class="content">
                          <h3 class="text-red">Ajustes</h3>
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
              <img style="border-radius: 0.35rem;" class="d-block w-100" src="../../imagenes/fondo-d.png" width="50" alt="First slide">
                <div class="carousel-caption d-none tct text-white d-md-block">
                    <h5>hola amore como estas</h5>
                    <p>afasfasf</p>
                </div>
            </div>
            <div class="carousel-item">
              <img style="border-radius: 0.35rem;" class="d-block w-100" src="../../imagenes/fondo-d.png" width="50" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img style="border-radius: 0.35rem;" class="d-block w-100" src="../../imagenes/fondo-d.png" width="50" alt="Third slide">
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
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_dashboard.php'); 
include ('../../php/modal/modal_logout.php'); 
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
