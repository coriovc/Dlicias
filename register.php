<?php session_start(); ?>
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
  <title>Registrar</title>
</head>
<body>

  <div class="container">

    <div class="filter-dark o-hidden my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-empresa-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="blanc mb-4">Crear una Cuenta!</h1>
              </div>
              <form class="user" role="form" name="registro" action="../php/registro.php" method="post">
                <fieldset>
                  <div class="form-group row">
                  <div class="col was-validated">
                    <input type="text" class="form-control rounded-pill" id="usuario" name="usuaio" placeholder="Usuario..." required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control rounded-pill" id="nombre" name="nombre" placeholder="Nombre...">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control rounded-pill" id="apellido" name="apellido" placeholder="Apellido...">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Direccion de Email...">
                </div>
                <div class="form-group row">

                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="contraseña">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control rounded-pill" id="confirm_password" name="confirm_password" placeholder="Repetir contraseña">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control rounded-pill" id="Pregunta_de_seguridad" name="Pregunta_de_seguridad" placeholder="Pregunta de seguridad">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control rounded-pill" id="Respuesta_de_seguridad" name="Respuesta_de_seguridad" placeholder="Respuesta de seguridad">
                  </div>
                </div>
                <div class="form-group was-validated">
                  <select class="form-control custom-select  rounded-pill" name="tipo_de_usuario" required>
                            <option value="">Seleccione tipo de Usuario...</option>
                            <option value="administrador">Administrador</option>
                            <option value="secretario">Secretario</option>
                            <option value="empleado">Empleado</option>
                            <option value="asistente">Asistente</option>
                  </select>
                </div>

                </fieldset>
                 <button type="submit" class="btn btn-primary rounded-pill btn-block">Registrar</button>
                
              </form>
              <hr>
              
              <div class="text-center">
                <a class="small blanc" href="../index.php">¿Ya tienes una cuenta? ¡Iniciar sesión!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="text-center"><p class="mt-5 mb-3 blanc">Copyright &copy; Codes by Ocor 2020</p></div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
