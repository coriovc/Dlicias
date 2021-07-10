<?php 
session_start();
require_once "../controladores/usuario.php"; 
require_once "../controladores/auditoria.php"; 
$usu = buscarUsuarioLogin();
if(!$usu){

    header('location:../index.php');
}
else{
    $_SESSION['admin']=$usu;
    //echo $_SESSION['admin']['tipo_usuario'];
    registrarOperacion($usu['nombre']." ha iniciado sesion",$usu['id'],"ENTRADA");
header('location: ../home.php');

} 

?>