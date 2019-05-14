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
        shift:20,
        padding: 90,
        noWrap:false,
      }
            

        );
  });   
      
</script>
      <!--JavaScript at end of body for optimized lohttp://localhost:8080/UBICATEUTEC/ADMIN/indexCrudUsr.phpading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <body >
    
     <div class="container" style="margin-top: -30%; width: 100%;" >
  <div class="row" >
    <div class="col s12">
      <div class="divider"></div>
      <h4>Bienvenid@</h4>
      <div class="divider"></div>
    <div class="carousel" >
  <div class="carousel-item">
  
    <div class="card large">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../img/users.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Usuarios<i class="material-icons right">more_vert</i></span>
      <p><a href="indexCrudUsr.php">Usuarios</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
    </div>
 
<div class="carousel-item">
      <div class="card large">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../img/sitios.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Sitios<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Sitios</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Sitios<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
    </div>
    <div class="carousel-item">
      <div class="card large">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../img/reporte.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Reportes<i class="material-icons right">more_vert</i></span>
      <dir><p><a href="#">Reportes</a></p></dir>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Reportes<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  </div>
  </div>
</div>
</div>
<div class="divider"></div>
         
<div class="row"></div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>
        