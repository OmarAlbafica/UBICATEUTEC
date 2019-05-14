<!DOCTYPE html>
  <html >
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>


    <?php include("seguridad.php");
          include("seguridadadmin.php");
       ?>




<?php require_once 'navadmin.php'; ?>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
   $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  $(function(){
      $('.carousel').carousel({
        duration:500,
        dist: -10,
        shift:50,
        padding: 50,
        fullWidth:false,
        indicators:true,
        noWrap:false,
      }
            

        );
  });   
      
</script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <body >
    
     <div class="container" style="margin-top: 2%; width: 100%;" >

  <div class="row">
    <div class="col l12">
<div class="">
                        <h2 class="">Detalle de Sitios UTEC</h2>
                        <a href="create.php" class="btn btn-info col s2 offset-s10"><i class="material-icons">create</i>  Agregar nuevo sitio</a>
                    </div>
      <?php
                    // Include config file
                    require_once "../conexion.php";
                    
                    // Attempt select query execution
                    /*$sql = "SELECT sitio.idsitio, sitio.sitio, sitio.tipositio, detalle.historia, detalle.anio_creacion, img.img, qr.nombre FROM sitio sitio
                    INNER JOIN detalle_sitio detalle ON sitio.idsitio = detalle.idsitio
                    INNER JOIN imgubicate img ON sitio.idsitio = img.idsitio
                    INNER JOIN qr qr ON sitio.idsitio = qr.idsitio";*/
                    $sql= "SELECT * FROM sitio";

                   

                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='responsive-table striped'>";
                                echo "<thead >";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Nombre</th>";
                                        echo "<th>Tipo Sitio</th>";                                       
                                        echo "<th>Acciones</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['idsitio'] . "</td>";
                                        echo "<td>" . $row['sitio'] . "</td>";
                                        echo "<td>" . $row['tipositio'] . "</td>";
                                                                           
                                        

                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['idsitio'] ."' title='View Record' data-toggle='tooltip'><i class='material-icons'>visibility</i></a>";
                                            echo "<a href='update.php?id=". $row['idsitio'] ."' title='Update Record' data-toggle='tooltip'><i class='material-icons'>update</i></a>";
                                            echo "<a href='delete.php?id=". $row['idsitio'] ."' title='Delete Record' data-toggle='tooltip'><i class='material-icons'>delete_forever</i></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                    
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>




</div>
</div>
            


</div>



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>
        
