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
    } */
?>
<!DOCTYPE html>
<html>
<head>
  <?php
  include ('../php/head.php');
  ?>
  <title>Ayuda</title>
</head>
<body onload="startTime()">
  
      <?php
      include ('../php/navbar.php');
      include ('../php/menu/menu_0.php'); /* barra lateral y barra superior */
      ?>
      <header class="page-header page-header-dark bg-img-cover overlay overlay-70" style="background-image: url(../imagenes/Hero_1.jpg); height: 55%;padding-top: 11rem;padding-bottom: 0;">
          <div class="container tct text-center">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h1 class="display-3 text-white">Centro de Ayuda</h1>
                <p class="text-white">Estamos aquí para ayudar. Explore nuestra base de conocimiento o contáctenos directamente.</p>
              </div>
            </div>
          </div>
                        
        <div class="svg-border-rounded text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
        </div>
      </header>

                    <section class="py-5">
                        <div class="container">
                            <div class="row features text-center mb-2">
                                <div class="col-lg-4 col-md-6 mb-5">
                                    <a class="card-dark card-link border-top border-top-lg border-blue border-bottom-0 border-left-0 border-right-0 lift-img" href="#!"
                                        ><div class="card-body p-5">
                                            <div class="icon-stack icon-stack-lg bg-blue-soft text-blue mb-4"><span class="material-icons-round" style="font-size: 3rem;">person_pin</span></div>
                                            <h6 class="text-blue">Cuenta</h6>
                                            <p class="text-white">Problemas con el inicio de sesion, cierre de sesion, errores con su cuenta.</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent"><div class="badge badge-pill badge-light font-weight-normal ">5 Entradas</div></div></a
                                    >
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5">
                                    <a class="card-dark card-link border-top border-top-lg border-green border-bottom-0 border-left-0 border-right-0 h-100 lift-img" href="#!"
                                        ><div class="card-body p-5">
                                            <div class="icon-stack icon-stack-lg bg-green-soft text-green mb-4"><span class="material-icons-round" style="font-size: 3rem;">query_builder</span></div>
                                            <h6 class="text-green">Preguntas Frecuentes</h6>
                                            <p class="text-white">Encuentre su pregunta.</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent"><div class="badge badge-pill badge-light font-weight-normal">2 Entradas</div></div></a
                                    >
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5">
                                    <a class="card-dark card-link border-top border-top-lg border-yellow border-bottom-0 border-left-0 border-right-0 h-100 lift-img" href="#!"
                                        ><div class="card-body p-5">
                                            <div class="icon-stack icon-stack-lg bg-yellow-soft text-yellow mb-4"><span class="material-icons-round" style="font-size: 3rem;">query_builder</span></div>
                                            <h6 class="text-yellow">Facturacion</h6>
                                            <p class="text-white">Problemas con pagos, o la facturacion.</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent"><div class="badge badge-pill badge-light font-weight-normal">14 entradas</div></div></a
                                    >
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                                    <a class="card-dark card-link border-top border-top-lg border-purple border-bottom-0 border-left-0 border-right-0 h-100 lift-img" href="#!"
                                        ><div class="card-body p-5">
                                            <div class="icon-stack icon-stack-lg bg-purple-soft text-purple mb-4"><span class="material-icons-round" style="font-size: 3rem;">query_builder</span></div>
                                            <h6 class="text-purple">Privilegios</h6>
                                            <p class="text-white">Configuracion de privilegios de ususarios.</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent"><div class="badge badge-pill badge-light font-weight-normal">17 Entradas</div></div></a
                                    >
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                                    <a class="card-dark card-link border-top border-top-lg border-red border-bottom-0 border-left-0 border-right-0 h-100 lift-img" href="#!"
                                        ><div class="card-body p-5">
                                            <div class="icon-stack icon-stack-lg bg-red-soft text-red mb-4"><span class="material-icons-round" style="font-size: 3rem;">query_builder</span></div>
                                            <h6 class="text-red">Actividad</h6>
                                            <p class="text-white">Incovenientes al mostrar informacion edel sistema.</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent"><div class="badge badge-pill badge-light font-weight-normal">7 Entradas</div></div></a
                                    >
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                                    <a class="card-dark card-link border-top border-top-lg border-teal border-bottom-0 border-left-0 border-right-0 h-100 lift-img" href="#!"
                                        ><div class="card-body p-5">
                                            <div class="icon-stack icon-stack-lg bg-teal-soft text-teal mb-4"><span class="material-icons-round" style="font-size: 3rem;">query_builder</span></div>
                                            <h6 class="text-teal">Personalizacion</h6>
                                            <p class="text-white">Cree nuevos modulos al sistema.</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent"><div class="badge badge-pill badge-light font-weight-normal">1 entrada</div></div></a
                                    >
                                </div>
                            </div><br><br>

                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center text-white">
                                    <h2>¿No encuentras la respuesta que necesitas?</h2>
                                    <p class="lead mb-5">Contáctanos y te responderemos lo antes posible con una solución a cualquier problema que tengas con Ocor-Admin.</p>
                                </div>
                            </div>
                            <div class="row align-items-center mb-10 text-white">
                                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                                    <div class="section-preheading">Mensaje con nosotros</div>
                                    <a href="#!">¡Iniciar una conversación!</a>
                                </div>
                                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                                    <div class="section-preheading">Llamar en cualquier momento</div>
                                    <a href="#!">+58 (412) 478-4959</a>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <div class="section-preheading">Envíenos un correo electrónico</div>
                                    <a href="#!">support@ocor.com</a>
                                </div>
                            </div>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6"><label class="text-white" for="inputName">Nombre completo</label><input class="form-control dark py-4" id="inputName" type="text" placeholder="Nombre completo" /></div>
                                    <div class="form-group col-md-6"><label class="text-white" for="inputEmail">Correo</label><input class="form-control dark py-4" id="inputEmail" type="email" placeholder="nombre@ocor.com" /></div>
                                </div>
                                <div class="form-group"><label class="text-white" for="inputMessage">Mensaje</label><textarea class="form-control dark py-3" id="inputMessage" type="text" placeholder="Ingrese su mensaje..." rows="4"></textarea></div>
                                <div class="text-center"><button class="btn btn-primary btn-marketing rounded-pill mt-4" type="submit">Enviar Peticion</button></div>
                            </form>
                        </div>
                    </section>
               
            
<footer class="bg-gradient-primary-to-secondary tct py-3"><!-- Footer -->
  <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row">
  <div class="d-flex align-content-center align-items-sm-left"><!-- Grid row-->
        
        <div class="d-inline d-md-none">
        <a class="btn btn-sm btn-transparent-light btn-icon ml-2" id="footer-home" href="../home.php">
          <span class="material-icons-round">home</span></a>
        </div>
        <div class="d-none  d-md-inline">
          <a class="btn btn-sm btn-transparent-light rounded-pill ml-2" href="../home.php">
          <span class="material-icons-round mr-2">home</span>Home</a>
        </div>

        <div class="d-inline d-md-none">
        <a class="btn btn-sm btn-transparent-light btn-icon ml-2" id="footer-Dashboard" href="dashboard.php">
          <span class="material-icons-round">view_carousel</span></a>
        </div>
        <div class="d-none  d-md-inline">
          <a class="btn btn-sm btn-transparent-light rounded-pill ml-2" href="dashboard.php">
          <span class="material-icons-round mr-2">view_carousel</span>Dashboard</a>
        </div>
        
        <div class="d-inline d-md-none">
        <a class="btn btn-sm btn-transparent-light btn-icon ml-2" id="footer-app" href="#!">
          <span class="material-icons-round">android</span></a>
        </div>
        <div class="d-none  d-md-inline">
          <a class="btn btn-sm btn-transparent-light rounded-pill ml-2" href="#!">
          <span class="material-icons-round mr-2">android</span>App</a>
        </div>

        <div class="d-inline d-md-none">
        <a class="btn btn-sm btn-transparent-light btn-icon ml-2" id="footer-info" href="info.php">
          <span class="material-icons-round">info</span></a>
        </div>
        <div class="d-none  d-md-inline">
          <a class="btn btn-sm btn-transparent-light rounded-pill ml-2" href="info.php">
          <span class="material-icons-round mr-2">info</span>Informacion</a>
        </div>

        <div class="d-inline d-md-none">
        <a class="btn btn-sm btn-transparent-light btn-icon ml-2" id="footer-ayuda" href="ayuda.php">
          <span class="material-icons-round">help</span></a>
        </div>
        <div class="d-none  d-md-inline">
          <a class="btn btn-sm btn-transparent-light rounded-pill ml-2" href="ayuda.php">
          <span class="material-icons-round mr-2">help</span>Ayuda</a>
        </div>

        <div class="d-inline d-md-none">
        <a class="btn btn-sm btn-transparent-light btn-icon ml-2" id="footer-t&c" href="javascript:newVentana('error-404.php')">
          <span class="material-icons-round">wysiwyg</span></a>
        </div>
        <div class="d-none  d-md-inline">
          <a class="btn btn-sm btn-transparent-light rounded-pill ml-2" href="javascript:newVentana('error-404.php')">
          <span class="material-icons-round mr-2">wysiwyg</span>Terminos & Condiciones</a>
        </div>

        <script language=javascript>function newVentana (url){window.open(url, "Terminos y Condiciones", "width=800, height=500")}</script>

  </div><!-- fin row-->
  <div align="right" class="mr-4">
        <div class="text-center">
          <!-- Facebook -->
          <a class="btn btn-transparent-light btn-icon" href="#">
            <i class="fab text-white fa-facebook-f fa-lg"></i>
          </a>
          <!-- Twitter -->
          <a class="btn btn-transparent-light btn-icon" href="#">
            <i class="fab text-white fa-twitter fa-lg"></i>
          </a>
          <!--Instagram-->
          <a class="btn btn-transparent-light btn-icon" href="#">
            <i class="fab text-white fa-instagram fa-lg"></i>
          </a> 
        </div>
    </div>
  </div>
  <div class="d-flex align-content-center align-items-sm-left ml-4 text-white py-3">Designed by Codes by Ocor © 2020 Copyright :
    <strong><a class="ml-2 text-white" href="https://sites.ocor.com/">Ocor.com</a></strong>
  </div>
</footer><!-- fin de Footer -->
<div class="d-inline d-md-none">
<div class="mdl-tooltip tct" data-mdl-for="footer-Dashboard">Dashboard</div>
<div class="mdl-tooltip tct" data-mdl-for="footer-home">Home</div>
<div class="mdl-tooltip tct" data-mdl-for="footer-app">App</div>
<div class="mdl-tooltip tct" data-mdl-for="footer-t&c">Terminos & Condiciones</div>
<div class="mdl-tooltip tct" data-mdl-for="footer-info">Acerca</div>
<div class="mdl-tooltip tct" data-mdl-for="footer-ayuda">Ayuda</div>
</div>
</footer><!-- fin de Footer -->
       
        
<?php
/* scripts */
include ('../php/scripts-1.php');
/* Modales */
include ('../php/modal/modal_logout.php'); 
?>
<script src="../js/scripts.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>