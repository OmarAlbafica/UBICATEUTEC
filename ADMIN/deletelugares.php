<?php
include("sqldeletelugares.php");
include("seguridad.php");
include("seguridadadmin.php");
require_once 'navadmin.php';
?>


<!DOCTYPE html>
  <html >
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <!--Import Google Icon Font-->
     
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
      
        <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      



<script>
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
   $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  
      
</script>

    </head>


  
    
    <body >
    

 <div class="container" style="margin-top: 2%; width: 100%;" >

  <div class="row">
      <div class="col s4 offset-s4"><h2>Eliminar Lugar</h2></div>
      <div class="col s6 offset-s4">
        <form action="" method="POST" class="">
                           
         <div class="">
          <input type="hidden" name="id" class="" value="<?php echo trim($_GET["id"]); ?>"/>
          <h5>Estas seguro de querer borrar este registro?</h5>
          <br>
                            
          <input type="submit" value="Yes" class="btn red" >
           <a href="indexCrudAdm.php" class="btn ">No</a>
                            
          </div>
          </form>
          </div>
          </div>
     </div>  
                       



  


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>



                    
                    
 



