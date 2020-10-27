<?php
    session_start();
    include_once('conexion.php');
    $email = $_POST["email"];
    $passwd  = $_POST['password'];
    $password  = $passwd;//crypt($passwd,"##");
    $sql = "SELECT * FROM usuarios  WHERE usuario = '$_REQUEST[email]' or email = '$_REQUEST[email]'";
    $consulta = $base_de_datos->query( $sql );
    $fila = $consulta->fetchAll(PDO::FETCH_OBJ);
  
    if ( $fila[0]->password == $password ) {
        $_SESSION["email"]    = $fila[0]->email;
        $_SESSION["password"] = $fila[0]->password;
        header("location:../home.php");
        die();
    }
    else{
    header("location:../index.php");
} die();
        
