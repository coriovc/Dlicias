<?php 
include "../../controllers/controller-cliente.php";
eliminarCliente($_POST['id'] );
header("Location:" . $_SERVER['HTTP_REFERER'] ."?eliminado=1");