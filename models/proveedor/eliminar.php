<?php 
include "../../controllers/controller-proveedor.php";
eliminarProveedor($_POST['id'] );
header("Location:" . $_SERVER['HTTP_REFERER']);
