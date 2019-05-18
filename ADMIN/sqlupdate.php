<?php

// Include config file
include("../conexion.php");
 //---------------------------------------------------------------------------------------------
$idsitio=$_GET['id'];
echo $idsitio;

$sql= "SELECT * FROM sitio WHERE idsitio = '$idsitio' ";
$sql2= "SELECT * FROM detalle_sitio WHERE idsitio = '$idsitio' ";
   
 
                   
$result = mysqli_query($link, $sql);
 $result2 = mysqli_query($link, $sql2);
	                        
$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);
                                   
//mysqli_result($result);
//mysqli_result($result2);
//$tipo =$row['tipositio'];
if(isset($_POST['enviar2'])){
                                 
$nombre = $_POST['sitio']; // nombresitio nombredetallesitio
$tipo = $_POST['tipositio']; 
$historia=$_POST['historia'];
$anio=$_POST['anio_creacion'];
                                //$fechaqr=$_POST['fechaqr'];

mysqli_query($link,"UPDATE sitio SET  sitio='$nombre', tipositio='$tipo' WHERE idsitio='$idsitio' ");
mysqli_query($link,"UPDATE detalle_sitio SET  historia='$historia', anio_creacion='$anio' WHERE idsitio='$idsitio'");



$archivo=$_FILES['img']['tmp_name'];
$ruta= "../img/".$_FILES['img']['name'];
$img=$_FILES['img']['name'];
//$ruta2= "../qr/".$_FILES['img']['name'];
move_uploaded_file($archivo,$ruta);

$archivo2=$_FILES['imgqr']['tmp_name'];
//$ruta= "../img/".$_FILES['img']['name'];
$ruta2= "../qr/".$_FILES['imgqr']['name'];
$img2=$_FILES['img']['name'];
move_uploaded_file($archivo2,$ruta2);


/*if ($img != null && $img2 != null) {
	mysqli_query($link,"UPDATE imgubicate SET imgr='$ruta' WHERE idsitio='$idsitio' ");
	mysqli_query($link,"UPDATE qr SET nombre='$ruta2' WHERE idsitio='$idsitio' ");

}*/
	if ($img != null | $img2 != null) {
	//mysqli_query($link,"UPDATE imgubicate SET imgr='$ruta' WHERE idsitio='$idsitio' ");
	//mysqli_query($link,"UPDATE qr SET nombre='$ruta2' WHERE idsitio='$idsitio' ");

if ($img != null) {
		mysqli_query($link,"UPDATE imgubicate SET imgr='$ruta' WHERE idsitio='$idsitio' ");
	}

if ($img2 != null) {
		mysqli_query($link,"UPDATE qr SET nombre='$ruta2' WHERE idsitio='$idsitio' ");
	}
	


	

	
}


echo mysqli_error($link);
mysqli_close($link);
header("location: indexCrudAdm.php");
}

 
                    // Close connection
                   /// mysqli_close($link); 
 ?>