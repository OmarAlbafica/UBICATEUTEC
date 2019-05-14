<?php 
//Reanudamos la sesión 
@session_start(); 
//Validamos si existe realmente una sesión activa o no 
if($_SESSION["tipo"] != "ADMIN")
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: ../cola.php"); 
  exit(); 
}



?>