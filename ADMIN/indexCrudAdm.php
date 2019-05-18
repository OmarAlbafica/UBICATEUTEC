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
      <meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″>
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



<?php
include("sqlindexCrudAdm.php");
?>


</div>




</div>
</div>

<div class="row">
    <div class="col l12">




</div>
</div>
            


</div>



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>
        
