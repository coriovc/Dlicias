<?php
require_once "../../controladores/compra.php";
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
    <title>Imprimir - Compras </title>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../../imagenes/logo/logo-dark-deli.png">
      </div>
      <h1>Listado de Compras</h1>
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
            <th>Código Compra</th>
            <th>Fecha Compra</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th> 
          </tr>
        </thead>
        <tbody>
          <?php 
          $resultados = listarCompra();
          foreach ($resultados as $key => $r){ ?>
            <tr>
              <td><?php echo $r['codigo_compra']; ?></td>
              <td><?php echo date("d/m/Y",strtotime($r['fecha'])); ?></td>
              <td><?php echo $r['nombreproducto']; ?></td>
              <td><?php echo $r['cantidad']; ?> <?php echo $r['nombreunidad']; ?></td>
              <td><?php echo $r['cantidad'] * $r['precio_c']  ; ?>$ </td> 
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Aqui se muestran todos los registros de las Compras</div>
      </div>
    </main>
    <footer>
      Turmero, Aragua, Venezuela RIF: J-41238766-9.
    </footer>
  </body>
</html>