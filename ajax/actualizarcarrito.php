<?php 
require_once  "../controladores/servicio.php";  

if(!isset($_SESSION))
  session_start(); ?>

<div class="datatable table-responsive">
  <table class="table table-bordered table-hover" width="100%">
    <thead>
      <tr>
          <th>Servicio</th>
          <th>Cantidad</th>
          <th>Costo</th>
          <th>Monto</th>
          <th>Accion</th>
      </tr>
    </thead>                                      
    <tbody>
     <?php 
      $total = 0;
      if(isset($_SESSION["venta"]) && is_array($_SESSION["venta"]) && count($_SESSION["venta"])){
      foreach($_SESSION["venta"] as $id_servicio => $elemento){
      $total = $total + intval($elemento['cantidad']) * intval($elemento['precio_v']);
      ?>
      <tr>
          <td><?=$elemento['nombre']?></td>
          <td><?=$elemento['cantidad']?>   </td>
          <td><?=$elemento['precio_v']?> $</td>
          <td><?=intval($elemento['cantidad']) * intval($elemento['precio_v']) ?></td>
          <td><button type="button"onclick="window.location='index.php?removerservicio=<?=$id_servicio ?>';" class="btn badge-danger rounded-pill btn-sm btn-icon"><i class="material-icons-round">clear</i></button></td>
      </tr>
        <?php }
  } ?>  
      <tr>
          <td colspan="2"></td>
          <td>Monto Total: </td>
          <td colspan="2"><?= $total; ?> $</td>
      </tr>                                      
    </tbody>
  </table>
</div>
