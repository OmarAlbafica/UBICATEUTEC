<?php
                    // Include config file
                    Include("../../conexion.php");
                    
                    // Attempt select query execution
                    $sql = "SELECT sitio.idsitio, sitio.sitio, sitio.tipositio, detalle.historia, detalle.anio_creacion  FROM sitio sitio
                    INNER JOIN detalle_sitio detalle ON sitio.idsitio = detalle.idsitio
                    
                   ";
                    //$sql= "SELECT * FROM sitio";

                   echo "<table>";
echo "<tr>";

                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
        
                                while($row = mysqli_fetch_array($result)){

echo "<td>";
echo "<div class='row'>";
         echo "<div class='col s8 offset-s2'>";
         echo "<div class='card'>";
        echo "<div class='card-image'>";
          echo "<img class='responsive-img' src='../../".$row['imgr']."'>";
          //<img width='100' heigth='100' src=" . $row['nombre']. ">
echo "<a href='detalleEdif.php?id=".$row['idsitio']."' class='btn-floating halfway-fab waves-effect waves-light red'><i class='material-icons'>visibility</i></a>";
        echo "</div>";
        echo "<div class='card-content'>";
          echo "<span class='card-title black-text'><b>Edificio</b></span>";
          echo "<p class='black-text'>".$row['sitio']."</p>";
        echo "</div>";
      echo "</div>";            
echo "</div>";
echo "</div>";
 echo "</td>";

                                    
                                }
echo "</tr>";
echo "</table>";

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
 
                    // Close connection
                    //mysqli_close($link);
                    ?>