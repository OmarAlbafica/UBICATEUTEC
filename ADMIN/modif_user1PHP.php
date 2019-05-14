<?php 
 
 $consulta=ConsultarUsuario($_GET['idusurario']);

 function ConsultarUsuario($id_user){
  include "../conexion.php";
  $sentencia="SELECT * FROM usuario WHERE idusurario='".$id_user."'";
  $resultado=$link->query($sentencia) or die("Error al consultar user".mysqli_Error());
  $fila=$resultado->fetch_assoc();
  return[
    $fila['nombre'],
    $fila['apellido'],
    $fila['direccion'],
    $fila['telefono'],
    $fila['correo'],
    $fila['user'],
    $fila['pass'],
    $fila['estado'],
    $fila['tipo']
  ];

 }


?>