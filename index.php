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
  <link rel="stylesheet" href="css/aos.css">
  <!-- scripts-->
  <title>Iniciar Sesion</title>   
</head>
<body>
<!-- ***** Welcome Area Start ***** -->
    <section class="login-section" style="background: url(imagenes/fondo-Principal.jpg);background-position: center;
    background-size: cover;"><div style="backdrop-filter: saturate(180%) blur(20px);">
        <div class="container">
          <div class="row height-100 align-items-center justify-content-center">              
              <div class="col-12 col-md-4 col-lg-4">
                <div class="login-content">
                  <div class="card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-body align-items-center">
                      <div class="img-user"><img src="imagenes/logo/logo-dark-deli.png"></div>

                      <form class="user" role="form" name="login" action="php/login.php" method="post">
                        <fieldset>
                        
                        <div class="form-group">
                          <input class="form-control" type="text" name="ci" placeholder="26866132" autocomplete="off">
                        </div>
                        
                        <div class="input-group">
                          <input class="form-control" type="password" id="password" name="clave" placeholder="*****">
                          &nbsp;
                          <div class="input-group-append"><span>
                            <a class="btn btn-white btn-icon" id="ShowPassword" onclick="mostrarContrasena()">
                              <span class="material-icons-round" id="pass-1">visibility</span>
                              <span class="material-icons-round pass-off" id="pass-2">visibility_off</span></a></span>
                          </div>
                        </div>

                        <br>
                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-white shadow-lg rounded-pill animsition-link">Acceder</button>
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

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- animsition.js -->
  <script src="js/animsition.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.js"></script>
  <script src="js/material.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function mostrarContrasena(){
        var tipo = document.getElementById("password");
        if(tipo.type == "password"){
            tipo.type = "text";
            $("#pass-1").addClass("pass-off");
            $("#pass-2").addClass("pass-on");
            tipo.placeholder = "12345";
        }else{
            tipo.type = "password";
            $("#pass-1").removeClass("pass-off");
            $("#pass-2").removeClass("pass-on");
            tipo.placeholder = "*****";
        }
    }
  </script>
  <script>
      AOS.init({
          easing: 'ease-in-out-sine',
          offset: 100,
          duration: 900,
          once: true
        });
    </script>

</html>
