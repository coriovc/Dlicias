<?php 
include "../../controllers/controller-usuario.php";
eliminarUsuario($_POST['id'] );
header("Location:" . $_SERVER['HTTP_REFERER']);
