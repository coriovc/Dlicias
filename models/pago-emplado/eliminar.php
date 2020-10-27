<?php 
include "../../controllers/controller-pago-empleado.php";
eliminarPagoE($_POST['id'] );
header("Location:" . $_SERVER['HTTP_REFERER']);
