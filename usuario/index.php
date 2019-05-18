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


<?php require_once 'nav.php';?>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
   $(document).ready(function(){
    $('.sidenav').sidenav();
  });
      
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
      indicators: false,
      height: 650,
      duration:500,
      interval:1000,
    });
  });


    </script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <body>
    

       <div class="slider">
    <ul class="slides">
      <li>
       <img src="img/campus.jpg" height="100px"> <!-- random image -->
        <div class="caption left-align">
          <h2 class="white-text text-lighten-3"><b>Edificios y Casas</b></h2>
          <!--h2 class="grey-text text-lighten-3"><b>UTEC</b></h2-->
        </div>
      </li>
      <li>
        <img src="img/museo.jpg" height="100px"> <!-- random image -->
        <div class="caption center-align">
          <h2 class="black-text text-lighten-3"><b>Sitios de interés</b></h2>
          <!--h2 class="grey-text text-lighten-3"><b>UTEC</b></h2-->
        </div>
      </li>
      <li>
        <img src="img/laboratorios.jpg" height="100px"> <!-- random image -->
        <div class="caption right-align">
          <h2 class="white-text text-lighten-3"><b>Laboratorios</b></h2>
          <!--h2 class="grey-text text-lighten-3"><b>UTEC</b></h2-->
        </div>
      </li>
    </ul>
  </div>



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    </body>
<?php require_once 'footer.php'; ?>
   
  </html>