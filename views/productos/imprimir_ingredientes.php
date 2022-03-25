<?php
require_once "../../controladores/producto.php";
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
    <title>Imprimir - Ingredientes </title>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../../imagenes/logo/logo-dark-deli.png">
      </div>
      <h1>Listado de Ingredientes</h1>
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
            <th>Nro</th>
            <th>Código de Producto</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio de Compra</th>
            <th>Precio de Venta</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $resultados = listarProducto();
          foreach ($resultados as $key => $r){ ?>
            <tr>
              <td><?php echo $r['id']; ?></td>
              <td><?php echo $r['codigo_pt']; ?></td>
              <td><?php echo $r['nombre']; ?></td>
              <td>
                Stock - <?php echo $r['cantidad']?> <?php echo $r['und']; ?>
                <br>
                EV - <?php echo round($r['cantidad'] / $r['equivalencia_venta']); ?> <?php echo $r['und']; ?>
                <br>
                EQ - <?php echo sprintf("%.2f",$r['cantidad'] / ($r['equivalencia_venta'] * $r['equivalencia'])); ?> <?php echo $r['und_entrada']; ?>
              </td>
              <td><?php echo $r['precio_c']; ?>Bs</td>
              <td><?php echo $r['precio_v']; ?>Bs</td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Aqui se muestran todos los registros de los Ingredientes</div>
      </div>
    </main>
    <footer>
      Turmero, Aragua, Venezuela RIF: J-41238766-9.
    </footer>
  </body>
</html>