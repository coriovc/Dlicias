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
    <title>Imprimir</title>
  </head>
  <body>
    <header class="clearfix">
 <center><img src="../../imagenes/logo/logo-dark-deli.png" width="270px" height="270px"></center>    

      <h1>NAZ STUDIO</h1>
      <div id="company" class="clearfix">
        <div>Naz Studio</div>
        <div>La Soledad,<br /> Local 12-A, Aragua, Venezuela</div>
        <div>(412) 866-900</div>
        <div><a href="nazstudio@gmail.com">nazstudio@gmail.com</a></div>
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
      </table>
      <div id="notices">
        <div>OJO:
        <div class="notice">Son todos los registros de las citas tanto pagadas y sin pagar.</div>
      </div>
      </div>
    </main>
          <footer>
     La Soledad, Maracay, Aragua, Venezuela RIF: J-0987654321.
    </footer>
  </body>
</html>