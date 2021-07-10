<?php require_once "../../controladores/categoria.php"; 
registrarCategoria();
header("Location:" . $_SERVER['HTTP_REFERER']); ?>