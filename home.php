<!--<?php
    /*session_start(); 
    if (empty($_SESSION['email']) or empty($_SESSION['password'])){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header("location:index.php");
    }
    include('controllers/controller-usuario.php');
    $l = UsuarioLog();
    if($l && count($l)){
    foreach ($l as $key => $value) {}
    }*/
?>-->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Ocor-Codes">
  <link rel="icon"       href="imagenes/img-user.png">
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
                <h2>Bienevnido <span><!--<?php echo $value->nombre?>-->victor</span></h2>                      
              </div> 
          </div>
          <div class="row height-100 align-items-center justify-content-center">
              <div class="col-4 home-content d-none d-xl-block">
                <h2>Bienevnido <span><!--<?php echo $value->nombre?>-->victor</span></h2>                      
              </div> 
              <div class="col-12 col-md-3 col-lg-3">
                  <div class="home-content">
                      <a class="card lift-img" href="views/error-404.php">
                        <div class="card-body align-items-center">
                          <div class="content">
                            <img src="imagenes/icon/008-credit card.svg" width="60">
                              <h3>Venta Rapida</h3>
                              <p>Realizar ventas, o pedidos de clientes, Rapida</p>
                          </div>
                        </div>
                      </a>
                  </div> 
              </div>
              <div class="col-12 col-md-3 col-lg-3">
                  <div class="home-content">
                      <a class="card lift-img" href="views/Dashboard.php">
                        <div class="card-body align-items-center">
                          <div class="content">
                            <img src="imagenes/icon/024-layer.svg" width="60">
                              <h3>Dashboard</h3>
                              <p>Adminitracion del negocio</p>
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