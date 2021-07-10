<?php 

if(!isset($_SESSION))
    session_start();

if(!function_exists('conectar'))
{
        function conectar(){
            $local=mysqli_connect("localhost", "root", "", "Dlicias-BD") or die ("NO SE PUDO CONECTAR CON MYSQL");
            return $local;  
        }
}
if(!isset($db))
    $db = conectar();
        
?>
 