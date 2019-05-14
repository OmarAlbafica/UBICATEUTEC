<?php

/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */ 
$link = mysqli_connect("localhost","root",""); 
mysqli_select_db( $link,"tourutec");
$link2 = mysqli_connect("localhost","root","","tourutec"); 

/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función htmlentities para evitar inyecciones SQL. */ 
$myusuario = mysqli_query($link,"select user from usuario where user = '".htmlentities($_POST["username"])."'");
$nmyusuario = mysqli_num_rows($myusuario); 

//Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario... 
if($nmyusuario != 0)
{ 
  $sql = "select user from usuario where estado = 'ACTIVO' and user = '".htmlentities($_POST["username"])."' and pass = '".htmlentities($_POST["password"])."'"; 
  $myclave = mysqli_query($link,$sql); 
  $nmyclave = mysqli_num_rows($myclave);
  //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
  if($nmyclave != 0)
  { 
      session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] = $_POST["username"]; 

$sql2 = "select tipo from usuario where estado = 'ACTIVO' and user = '".htmlentities($_POST["username"])."' and pass = '".htmlentities($_POST["password"])."'";


/* consulta SELECT */
if ($resultado = $link2->query($sql2)) {

    echo 'Número de resultados: '. $resultado->num_rows;

    /* recorrer los resultados  */
    while ( $fila = $resultado->fetch_assoc() ) {
        $tipo=$fila['tipo'];
    }


}
    if($tipo =='ADMIN'){
      //nombre del usuario logueado. 
      //Direccionamos a nuestra página principal del sistema. 
    $_SESSION["tipo"] = $tipo;
      header ("Location: ADMIN/indexa.php");
      }else{
        $_SESSION["tipo"] = $tipo;
      header ("Location: /COLA/cola.php");
      
      }
     mysqli_free_result( $result );






     
   }
   else{ 
      echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.href=\"login.php\"</script>"; 
   } 
}
else
{ 
    echo"<script>alert('El usuario no existe.'); window.location.href=\"login.php\"</script>";
} 
mysqli_close($link); ?>

