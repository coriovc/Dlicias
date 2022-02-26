<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>
<!DOCTYPE html>
<html>
<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Ayuda</title>
</head>
<body onload="startTime()">
  
      <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_ayuda.php'); /* barra lateral y barra superior */
      ?>
    <header class="page-header bg-img-cover" style="background: rgb(219,114,0);background: linear-gradient(90deg, rgba(219,114,0,1) 0%, rgba(255,172,88,1) 100%);">
    <div class="container" style="margin-top: 6rem;">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-3 tct text-white">Ayuda</h1>
          <i class="material-icons-round icon-head icon-animate">help</i>
        </div>
      </div>
    </div>
    </header>

                    <section class="py-5">
                        <div class="container">
                            <div class="row features text-center mb-2">
                                <div class="col-lg-4 col-md-6 mb-5">
                                    <a class="card card-link border-top border-top-lg border-blue border-bottom-0 border-left-0 border-right-0 lift-img" href="#!"
                                        ><div class="card-body">
                                            <div class="icon-stack icon-stack-lg bg-blue-soft text-blue"><span class="material-icons-round" style="font-size: 3rem;">person_pin</span></div>
                                            <h6 class="text-blue">Manual de Usuario</h6>
                                            <p class="">Problemas con el inicio de sesion, cierre de sesion, errores con su cuenta.</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent"><div class="btn btn-blue rounded-pill font-weight-normal">Descargar</div></div></a
                                    >
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5">
                                    <a class="card card-link border-top border-top-lg border-green border-bottom-0 border-left-0 border-right-0 h-100 lift-img" href="#!"
                                        ><div class="card-body">
                                            <div class="icon-stack icon-stack-lg bg-green-soft text-green"><span class="material-icons-round" style="font-size: 3rem;">query_builder</span></div>
                                            <h6 class="text-green">Preguntas Frecuentes</h6>
                                            <p class="">Encuentre su pregunta.</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent"><div class="badge badge-pill badge-light font-weight-normal">2 Entradas</div></div></a
                                    >
                                </div>
                                <div class="col-lg-4 col-md-6 mb-5">
                                    <a class="card card-link border-top border-top-lg border-yellow border-bottom-0 border-left-0 border-right-0 h-100 lift-img" href="#!"
                                        ><div class="card-body">
                                            <div class="icon-stack icon-stack-lg bg-yellow-soft text-yellow"><span class="material-icons-round" style="font-size: 3rem;">query_builder</span></div>
                                            <h6 class="text-yellow">Facturacion</h6>
                                            <p class="">Problemas con pagos, o la facturacion.</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent"><div class="badge badge-pill badge-light font-weight-normal">14 entradas</div></div></a
                                    >
                                </div>
                                
                            </div><br><br>

                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center ">
                                    <h2>¿No encuentras la respuesta que necesitas?</h2>
                                    <p class="lead mb-5">Contáctanos y te responderemos lo antes posible con una solución a cualquier problema que tengas con Ocor-Admin.</p>
                                </div>
                            </div>
                            <div class="row align-items-center mb-10 ">
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
                                    <div class="form-group col-md-6"><label class="" for="inputName">Nombre completo</label><input class="form-control dark py-4" id="inputName" type="text" placeholder="Nombre completo" /></div>
                                    <div class="form-group col-md-6"><label class="" for="inputEmail">Correo</label><input class="form-control dark py-4" id="inputEmail" type="email" placeholder="nombre@ocor.com" /></div>
                                </div>
                                <div class="form-group"><label class="" for="inputMessage">Mensaje</label><textarea class="form-control dark py-3" id="inputMessage" type="text" placeholder="Ingrese su mensaje..." rows="4"></textarea></div>
                                <div class="text-center"><button class="btn btn-primary btn-marketing rounded-pill mt-4" type="submit">Enviar Peticion</button></div>
                            </form>
                        </div>
                    </section>
               

       
        
<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_logout.php'); 
?>
<script src="../../js/scripts.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>