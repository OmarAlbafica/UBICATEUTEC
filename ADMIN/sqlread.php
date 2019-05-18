<?php 
$id= $_GET['id'];
//$id2= $_GET['id2'];
echo $_GET['id'];
//echo $_GET['id2'];
include("../conexion.php");
     $sql="SELECT sitio.idsitio, sitio.sitio, sitio.tipositio ,detalle.historia, detalle.anio_creacion, detalle.estructura, lugares.idlugar, lugares.tipo, lugares.nombre, lugares.capacidad, lugares.descripcion, lugares.planta , lugares.abreviatura, lugares.fecha_construccion, img.imgr, qr.nombre FROM sitio sitio
    INNER JOIN detalle_sitio detalle ON sitio.idsitio = detalle.idsitio
    INNER JOIN lugares lugares ON sitio.idsitio = lugares.idsitio
    INNER JOIN imgubicate img ON sitio.idsitio = img.idsitio
    INNER JOIN qr qr ON sitio.idsitio = qr.idsitio 
    WHERE sitio.idsitio = '$id'";
//if ($link) {
   $result=mysqli_query($link,$sql);
   $row=mysqli_fetch_array($result);
   $idsitio=$row['idsitio'];
   $sitio=$row['sitio'];
   $tipositio=$row['tipositio'];
   $historia=$row['imgr'];
   

/* $sql = "SELECT sitio.idsitio, sitio.sitio, sitio.tipositio, detalle.historia, detalle.anio_creacion, img.img, qr.nombre FROM sitio sitio
                    INNER JOIN detalle_sitio detalle ON sitio.idsitio = detalle.idsitio
                    INNER JOIN imgubicate img ON sitio.idsitio = img.idsitio
                    INNER JOIN qr qr ON sitio.idsitio = qr.idsitio";*/


   //mysqli_free_result($result);
 //quitar pleca para ver error en la sintaxis de base de datos 
//die(mysqli_error($link));
//} 
 // mysqli_close($link);
   
     ?>