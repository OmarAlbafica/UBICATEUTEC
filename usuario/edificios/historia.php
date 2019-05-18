<?php 
//include("sqledificios.php");
$id=$_REQUEST['id'];
 require_once "../../conexion.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT sitio.idsitio, sitio.sitio, sitio.tipositio, detalle.historia, detalle.anio_creacion, detalle.ubicacion, img.imgr, qr.nombre FROM sitio sitio
                    INNER JOIN detalle_sitio detalle ON sitio.idsitio = detalle.idsitio
                    INNER JOIN imgubicate img ON sitio.idsitio = img.idsitio
                    INNER JOIN qr qr ON sitio.idsitio = qr.idsitio
                    WHERE sitio.idsitio = '$id'";
                    //$sql= "SELECT * FROM sitio";

                   

                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
        
                                while($row = mysqli_fetch_array($result)){

echo "<blockquote class='black-text' style='text-align: justify;''>".$row['historia']."</blockquote>";


                                    
                                    
                                }
                               // echo "</tbody>";                            
                            //echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

/*echo "<blockquote class='black-text' style='text-align: justify;''>".$row['historia']."</blockquote>";*/

 ?>