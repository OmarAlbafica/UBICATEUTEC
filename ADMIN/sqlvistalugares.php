 <?php
                    // Include config file
       $id= $_GET['id'];         
                    // Attempt select query execution
                    /*$sql = "SELECT sitio.idsitio, sitio.sitio, sitio.tipositio, detalle.historia, detalle.anio_creacion, img.img, qr.nombre FROM sitio sitio
                    INNER JOIN detalle_sitio detalle ON sitio.idsitio = detalle.idsitio
                    INNER JOIN imgubicate img ON sitio.idsitio = img.idsitio
                    INNER JOIN qr qr ON sitio.idsitio = qr.idsitio";*/
                   $sql2= "SELECT lugares.idlugar, lugares.tipo, lugares.nombre, lugares.capacidad, lugares.descripcion, lugares.planta, lugares.abreviatura, lugares.fecha_construccion, lugares.idsitio, lugares.fecha_b, lugares.ubicacion,sitio.sitio FROM lugares lugares
                   INNER JOIN sitio sitio ON lugares.idsitio=sitio.idsitio
                   WHERE lugares.idlugar = '$id'";

                   

                    if($result2 = mysqli_query($link, $sql2)){
                        if(mysqli_num_rows($result2) > 0){
                            echo "<table class='responsive-table striped'>";
                                echo "<thead >";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Nombre</th>";
                                        echo "<th>Tipo Lugar</th>";
                                        echo "<th>Capacidad</th>";
                                        echo "<th>Descripcion</th>";
                                        echo "<th>Ubicacion</th>";
                                        echo "<th>Abreviatura</th>";
                                        echo "<th>Fecha de Construccion</th>";
                                        echo "<th>Edificio</th>";
                                      //  echo "<th>Acciones</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row2 = mysqli_fetch_array($result2)){
                                    echo "<tr>";
                                        echo "<td>" . $row2['idlugar'] . "</td>";
                                        echo "<td>" . $row2['nombre'] . "</td>";
                                        echo "<td>" . $row2['tipo'] . "</td>";
                                        echo "<td>" . $row2['capacidad'] . "</td>";
                                        echo "<td>" . $row2['descripcion'] . "</td>";
                                        echo "<td>" . $row2['planta'] . "</td>";
                                        echo "<td>" . $row2['abreviatura'] . "</td>";
                                        echo "<td>" . $row2['fecha_construccion'] . "</td>";
                                        echo "<td>" . $row2['sitio'] . "</td>";
                                        
                                                                           
                                        

                                        /*echo "<td>";
                                            
                                            echo "<a href='readlugares.php?id=". $row2['idlugar'] ."' title='Ver sitio' data-toggle='tooltip'><i class='material-icons'>visibility</i></a>";
                                            echo "<a href='updatelugares.php?id=". $row2['idlugar'] ."' title='Modificar sitio' data-toggle='tooltip'><i class='material-icons'>update</i></a>";
                                            echo "<a href='deletelugares.php?id=". $row2['idlugar'] ."' title='Borrar sitio' data-toggle='tooltip'><i class='material-icons'>delete_forever</i></a>";
                                        echo "</td>";*/
                                    echo "</tr>";
                                    
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result2);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                      echo mysqli_error($link);
                        //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>