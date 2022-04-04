<?php  
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['admin'])){header("location: ../../index.php");exit(1);}
?>
<?php $fcha = date("Y-m-d");?>
<?php 
require_once "../../controladores/producto.php";
require_once "../../controladores/servicio.php";
require_once "../../controladores/clientes.php";
require_once "../../controladores/pedido.php";
$productos = listarProducto();
$servicio = listarServicio();
$cliente = listarCliente();


if(isset($_GET["removerservicio"])){
  unset($_SESSION["venta"][$_GET["removerservicio"]]);
}
  

?>
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <script>

      function controlarCampos(forma_pago){
        if(forma_pago=='Debito')
          {
            $('#camposefectivo').css('display','block');
            $('.campoefectivo').attr('required','required'); 
            $('#campostransferencia').css('display','none');
            $('.campotransferencia').removeAttr('required');
          }

        else if (forma_pago=='Efectivo')
          {
            $('#camposefectivo').css('display','block');
            $('.campoefectivo').attr('required','required'); 
            $('#campostransferencia').css('display','none');
            $('.campotransferencia').removeAttr('required');
          }
        else if (forma_pago=='Transferencia_PagoM')
          { 
            $('#campostransferencia').css('display','block');
            $('.campotransferencia').attr('required','required'); 
            $('#camposefectivo').css('display','none');
            $('.campoefectivo').removeAttr('required');
          }
        else if (forma_pago=='Paypal')
          { 
            $('#campostransferencia').css('display','block');
            $('.campotransferencia').attr('required','required'); 
            $('#camposefectivo').css('display','none');
            $('.campoefectivo').removeAttr('required');
          }
        else if (forma_pago=='BINANCE')
          { 
            $('#campostransferencia').css('display','block');
            $('.campotransferencia').attr('required','required'); 
            $('#camposefectivo').css('display','none');
            $('.campoefectivo').removeAttr('required');
          }
          else
          {
            $('#camposefectivo').css('display','none');
            $('.campoefectivo').removeAttr('required');
            $('#campostransferencia').css('display','none');
            $('.campotransferencia').removeAttr('required');
          }
      };
      function llamado(event){
        if(
          $('#id_cliente').val() && $('#fecha').val() 
          && $('#id_cliente').val()!='' && $('#fecha').val()!='')
        $.ajax(
          {
            url:'../../ajax/traerpedidospendientes.php',
            method:'GET',
            data: {id_cliente : $('#id_cliente').val(),fecha: $('#fecha').val()},
            success: function(data){
              $('#carritotabla2').html(data);
              actualizarTotal();
            }
          }

          );
      } 



      function agregarCarrito(){
        if(
          
        $('#id_cliente').val() && $('#id_cliente').val()!='' &&
          $('#id_servicio').val() && $('#cantidad_carrito').val() 
          && $('#id_servicio').val()!='' && $('#cantidad_carrito').val()!='')
        $.ajax(
          {
            url:'../../ajax/agregarcarrito.php',
            method:'POST',
            data: {id_servicio : $('#id_servicio').val(),cantidad: $('#cantidad_carrito').val()},
            success: function(data){ 
              $('#scriptss').html(data);
              actualizarTotal();
            }
          }

          );

      return false; 
      }


      function actualizarTotal(){
        $.ajax(
          {
            url:'../../ajax/actualizarcarrito.php',
            method:'GET',
            data: { },
            success: function(data){
              $('#carritotabla').html(data); 
              actualizarNumero();
            }
          }

          );
      } 


      function actualizarNumero(){
        $.ajax(
          {
            url:'../../ajax/actualizarnumero.php',
            method:'GET',
            data: {id_cliente : $('#id_cliente').val(),fecha: $('#fecha').val()},
            success: function(data){
              $('#numero').html(data);  
            }
          }

          );
      } 



      function llamadoUnidadVenta(idp){
        $.ajax(
          {
            url:'../../ajax/traerunidadventa.php',
            method:'GET',
            data: {id_servicio : idp},
            success: function(data){
              $('.unidadesv').html(data);
            }
          }

          );
      }
    </script>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include ('../../php/head.php');
  ?>
  <title>Venta</title>
  <!-- Estilos de esta pagina-->
</head>
<body onload="startTime()">
      <?php
      include ('../../php/navbar.php');
      include ('../../php/menu/menu_ventas.php');
      ?>
    <header class="page-header bg-img-cover" style="background: rgb(1,76,255);background: linear-gradient(90deg, rgba(1,76,255,1) 0%, rgba(0,168,255,1) 100%);">
    <div class="container" style="margin-top: 6rem;">
      <div class="row">
        <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
          <h1 class="display-3 tct text-white">Nueva Venta</h1>
          <i class="material-icons-round icon-head icon-animate">payment</i>
        </div>
      </div>
    </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 mb-4">
        <div class="card card-bor mb-4" style="margin-top: -1rem;" data-aos="fade-up" data-aos-delay="1000">
        <div class="card-body">

      
                
          <fieldset>
            <div class="form-group row">
              <div class="col-12 col-lg-9 ">
                <label><strong>Cliente*</strong></label>
              <select class="form-control form-control-solid select2" name="id_cliente" id="id_cliente" onchange="$('#escondido').val(this.value); llamado( );" required="required" title="Seleccione un Cliente" style="width: 100%;">
              <option value="">Seleccione un cliente</option>
                <?php
                for ($i=0; $i < count($cliente); $i++){ 
                  ?>
                  <option value="<?=$cliente[$i]['id'] ?>"><?= $cliente[$i]['nombre'] ?></option>
                <?php
                }
                ?>
                </select>
              </div>
            
            <div class="col-12 col-lg-3">
                <label><strong>Fecha de Venta</strong></label>
                <input type="date"  name="fecha" id="fecha" onchange="$('#escondido2').val(this.value); llamado();" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" class="form-control form-control-solid" placeholder="ejmpl:12/12/2019" readonly title="Ingrese la Fecha">
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend><strong>Elija sus Servicios</strong></legend>
              <form action="#" onsubmit="agregarCarrito(); return false;">  

                <div class="form-group row">
                <div class="col-12 col-lg-6 ">
                <label>Servicio*</label>
                <select class="form-control form-control-solid select2" name="id_servicio" id="id_servicio" required="required" title="Seleccione un servicio" style="width: 100%;">
                  <option>Seleccionar</option>
                  <?php
                  for ($i=0; $i < count($servicio); $i++){ 
                    ?>
                    <option value="<?=$servicio[$i]['id'] ?>"><?= $servicio[$i]['nombre'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12 col-lg-2">
                <label><strong>Canttidad *</strong></label>
                <input type="number" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" name="cantidad" id="cantidad_carrito" class="form-control form-control-solid" title="Ingrese la Cantidad" placeholder="20" required="required">
              </div>
              <div class="col">
                <button style="margin-top: 2rem;" class="btn btn-blue" type="submit" name="guardar">Agregar</button>
              </div>
              <input type="hidden" name="operacion" value="guardar">
              </form>
            </div>
            <legend>Detalles</legend>
                                
          <div id="carritotabla"></div>
          <div id="carritotabla2"></div>
          <h3 class="mt-2" id="numero"></h3>
                                

          </fieldset>
    <form action="ventas_guardar.php" method="post">
    <input type="hidden" id="escondido" name="id_cliente">
    <input type="hidden" id="escondido2" name="fecha" value="<?php echo date('Y-m-d'); ?>">

          <fieldset>
            <div class="form-group row my-2">
              <div class="col-12 col-lg-8">
                <label><strong>Medio de pago*</strong></label>
                <select class="form-control form-control-solid select2" required name="forma_pago" onchange="controlarCampos(this.value);">
                    <option>Seleccione</option>
                    <option value="Debito">Debito (Master)</option>
                    <option value="Transferencia_PagoM">Trasnferencia o Pago movil</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Paypal">Paypal</option>
                    <option value="BINANCE">BINANCE</option>

                  </select>
              </div>
              <div class="col-12 col-lg-4" id="campostransferencia" style="display: none; -webkit-transition: all .5s;
  -moz-transition: all .5s;
  transition: all .5s;">
                <label><strong>Numero de referencia *</strong></label>
                <input type="text"  name="referencia" id="referencia" maxlength="10" title="Ingrese la Referencia" class="form-control form-control-solid campotransferencia" placeholder="(12345678) o (1234)" >
              </div>
            </div>
          </fieldset>

                  
                  <div align="center">
                  <button type="reset"  class="btn btn-transparent-dark btn-icon"><i class="material-icons-round">sync</i></button>
                  <a href="javascript:history.back()" type="button" class="btn btn-transparent-dark"><strong>Cancelar</strong></a>
                  <button type="submit" id="toastBasicTrigger" class="btn btn-blue">Registrar</button>
                  <input type="hidden" name="operacion" value="guardar">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>



<script> 
    <?php if(isset($_GET['error'])){ ?>
alert('No puede guardar una venta vacia');
<?php    } ?>
   
</script>
<div style=" position: fixed; bottom: 2rem; right: 1rem; z-index: 900;">
    <div class="toast" id="toastBasic" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
        <div class="toast-header tct text-success">
            <span class="material-icons-round">check_circle_outline</span>
            <strong class="mr-auto">Se Registro Exitosamente</strong>
        <small class="text-gray-500 ml-2">Justo Ahora</small>
        <button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
    </div>
</div><!-- Toast container -->

<?php
/* footer */
include ('../../php/footer.php'); 
/* scripts */
include ('../../php/scripts.php');
/* Modales */
include ('../../php/modal/modal_logout.php'); 
?>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>