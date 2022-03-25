<?php 

require_once("conexion-BD.php");
require_once "auditoria.php";
 
 function buscarUsuarioLogin(){
  global $db;
  $clave=hash('sha256',$_REQUEST['clave']);
 $r = mysqli_query($db,"SELECT * FROM usuario WHERE ci=$_REQUEST[ci] AND clave='$clave' ");
    $temporal = mysqli_fetch_assoc($r); 
  return $temporal;
}

 function tienePrivilegios($modulo,$privilegio){
  global $db; 
 $r = mysqli_query($db,"SELECT * FROM usuario_has_privilegios WHERE id_usuario=".$_SESSION['admin']['id']." AND id_privilegio=(select id from privilegios where modulo='$modulo' and privilegio='$privilegio')");
    $temporal = mysqli_fetch_assoc($r); 
  return $temporal;
}

function validar_correo(){
  extract($_POST);
  global $db;
$_SESSION['eliminada']=1;
  $sql="SELECT * FROM usuario WHERE correo='".$correo."'";
 

  if ($res=mysqli_query($db,$sql)){
$pregunta='';
    while ($data=mysqli_fetch_assoc($res)){
    return $data;
  }//fin de while
   return null;
  }else{
    echo "ERROR EN LA BASE DE DATOS";

  }//fin del if

}//fin funcion validar correo

function verificar_respuesta(){
  extract($_POST);
  global $db;

  $sql="SELECT * FROM usuario WHERE respuesta='".$respuesta."' AND id=".$id_usuario;

  if($res=mysqli_query($db,$sql)){
    if(mysqli_num_rows($res)>0){
      ?>
      <script type="text/javascript">
      var id_usuario="<?php echo $id_usuario;?>"
        alert("RESPUESTA CORRECTA");
        window.location="clave_nueva.php?id_usuario="+id_usuario;
        </script>
    <?php
    }else{
    ?>
      <script type="text/javascript">
        alert("RESPUESTA INCORRECTA");
        window.location="pregunta.php"
        </script>
    <?php
    }//fin if mysqli num rows
  }else{

  }//fin de if mysqli query

}//fin funcion verificar respuesta


function cambiar_clave(){
  extract($_POST);
  global $db;
  if ($clave_nueva=="" || $clave_nueva_confirm==""){
    ?>
      <script type="text/javascript">
      var id_usuario="<?php echo $id_usuario;?>"
        alert("LOS CAMPOS DE CLAVE NUEVA NO DEBEN ESTAR VACIOS");
        window.location="../vistas/recuperacion/clave_nueva.php?id_usuario="+id_usuario;
      </script>
    <?php
  }else{
    # en caso de que no vengan vacias
    if($clave_nueva==$clave_nueva_confirm){
      # en caso de que sean iguales
      
      $clave_nueva=hash('sha256',$clave_nueva);
      $sql="UPDATE usuario SET clave='".$clave_nueva."' WHERE id=".$id_usuario;
      
      if($res=mysqli_query($db,$sql)){
        # si no hubo error en la conexion
        if($res){
          # en caso de que se hizo el upddate
          ?>
      <script type="text/javascript">
        alert("CAMBIO DE CLAVE EXITOSO");
        window.location="login.php";
      </script>

    <?php
    
        }else{
          # en caso de que fallo el update
          ?>
      <script type="text/javascript">
        alert("FALLA AL CAMBIAR CLAVE");
        window.location="recuperar.php";</script>
    <?php

        }

        }else{
          #si hubo falla de conexion
          echo "ERROR EN LA BASE DE DATOS";
        }
    }else{
      # en caso de no ser iguales
      ?>
      <script type="text/javascript">
      var id_usuario="<?php echo $id_usuario;?>"
        alert("LOS CAMPOS DE CLAVES DEBEN SER IGUALES");
        window.location="clave_nueva.php?id_usuario="+id_usuario;
      </script>
      <?php
    }
  }//fin if clave vacia

  }

 function registrarUsuario(){
  global $db;
$ci = $_REQUEST['ci'];  
$nombre = $_REQUEST['nombre'];  
$clave= $_REQUEST['clave'];
$clave=hash('sha256',$clave);  
$correo = $_REQUEST['correo'];
$tipo_usuario =$_REQUEST['tipo_usuario'];  
$pregunta = $_REQUEST['pregunta'];  
$respuesta = $_REQUEST['respuesta'];



$cl =  mysqli_query($db, "SELECT * FROM usuario WHERE ci='$ci'" );
$c = mysqli_fetch_assoc($cl);
if($c){
  die('Cedula Duplicada');
}else {
  

  mysqli_query($db,"INSERT INTO usuario VALUES (NULL,'".$ci."','".$nombre."','".$clave."','".$correo."','".$tipo_usuario."','".$pregunta."','".$respuesta."')");
  
for ($i=1; $i <= 18; $i++) { 
        $sql="INSERT INTO usuarios_has_privilegios VALUES(null,".$id_usuario.",".$i.",'no')";
        
      }
}
}

 function listarUsuario(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT  * from usuario ORDER BY id DESC");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function eliminarUsuario(){ 
  global $db;
  mysqli_query($db,"DELETE FROM usuario WHERE id=$_REQUEST[id]");
  
}

 ?>