<?php 
require_once "controladores/usuario.php";

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Ocor-Codes">
  <link rel="icon"       href="imagenes/logo/logo-dark-deli.png">
  <!-- Estilos-->  
  <link rel="stylesheet" href="css/icon.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/blur.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styles-new.css">
  <title>Recuperar contraseña</title>
</head>
<body>

<!-- ***** Welcome Area Start ***** -->
    <section class="login-section">
        <div class="container">
          <div class="row height-100 align-items-center justify-content-center">              
              <div class="col-12 col-md-5 col-lg-5">
                <div class="login-content">
                  <div class="card">
                    <div class="card-body align-items-center">
                      <div class="text-center">
                        <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/rqqkvjqf.json"
                            trigger="loop"
                            delay="4000"
                            colors="primary:#eeeeee,secondary:#f73636"
                            stroke="50"
                            scale="53"
                            style="width:150px;height:150px">
                        </lord-icon>
                        <h1 class="mb-4 tct" style="font-size: 30px;">¿Olvidaste tu contraseña?</h1>
                          <p class="mb-4">Lo entendemos, pasan cosas. Simplemente ingrese su dirección de correo electrónico a continuación y le enviaremos un enlace para restablecer su contraseña.</p>
                          <?php if(isset($_SESSION['eliminada'])): ?>                            
                            <div id="mensaje" class="alert alert-danger" role="alert">
                              NO SE ENCUENTRA EL CORREO!
                            </div>
                            <script type="text/javascript">
                              setTimeout(function(){
                                $('#mensaje').hide(500);
                              },10000);
                            </script>
                          <?php 
                          unset($_SESSION['eliminada']);
                        endif; ?>
                      </div>

                        <form class="user" action="contraseña/pregunta.php" method="POST">
                          <div class="form-group">
                            <input type="email" class="form-control rounded-pill" name="correo" placeholder="Ingrese su Email..." required>
                          </div>
                            <button class="btn btn-primary btn-block rounded-pill" type="submit" name="enviar" value="Iniciar sesion">Siguiente</button>
                            <input type="hidden" name="operacion" value="loguear">
                            
                        </form>
                       
                       <hr>
                      
                        
                        <div class="form-group text-center">
                          <a class="small" href="index.php">¿Ya tienes una cuenta? ¡Iniciar sesión!</a>
                        </div>
                        <div class="text-center small"><p class="mt-5 mb-3">Copyright &copy; Codes by Ocor 2020</p></div>
                        
                    </div>
                  </div>
                </div> 
              </div>              
          </div>                 
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/material.min.js"></script>
  <script src="js/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
