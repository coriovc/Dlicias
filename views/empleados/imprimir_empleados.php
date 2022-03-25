<?php
require_once "../../controladores/empleado.php";
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
    <title>Imprimir - Empleados </title>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../../imagenes/logo/logo-dark-deli.png">
      </div>
      <h1>Listado de Empleados</h1>
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
            <th>Nombre y apellido</th>
            <th>Cedula</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Cargo</th>
            <th>Sueldo</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $resultados = listarEmpleado();
          foreach ($resultados as $key => $r){ ?>
            <tr>
              <td><?php echo $r['id']; ?></td>
              <td><?php echo $r['nombre'].' '.$r['apellido']; ?></td>
              <td><?php echo $r['cedula']; ?></td>
              <td><?php echo $r['telefono']; ?></td>
              <td><?php echo $r['correo']; ?></td>
              <td><?php echo $r['direccion']; ?></td>
              <td><?php echo $r['cargo']; ?></td>
              <td><?php echo $r['sueldo']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Aqui se muestran todos los registros de los Empleados</div>
      </div>
    </main>
    <footer>
      Turmero, Aragua, Venezuela RIF: J-41238766-9.
    </footer>
  </body>
</html>