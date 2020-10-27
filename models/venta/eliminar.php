<?php 
include "../../controllers/controller-venta.php";
eliminarVenta($_POST['id'] );
header("Location:" . $_SERVER['HTTP_REFERER']);
