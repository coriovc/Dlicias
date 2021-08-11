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
  <title>Editar Perfil</title>
</head>

<body onload="startTime()">
      <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_perfil.php'); /* barra lateral y barra superior */
      ?>
  <section class="section-edit-perfil">
    <div class="container-fluid" style="margin-top: 5rem;">   
      <div class="row">
        <div class="col-lg-6 col-xl-6 mb-4">          
          <div class="card o-visible tct mb-4">
              <img class="img-profile rounded-circle" src="../../imagenes/User-img.png">       
                <div class="container tct text-center">
                    <div class="row justify-content-center">
                      <div class="col-lg-8">
                        <h1 class="display-4"><?php echo $_SESSION['admin']['nombre']; ?></h1>
                        <p class="text-primary"><?php echo $_SESSION['admin']['tipo_usuario']; ?></p>
                      </div>
                    </div>
                </div>                   
               
              <div class="container align-items-center pb-5"><br>
              <form class="user" role="form" name="" action="" method="post">
                    <fieldset>                  
                      <div class="form-group row">
                      <div class="col-sm-4 mb-3 mb-sm-0">
                        <label class="tct"><strong>Usuario</strong></label>
                        <input type="text" class="form-control rounded-pill" id="usuario" name="usuario" value="<?php echo $_SESSION['admin']['ci']; ?>" placeholder="Usuario...">
                      </div>
                      <div class="col-sm-4">
                        <label class="tct"><strong>Nombre</strong></label>
                        <input type="text" class="form-control rounded-pill" id="nombre" name="nombre" value="<?php echo $_SESSION['admin']['nombre']; ?>" placeholder="Nombre...">
                      </div>
                      <div class="col-sm-4">
                        <label class="tct"><strong>Apellido</strong></label>
                        <input type="text" class="form-control rounded-pill" id="apellido" name="apellido" value="" placeholder="Apellido...">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="tct"><strong>Correo</strong></label>
                      <input type="email" class="form-control rounded-pill" id="email" name="email" value="<?php echo $_SESSION['admin']['correo']; ?>" placeholder="Direccion de Email...">
                    </div>
                    </fieldset>
              </div>   
          </div>               
        </div>

        <div class="col-lg-4 col-xl-3 mb-4">
            <div class="card tct mb-4">
              <div class="card-header bg-red text-white tct">PIN</div>
                <div class="card-body">
                  <fieldset>
                    <div class="form-group row"> 
                      <div class="col">
                      <input type="text" class="form-control text-center" placeholder="PIN Ej(1234)" id="pin" name="pin" size="4" maxlength="4">
                      </div>            
                    </div>            
                  </fieldset>
              </div>              
            </div>
            <div class="card tct mb-4">
              <div class="card-header bg-red text-white tct">Pregunta de seguridad</div>
                <div class="card-body">
                  <fieldset>
                    <div class="form-group row">
                      <div class="col">
                      <select class="form-control custom-select rounded-pill" name=pregunta_de_seguridad>
                        <option value="">seleccionar</option>
                        <option value="pregunta 2">Pregunta 2</option>
                        <option value="pregunta 3">Pregunta 3</option>
                        <option value="pregunta 3">Pregunta 3</option>
                      </select>
                      </div> 
                    </div>
                    <div class="form-group row">
                      <div class="col">
                        <label class="tct"><strong>Respuesta</strong></label>
                        <input type="text" class="form-control rounded-pill" id="respuesta_de_seguridad" name="Respuesta_de_seguridad" value="" placeholder="Respuesta...">
                      </div>
                    </div>
                  </fieldset>
                </div>              
            </div>
        </div>

        <div class="col-lg-4 col-xl-3 mb-4">   

            <div class="card tct mb-4">
              <div class="card-header bg-red text-white tct">Contraseña</div>
                <div class="card-body">
                  <fieldset>                
                    <div class="form-group row">
                      <div class="col">
                        <label><strong>Antigua Contraseña</strong></label>
                        <input type="password" class="form-control rounded-pill " id="password" name="password" required><div class="invalid-feedback">Campo obligatorio</div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col">
                        <label><strong>Nueva Contraseña</strong></label>
                        <input type="password" class="form-control rounded-pill " id="password" name="password" required><div class="invalid-feedback">Campo obligatorio</div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col">
                        <label><strong>Repetir Contraseña</strong></label>
                        <input type="password" class="form-control rounded-pill " id="confirm_password" name="confirm_password" required><div class="invalid-feedback">Campo obligatorio</div>
                      </div>
                    </div>
                  </fieldset>
                </div>              
            </div>
        </div>      
      </div>

      <div align="center" class="mt-3 mb-5">
        <a href="javascript:history.back()" class="btn tct shadow-lg btn-white border-0 rounded-pill lift-X-l mr-3">
          <i class="material-icons-round">arrow_back</i>Regresar</a>
        <button type="submit" class="btn tct btn-success rounded-pill border-0 shadow-lg">Guardar</button>
      </div> 
      </form>
    </div>
  </section>
<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts-1.php');
/* Modales */
include ('../../php/modal/modal_logout.php');
include ('../../php/modal/modal_cambiar_pass.php');
include ('../../php/modal/modal_cambiar_ps.php');  
?>
<script src="../../js/scripts.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>