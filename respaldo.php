<?php
require_once "controladores/auditoria.php";
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
$servername='localhost';//localhost
$dbusername='root';//root
$dbpassword='';//tupass
$dbname='dlicias-bd';//tuclave

function connecttodb($servername,$dbname,$dbusername,$dbpassword)
{
    
$link=mysqli_connect ($servername,$dbusername,$dbpassword,$dbname);
if(!$link)
{
die('No puedo Conectarme al Administrador MySQL'.mysql_error());
} 
return $link;
} 

$c = connecttodb($servername,$dbname,$dbusername,$dbpassword);

$fechaDeLaCopia = "-".date("d-l-F-Y");    
$ficheroDeLaCopia =$dbname.$fechaDeLaCopia.".sql";
$sistema="show variables where variable_name= 'basedir'";
$restore=mysqli_query($c,$sistema);
$DirBase=mysqli_fetch_assoc($restore);
$DirBase=$DirBase['Value'];
$primero=substr($DirBase,0,1);
if ($primero=="/") {
    $DirBase="mysqldump";
} 
else 
{
    $DirBase=$DirBase."/bin/mysqldump";

    registrarOperacion($_SESSION['admin']['nombre']." ha hecho un respaldo de la base de datos",$_SESSION['admin']['id'],"RESPALDO");
    
     
}


$executa="$DirBase --host=$servername --user=$dbusername --password=$dbpassword -R -c  --add-drop-table $dbname > \"C:/xampp/htdocs/Dlicias/Respaldos/$ficheroDeLaCopia\""; 
system($executa); 

header( "Content-Disposition: attachment; filename=\"".$ficheroDeLaCopia."\"");
header("Content-type: application/force-download");
@readfile("C:/xampp/htdocs/Dlicias/Respaldos/".$ficheroDeLaCopia);

unlink($ficheroDeLaCopia);


?>
