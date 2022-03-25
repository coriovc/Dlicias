<?php
require_once "../../controladores/clientes.php";

$cliente = buscarCliente(); ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Cliente | <?= $cliente['nombre']?></title>
  <!-- Estilos de esta pagina-->

</head>
<body onload="startTime()">
      <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_ventas.php'); /* barra lateral y barra superior */
      ?>
  <header class="page-header bg-img-cover overlay overlay-30" style="background-image: url(../../imagenes/fondo-Principal.jpg);">
  <div class="container" style="margin-top: 6rem;">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-3 tct text-white">Cliente</h1>
      </div>
    </div>
  </div>
  </header>

  <div class="container">
            <div class="row" style="margin-top: -1.5rem; margin-bottom: 3rem;">
                <div class="dropdown no-caret">
                    <a class="btn btn-white rounded-pill shadow-lg"href="../ventas/index.php#seccion-2">
                    <i class="material-icons-outlined">arrow_back</i>
                    <div class="font-weight-500">Volver</div></a>
                </div>          
            </div>
        </div>

  <section class="section-clientes"> 
    <div class="container-fluid">
      <div class="row justify-content-end">
        
      <div class="col-lg-9 mb-4 col-12">
          <div class="card o-visible mb-4 mt-4">
              <div class="card-body">
                
              <form  method="POST" name="form"  action="clientes_modificar.php" >
                <input type="hidden" name="id" value="<?= $cliente['id']?>">
                  <div class="row">
                  <div class="col-lg-4 col-12">
                    <div class="form-group">
                      <label>Tipo de Documento*</label>
                      <select class="form-control select2" required="required" title="Seleccione la Nacionalidad" name="tipo_documento" style="width: 100%;">
                        <option>Seleccione</option>
                        <option value="Venezolano"  <?php if($cliente['tipo_documento'] == 'Venezolano' ) echo 'selected'; ?> >V</option>
                        <option value="Extranjero"  <?php if($cliente['tipo_documento'] == 'Extranjero' ) echo 'selected'; ?>>E</option>
                        <option value="Juridico"  <?php if($cliente['tipo_documento'] == 'Juridico' ) echo 'selected'; ?>>J</option>
                        <option value="Pasaporte"  <?php if($cliente['tipo_documento'] == 'Pasaporte' ) echo 'selected'; ?>>P</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 col-12" >
                    <label for="exampleInputEmail">Identificación*</label>
                    <input type="tel" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>48 && w <57 && this.value.length<=7;" name="identificacion" class="form-control" title="Ingrese la Cedula" id="identificacion" required="required" value="<?= $cliente['identificacion']?>">
                    </div>
                  
                  <div class="col-lg-4 col-12" >
                    <label><span>Nombre y Apellido*</span></label>
                    <input type="text" name="nombre" maxlength="20"  class="form-control" id="nombre" required="required" title="Ingrese Nombre y Apellido" value="<?= $cliente['nombre']?>">
                  </div>

                  <div class="col-lg-4 col-12">
                    <label><span>Telefono*</span></label>
                    <input type="tel" name="telefono"  onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=10;" title="Ingrese el telefono" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask required="required" value="<?= $cliente['telefono']?>">
                  </div>
                  <div class="col-lg-4 col-12">
                    <label><span>Correo*</span></label>
                    <input type="email" name="correo" class="form-control" maxlength="50" title="Ingrese el Correo" required="required" value="<?= $cliente['correo']?>">
                  </div>
                  <div class="col-lg-4 col-12">
                    <label><span>Direccion*</span></label>
                    <input type="text" name="direccion" class="form-control" id="direccion" required="required" title="Ingrese la direccion" value="<?= $cliente['direccion']?>">
                  </div>
                  <div class="col-lg-4 col-12">
                    <label><span>Empresa*</span></label>
                    <input type="text" name="empresa" class="form-control" id="empresa" required="required" title="Ingrese su empresa" value="<?= $cliente['empresa']?>">
                  </div>
                </div>

                <div class="mt-4 d-flex" style="margin-left: -0.5rem;">
                    <h6 class="mb-0">Opciones</h6>
                </div>

                <div class="my-2">
                
                  <button type="submit" name="guardar" value="Cargar datos" class="btn btn-green rounded-pill lift-img"><i class="fa fa-send"></i> <span>Guardar</span></button>
                  <input type="hidden" name="operacion" value="guardar">
                  <button type="reset" class="btn btn-light btn-icon btn-sm lift-X-r" href="#" ><span class="material-icons-round">sync</span></button>

                </div>
              
                </div>
              </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
       
<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_logout.php');
include ('../../php/modal/modal_ventas.php'); 
?>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
