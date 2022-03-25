<?php
require_once "../../controladores/venta.php";
?>
<script>window.print();</script> 
</script>
<!DOCTYPE html>
<html lang="es">
  <head>
  <?php
  include ('../../php/head.php');
  ?>
  <link rel="stylesheet" href="style-pdf.css" media="all" />
    <title>Imprimir - Venta </title>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../../imagenes/logo/logo-dark-deli.png">
      </div>
      <h1>Listado de ventas</h1>
      <div id="project" class="clearfix">
        <div>D'licias</div>
        <div>Paseo Urdaneta,<br /> Local 6, Turmero</div>
        <div>(244) 661-8396</div>
        <div><a href="mailto:minimarket412@gmail.com">minimarket412@gmail.com</a></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th>Fecha Venta</th>
            <th>Cliente</th>
            <th>Código de Venta</th>
            <th>Forma de pago</th>
            <th>Recibido</th> 
            <th>Total de Venta</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $resultados = listarVenta();
          foreach ($resultados as $key => $r){ ?>
            <tr>
              <td><?php echo date("d/m/Y",strtotime($r['fecha'])); ?></td>
              <td><?php echo $r['nombre']; ?></td>  
              <td><?php echo $r['codigo_venta']; ?></td>
              <td><?php echo $r['forma_pago']; ?></td>
              <td><?= ($r['forma_pago']=='EFECTIVO') ?  $r['recibido'] :  totalVenta($r['id']);  ?> Bs. s.</td>
              <td><?php echo totalVenta($r['id']); ?> Bs. s.</td> 
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Aqui se muestran todos los registros de las ventas</div>
      </div>
    </main>
    <footer>
      Turmero, Aragua, Venezuela RIF: J-41238766-9.
    </footer>
  </body>
</html>