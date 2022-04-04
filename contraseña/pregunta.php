<?php
require"../controladores/usuario.php";
$p = validar_correo();

if(!($p)){
    header("location: ../olvido_contraseña.php.php");
    
}
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Ocor-Codes">
  <link rel="icon"       href="../imagenes/logo/logo-dark-deli.png">
  <!-- Estilos-->  
  <link rel="stylesheet" href="../css/icon.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/blur.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/styles-new.css">
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
                      <form class="user" action="procesarpregunta.php" method="POST">
                        <h1 class="mb-4 tct" style="font-size: 30px;">Pregunta de Seguridad</h1>
                          <p class="mb-4"><?php echo $p['pregunta'];?><p>
                      </div>
                        <input type="hidden" name="id_usuario" value="<?php echo $p['id'] ?>">
                       
                          <div class="form-group">
                            <input class="form-control rounded-pill" type="text" name="respuesta"  placeholder="Ingresa Tu respuesta" required>
                          </div>
                            <button class="btn btn-primary btn-block rounded-pill" type="submit" name="enviar" value="Iniciar sesion">Siguiente</button>
                            <input type="hidden" name="operacion" value="loguear">
                            
                        </form>
                       
                       <hr>
                      
                        <div class="text-center small"><p class="mt-5 mb-3">Copyright &copy; Codes by Ocor 2020</p></div>
                        
                    </div>
                  </div>
                </div> 
              </div>              
          </div>                 
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/material.min.js"></script>
  <script src="../js/loader.js"></script>
  <script src="../https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
