<?php $fcha = date("Y-m-d");?>
<?php 
require_once "../../controladores/producto.php";
require_once "../../controladores/clientes.php";
require_once "../../controladores/cita.php";
$productos = listarProducto();
$cliente = listarCliente();


if(isset($_GET["removerproducto"])){
  unset($_SESSION["venta"][$_GET["removerproducto"]]);
}
  

?>
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <script>

      function controlarCampos(forma_pago){
        if(forma_pago=='EFECTIVO')
          {
            $('#camposefectivo').css('display','block');
            $('.campoefectivo').attr('required','required'); 
            $('#campostransferencia').css('display','none');
            $('.campotransferencia').removeAttr('required');
          }
        else if (forma_pago=='TRANSFERENCIA')
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
            url:'../../ajax/traercitaspendientes.php',
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
          $('#id_producto').val() && $('#cantidad_carrito').val() 
          && $('#id_producto').val()!='' && $('#cantidad_carrito').val()!='')
        $.ajax(
          {
            url:'../../ajax/agregarcarrito.php',
            method:'POST',
            data: {id_producto : $('#id_producto').val(),cantidad: $('#cantidad_carrito').val()},
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
            data: {id_producto : idp},
            success: function(data){
              $('.unidadesv').html(data);
            }
          }

          );
      }
    </script>
<!DOCTYPE html>
<html lang="en">
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
      include ('../../php/menu/menu_venta.php'); /* barra lateral y barra superior */
      ?>
    <header class="page-header bg-img-cover" style="background: rgb(1,76,255);background: linear-gradient(90deg, rgba(1,76,255,1) 0%, rgba(0,168,255,1) 100%);">
    <div class="container" style="margin-top: 6rem;">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-3 tct text-white">Nueva Venta</h1>
          <i class="material-icons-round icon-head">payment</i>
        </div>
      </div>
    </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 mb-4">
        <div class="card card-bor mb-4" style="margin-top: -1rem;">
        <div class="card-body">

                <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Cliente</span></label>
              <select class="form-control select2" name="id_cliente" id="id_cliente" onchange="$('#escondido').val(this.value); llamado( );" required="required" title="Seleccione un Cliente" style="width: 100%;">
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
        </div>

          <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Fecha de venta</span></label>
                  <input type="date"  name="fecha" id="fecha" onchange="$('#escondido2').val(this.value); llamado();" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="ejmpl:12/12/2019" required="required" title="Ingrese la Fecha">
        </div>
        </div>
        <form action="#" onsubmit="agregarCarrito(); return false;">
  <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Producto</span></label>
              <select class="form-control select2" name="id_producto" id="id_producto" required="required" title="Seleccione un Producto" style="width: 100%;">
          <?php
          for ($i=0; $i < count($productos); $i++){ 
            ?>
            <option value="<?=$productos[$i]['id'] ?>"><?= $productos[$i]['nombre'] ?></option>
          <?php
          }
          ?>
          </select>
          </div>
        </div>
                <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Cantidad</span></label>
                  <input type="number" onkeypress="var w = event.which == undefined? event.which : event.keyCode; return w>=48 && w <=57 && this.value.length<=5;" name="cantidad" id="cantidad_carrito" class="form-control" title="Ingrese la Cantidad" placeholder="20" required="required">
        </div>
        </div>

        <div class="box-footer"> 
               <p align="center"><button type="submit" name="guardar" value="Guardar venta" class="btn bg-blue"><i class="fa fa-plus"></i> <span>Agregar</span></button>
                <input type="hidden" name="operacion" value="guardar">
                 <button type="reset" class="btn bg-red"><i class="fa  fa-remove"></i> <span>Limpiar datos</span></button></p>
                
              </div>
      </form>

  
       <div id="carritotabla">
           
         </div>


       <div id="carritotabla2">
           </div>

       <h3 id="numero">
           </h3>
           
<form action="ventas_guardar.php" method="post" onsubmit="if(!confirm('Desea guardar la venta?'))return false;">
  <input type="hidden" id="escondido" name="id_cliente">
  <input type="hidden" id="escondido2" name="fecha" value="<?php echo date('Y-m-d'); ?>">


          <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Forma de Pago</span></label>
                  <select required name="forma_pago" onchange="controlarCampos(this.value);">
                    <option value="">Seleccione</option>
                    <option>PUNTO</option>
                    <option>TRANSFERENCIA</option>
                    <option>EFECTIVO</option>
                  </select>
        </div>
        </div>

        <div id="campostransferencia" style="display: none;">
           
        <div class="box-body">
          <div class="row">
                  <label><i class="fa fa-user" ></i><span> *Referencia</span></label>
                  <input type="text"  name="referencia" id="referencia" maxlength="10" title="Ingrese la Referencia" class="form-control campotransferencia" placeholder="474829003" >
        </div>
        </div>
        </div> 

              <div class="box-footer">
              <p align="center">(*) Campos Obligatorios</p>
               <p align="center"><button type="submit" name="guardar" title="Guardar" value="Cargar datos" class="btn bg-green"><i class="fa fa-send"></i> <span>Guardar</span> </button>
                <input type="hidden" name="operacion" value="guardar">
                 <button type="reset" class="btn bg-red" title="Eliminar"><i class="fa  fa-remove"></i><span> Eliminar</span> </button></p>
              </div>
            </form>

<script> 
    <?php if(isset($_GET['error'])){ ?>
alert('No puede guardar una venta vacia');
<?php    } ?>
   
</script>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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