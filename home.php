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
<?php
require_once "controladores/empleado.php";
$lisempleado = listarEmpleado();
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
  <link rel="stylesheet" href="css/aos.css">
  <title>Home</title>
</head>
<body>
    <!-- ***** Welcome Area Start ***** -->
    <section class="home-section">
        <div class="container">
          <!--<div class="row align-items-center d-flex d-xl-none">
            <div class="col-4 home-content" data-aos="fade-up" data-aos-delay="200">
                <h2>Bienevnido <span><?php echo $_SESSION['admin']['nombre']; ?></span></h2>                      
              </div> 
          </div>-->
          <div class="row height-100 align-items-center justify-content-center">
              <!--<div class="col-4 home-content d-none d-xl-block" data-aos="fade-right" data-aos-delay="200">
                <h2>Bienevnido <span><?php echo $_SESSION['admin']['nombre']; ?></span></h2>                      
              </div>-->
              
              <div class="col-12 col-md-3 col-lg-3">
                  <div class="home-content" data-aos="fade-left" data-aos-delay="200">
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
              <?php if($_SESSION['admin']['tipo_usuario']=="Admin"){ ?>
              <div class="col-12 col-md-3 col-lg-3">
                  <div class="home-content" data-aos="fade-left" data-aos-delay="400">
                      <a class="card bg-green lift-img" href="#" data-toggle="modal" data-target="#modal-registrar-entrada">
                        <div class="card-body align-items-center">
                          <div class="content">
                            <span class="material-icons-round text-white" style="font-size: 7rem;">how_to_reg</span>
                              <h3 class="text-white">Registar</h3>
                              <p class="text-white">Registar la entrada de los empleados</p>
                          </div>
                        </div>
                      </a>
                  </div> 
              </div>  
              <?php } ?> 
              <div class="col-12 col-md-3 col-lg-3">
                  <div class="home-content" data-aos="fade-left" data-aos-delay="600">
                      <a class="card bg-purple lift-img animsition-link" href="views/Dashboard/">
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

<div class="modal fade" id="modal-registrar-entrada" tabindex="-1" role="dialog" aria-labelledby="modal-categoria" aria-hidden="true">
  <div class="modal-dialog modal-lg-2 modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title tct"><strong>Registrar Entrada</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="material-icons">highlight_off</span></button>
      </div>
      <?php
        require_once "controladores/empleado.php";
      ?>
      <form class="modal-body" method="POST" name="form"  action="models/empleado/asistencia_guardar.php" >                     
          <fieldset>
            <div class="form-group row">   
              <div class="col-12 mb-2">
                <label><strong>Empleado*</strong></label>
                  <select class="form-control custom-select" name="id_empleado" required="required" title="Seleccione un Empleado" style="width: 100%;">
                  <?php
                  for ($i=0; $i < count($lisempleado); $i++){ 
                    ?>
                    <option value="<?=$lisempleado[$i]['id'] ?>"><?= $lisempleado[$i]['nombre'] ?></option>
                  <?php
                  }
                  ?>
                </select>                  
              </div>
              <div class="col-12 col-lg-6 mb-2">
                <label><strong>Fecha</strong></label>
                <input type="date" name="fecha" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly title="fecha">
              </div>
              <div class="col-12 col-lg-6 mb-2">
                <label><strong>Hora*</strong></label>
                <input type="time" name="hora_e" class="form-control" title="hora" value="<?php echo date('h:i:s A'); ?>" required="required">
              </div>
            </div>            
          </fieldset>          
        <small>(*)Campos Obligatorios</small>
        <div class="modal-footer tct">        
          <button type="button" class="btn btn-transparent-dark"  data-dismiss="modal">Cancelar</button>
          <button type="submit" id="toastBasicTrigger" name="guardar" title="Agregar" class="btn btn-success">Agregar</button>
          <input type="hidden" name="id" value="guardar">
        </div>
      </form>            
      
    </div>
  </div>
</div>

</body>
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="js/aos.js"></script>
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
  <script>
    AOS.init({
        easing: 'ease-in-out-sine',
        offset: 100,
        duration: 900,
        once: true
      });
  </script>
</html>