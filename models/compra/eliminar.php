<?php 
include "../../controllers/controller-compra.php";
eliminarCompra($_POST['id'] );
header("Location:" . $_SERVER['HTTP_REFERER']);
