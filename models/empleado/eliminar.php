<?php 
include "../../controllers/controller-empleado.php";
eliminarEmpleado($_POST['id'] );
header("Location:" . $_SERVER['HTTP_REFERER']);
