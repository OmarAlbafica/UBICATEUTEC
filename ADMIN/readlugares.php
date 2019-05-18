<?php
// Check existence of id parameter before processing further
//include("sqlread.php");
// Include config file
    require_once "../conexion.php";
    include("seguridad.php");
          include("seguridadadmin.php");

?>
<!DOCTYPE html>
  <html >
    <head>
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>

<?php require_once 'navadmin.php'; ?>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
   $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  
      
</script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <body >
    <!--------------------------------------------------------------------------------->
    

    <!------------------------------------------------------------------------>
     <div class="col s12 offset-s4"> 
      <h5>Detalles de Lugar</h5>
    </div>
    <?php 
    include("sqlvistalugares.php");
     ?>


   
    
  <!---------------------------------------------------------------------->
    <div class="col ">
    
      <a href="indexCrudAdm.php" class="btn blue">Regresar</a>
    </div>
     </div>
</div>
 

  

    <!--------------------------------------------------------------------------------->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>



                    
                    
 



