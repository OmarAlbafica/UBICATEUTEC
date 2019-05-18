<?php
// Include config file
require_once "../conexion.php";

// Define variables and initialize with empty values
$idsitio = $idlugar = $nombrelugar = $tipolugar = $capacidad = $desc = $planta = $abreviatura = $anio_lugar = "";

/*if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    para seleccion multiple select
   name="select[]"
   echo $_GET["id"];
} */


 
if (isset($_POST['enviar'])) {
    echo $_REQUEST['id'];

    $nombrelugar=$_POST['nombrelugar'];
    $tipolugar=$_POST['tipolugar'];
    $capacidad=$_POST['caplugar'];
    $desc=$_POST['deslugar'];
    $planta=$_POST['ubilugar'];
    $abreviatura=$_POST['ablugar'];
    $anio_lugar=$_POST['aniolugar'];
     $idsitio= $_REQUEST['id'];

$sql="INSERT INTO lugares (`idlugar`, `tipo`, `nombre`, `capacidad`, `descripcion`, `planta`, `abreviatura`, `fecha_construccion`, `idsitio`,`fecha_b`,`ubicacion`) VALUES  ('$idlugar', '$tipolugar', '$nombrelugar', '$capacidad', '$desc', '$planta', '$abreviatura', '$anio_lugar', '$idsitio',CURRENT_TIME(),'$planta')";
mysqli_query($link,$sql);
 
 mysqli_close($link);
header("location: indexCrudAdm.php");
  }  else{
    mysqli_error($link); 
  }
    


   
    
    // Close connection
    //mysqli_close($link);
     


   
//mysqli_close($link);
//header("location: indexCrudAdm.php");


  
