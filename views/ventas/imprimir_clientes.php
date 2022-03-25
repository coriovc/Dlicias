<?php
require_once "../../controladores/clientes.php";
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
    <title>Imprimir - Clientes </title>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../../imagenes/logo/logo-dark-deli.png">
      </div>
      <h1>Listado de Clientes</h1>
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
            <th>Cedula/RIF</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $resultados = listarCliente();
          foreach ($resultados as $key => $r){ ?>
            <tr>
              <td><?php echo $r['id']; ?></td>  
              <td><?php echo $r['identificacion']; ?></td>  
              <td><?php echo $r['nombre']; ?></td>
              <td><?php echo $r['telefono']; ?></td>
              <td><?php echo $r['correo']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Aqui se muestran todos los registros de los Clientes</div>
      </div>
    </main>
    <footer>
      Turmero, Aragua, Venezuela RIF: J-41238766-9.
    </footer>
  </body>
</html>