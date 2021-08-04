<?php  
if(!isset($_SESSION)){
  session_start();

}
require_once "controladores/usuario.php";
if(!isset($_SESSION['admin']))
{
  header("location: index.php");
  exit(1);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
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
  <title>Home</title>
</head>
<body>
    <!-- ***** Welcome Area Start ***** -->
    <section class="home-section">
        <div class="container">
          <div class="row align-items-center d-flex d-xl-none">
            <div class="col-4 home-content">
                <h2>Bienevnido <span><?php echo $_SESSION['admin']['nombre']; ?></span></h2>                      
              </div> 
          </div>
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-4 home-content d-none d-xl-block">
                <h2>Bienevnido <span><?php echo $_SESSION['admin']['nombre']; ?></span></h2>                      
              </div>
              <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
              <div class="col-12 col-md-3 col-lg-3">
                  <div class="home-content">
                      <a class="card bg-blue lift-img" href="views/Venta/">
                        <div class="card-body align-items-center">
                          <div class="content">
                            <span class="material-icons-round text-white" style="font-size: 7rem;">monetization_on</span>
                              <h3 class="text-white">Venta Rapida</h3>
                              <p class="text-white">Realizar ventas, o pedidos de clientes, Rapida</p>
                          </div>
                        </div>
                      </a>
                  </div> 
              </div>
              <div class="col-12 col-md-3 col-lg-3">
                  <div class="home-content">
                      <a class="card bg-green lift-img" href="#!">
                        <div class="card-body align-items-center">
                          <div class="content">
                            <span class="material-icons-round text-white" style="font-size: 7rem;">pending_actions</span>
                              <h3 class="text-white">Registar</h3>
                              <p class="text-white">Registar la entrada de los empleados</p>
                          </div>
                        </div>
                      </a>
                  </div> 
              </div>  
              <?php } ?> 
              <div class="col-12 col-md-3 col-lg-2">
                  <div class="home-content">
                      <a class="card bg-purple lift-img" style="margin: 0;" href="views/Dashboard/">
                        <div class="card-body align-items-center">
                          <div class="content">
                            <span class="material-icons-round text-white" style="font-size: 7rem;">dashboard</span>
                              <h3 class="text-white">Dashboard</h3>
                              <p class="text-white">Adminitracion del negocio</p>
                          </div>
                        </div>
                      </a>
                  </div> 
              </div>              
          </div>          
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
    <a id="exti-top" data-toggle="modal" data-target="#logoutModalHome"><i class="material-icons-round">exit_to_app</i></a>
<?php
/* Modales */
include ('php/modal/modal_logout.php'); 
?>
</body>
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script type="text/javascript">
  function mostrarsaludo(){
    fecha = new Date(); 
    hora = fecha.getHours();
      if(hora >= 0 && hora < 12){
         texto = "Buenos Días";}          
      if(hora >= 12 && hora < 18){
         texto = "Buenas Tardes";}
      if(hora >= 18 && hora < 24){
         texto = "Buenas Noches";}
  document.getElementById('txtsaludo').innerHTML = texto;}
</script>
</html>