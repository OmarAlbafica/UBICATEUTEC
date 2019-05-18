<?php
// Include config file
require_once "../conexion.php";
$sql = mysqli_query($link,"SELECT * FROM sitio ");
$sql2 = mysqli_query( $link,"SELECT * FROM qr" );
$sql3 = mysqli_query($link,"SELECT * FROM imgubicate" );
$sql4 = mysqli_query($link,"SELECT * FROM detalle_sitio" );
 
// Define variables and initialize with empty values
$idsitio = $nombre = $tipo = $idqr = $idusuario = $idlugar = $nombrelugar = $tipolugar = $capacidad = $desc = $planta = $abreviatura = $anio_lugar = $idimg = $idqr = " ";

 if(isset($_POST['enviar'])){
    $idsitio = $_POST['idsitio'];//idsitio iddetallesitio idqr idsitioimg     
    $nombre = $_POST['sitio']; // nombresitio nombredetallesitio
    $tipo = $_POST['tipositio']; 
    //$historia=$_POST['historia'];
    $anio=$_REQUEST['anio1'];
    $estructura=$_POST['estructura'];
    $idlugar=$idsitio;
    $ubicacion=$_POST['ubicacion'];
//echo $anio;
    
   $sql="INSERT INTO sitio (`idsitio`, `sitio`, `tipositio`, `fecha_construccion`, `fecha_b`) 
    VALUES ('$idsitio','$nombre','$tipo', '$anio', CURRENT_TIME())";

mysqli_query($link,$sql);

/*mysqli_query($link,"INSERT INTO detalle_sitio (`iddetalle_sitio`, `idsitio`, `historia`, `nombre`, `anio_creacion`, `estructura`,`fecha_b`,`ubicacion`) 
VALUES('$idsitio', '$idsitio', '$historia', '$nombre','$anio', '$estructura',CURRENT_TIME(),'$ubicacion')");*/

     
/*
$archivo=$_FILES['img']['tmp_name'];
$ruta= "../img/".$_FILES['img']['name'];
$ruta2= "../qr/".$_FILES['img']['name'];
move_uploaded_file($archivo,$ruta);
mysqli_query($link,"INSERT INTO `imgubicate`(`idimg`, `nombre`, `idsitio`, `imgr`, `fechaimg`) VALUES ('$idimg', '$nombre', '$idsitio', '$ruta',CURRENT_TIME())");
/*echo $ruta;
echo $nombre;
echo $idsitio;*/
/*$archivo2=$_FILES['imgqr']['tmp_name'];
$ruta= "../img/".$_FILES['img']['name'];
$ruta2= "../qr/".$_FILES['imgqr']['name'];
move_uploaded_file($archivo2,$ruta2);

mysqli_query($link,"INSERT INTO `qr`(`idqr`, `nombre`, `fechaqr`, `idsitio`) VALUES ('$idqr', '$ruta2', CURRENT_TIME(), '$idsitio')");*/




//die(mysqli_error($link));
mysqli_close($link);
header("location: indexCrudAdm.php");

}
  

?>