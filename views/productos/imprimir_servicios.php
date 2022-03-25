<?php
require_once "../../controladores/servicio.php";
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
    <title>Imprimir - Servicios </title>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../../imagenes/logo/logo-dark-deli.png">
      </div>
      <h1>Listado de Servicios</h1>
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
            <th>Nombre</th>
            <th>Precio</th>
            <th>Nombre de Categoria</th>
            <th>Tiempo</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $resultados = listarServicio();
          foreach ($resultados as $key => $r){ ?>
          <tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['nombre']; ?></td>
            <td><?php echo $r['precio']; ?></td>
            <td><?php echo $r['nombrecategoria']; ?></td>
            <td><?php if ($r['tiempo']>60) {
                        echo sprintf("%.2f",$r['tiempo']/60);
                        echo ' H';
                      }
                      else{  
                        echo $r['tiempo'];
                        echo ' min';
                      }?>

            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Aqui se muestran todos los registros de las Servicios</div>
      </div>
    </main>
    <footer>
      Turmero, Aragua, Venezuela RIF: J-41238766-9.
    </footer>
  </body>
</html>