 <!--<?php
    session_start(); 
    if (!empty($_SESSION['email']) && !empty($_SESSION['password'])){
        header('Location: home.php'); 
    }  ?>-->
<!DOCTYPE html>
<html>
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
  <!-- scripts-->
  <title>Iniciar Sesion</title>   
</head>
<body>
  <!--<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="imagenes/ocor-logo.png" alt="">
            </div>
        </div>
    </div>
  </div>-->
<!-- ***** Welcome Area Start ***** -->
    <section class="login-section"><div class="blur">
        <div class="container">
          <div class="row height-100 align-items-center justify-content-center">              
              <div class="col-12 col-md-4 col-lg-4">
                <div class="login-content">
                  <div class="card">
                    <div class="card-body align-items-center">
                      <div class="img-user"><img src="imagenes/logo/logo-dark-deli.png"></div>

                      <form class="user" role="form" name="login" action="php/login.php" method="post">
                        <fieldset>
                        
                        <div class="form-group">
                          <input class="form-control" type="text" name="email" placeholder="Usuario o Correo" autocomplete="off">
                        </div>
                        
                        <div class="input-group">
                          <input class="form-control" type="password" id="Passw" name="password" placeholder="Contraseña">
                          &nbsp;
                          <div class="input-group-append"><span>
                            <a class="btn btn-white btn-icon" onclick="mostrarPassword()" id="ShowPassword"><span class="material-icons-round">visibility</span></a></span>
                          </div>
                        </div>

                        <br>
                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-white shadow-lg rounded-pill">Acceder</button>
                        </div>
                        <hr class="white">
                        <div class="form-group text-center">
                          <a class="small" href="forgot-password.php">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="text-center small"><p class="mt-5 mb-3">Copyright &copy; Codes by Ocor 2020</p></div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </div> 
              </div>              
          </div>                 
        </div>
      </div>
    </section>
    <!-- ***** Welcome Area End ***** -->




</body>
  <script type="text/javascript">
  $(document).ready(function () {//CheckBox mostrar contraseña
   $('#ShowPassword').click(function () {
   $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');});
   })
  </script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/material.min.js"></script>
  <script src="js/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
