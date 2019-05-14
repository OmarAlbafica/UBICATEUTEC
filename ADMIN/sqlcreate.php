<?php
// Include config file
require_once "../conexion.php";
$sql = mysqli_query($link,"SELECT * FROM sitio ");
$sql2 = mysqli_query( $link,"SELECT * FROM qr" );
$sql3 = mysqli_query($link,"SELECT * FROM imgubicate" );
$sql4 = mysqli_query($link,"SELECT * FROM detalle_sitio" );
 
// Define variables and initialize with empty values
$idsitio = $nombre = $tipo = $idqr = $idusuario = "";

 if(isset($_POST['enviar'])){
   //$idsitio = $_POST['idsitio'];//idsitio iddetallesitio idqr idsitioimg     
    $nombre = $_POST['sitio']; // nombresitio nombredetallesitio
    $tipo = $_POST['tipositio']; 
    $historia=$_POST['historia'];
    $anio=$_POST['anio'];
    $estructura=$_POST['estructura'];
   
mysqli_query($link,"INSERT INTO sitio(idsitio, sitio, tipositio) 
    VALUES('$idsitio','$nombre','$tipo')");

mysqli_query($link,"INSERT INTO detalle_sitio(iddetalle_sitio, idsitio, historia, nombre, anio_creacion, estructura) 
VALUES('$idsitio', '$idsitio', '$historia', '$nombre','$anio', '$estructura')");

     

$archivo=$_FILES['img']['tmp_name'];
$ruta= "../../img/".$_FILES['img']['name'];
$ruta2= "../../qr/".$_FILES['img']['name'];
move_uploaded_file($archivo,$ruta);
mysqli_query($link,"INSERT INTO imgubicate (img, nombre, idsitio) VALUES ('$ruta', '$nombre', '$idsitio') ");

$archivo2=$_FILES['imgqr']['tmp_name'];
$ruta= "../../img/".$_FILES['img']['name'];
$ruta2= "../../qr/".$_FILES['imgqr']['name'];
move_uploaded_file($archivo2,$ruta2);
mysqli_query($link,"INSERT INTO qr (idqr, nombre, fechaqr, idsitio) VALUES ('$nombre', '$ruta2','$idsitio') ");
mysqli_close($link);
}

  

?>