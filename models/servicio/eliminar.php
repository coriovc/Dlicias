<?php 
include "../../controllers/controller-servicio.php";
eliminarServicio($_POST['id'] );
header("Location:" . $_SERVER['HTTP_REFERER']);
