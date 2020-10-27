<?php 
include "../../controllers/controller-producto.php";
eliminarProducto($_POST['id'] );
header("Location:" . $_SERVER['HTTP_REFERER']);
