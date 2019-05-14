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





<?php require_once 'nav.php'; ?>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
   $(document).ready(function(){
    $('.sidenav').sidenav();
  });
      
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });
$(document).ready(function(){
    $('.carousel').carousel();
  });
</script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <body>
    

 <div class="container" style="margin-top: 2%; width: 100%;" >
  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>
      

   <dir class="row">
 <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
</dir>         
  <div class="row grey darken-4 ">
      
 
  
  <h2 class=" dark-text text-darken-4">Ubicate Utec </h2>
  <div class="carousel carousel-slider center">

      <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
  <div class=" carousel-item card col s12 m14 offset-m4 l7 offset-l4 pink darken-4 "  href="#">
    <div class="card-image waves-effect waves-block waves-light pink darken-4">
      <img  class="activator" src="img1.jpg" >
    </div>
    <div class="card-content pink darken-4">
      <span class="card-title activator dark-text"><h5>Nuestro proyecto</h5><i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal pink darken-4">
      <span class="card-title "><h5>Nuestro proyecto</h5><i class="material-icons right">close</i></span>
      <p>Desarrollado con el fin de comprender de primera mano porque el legado cultural que trata de demostrarnos la Universidad Tecnologica de El Salvador</p>
    </div>
  </div>

    <div class=" carousel-item card col s12 m14 offset-m4 l4 offset-l4 pink darken-4" href="#">
    <div class="card-image waves-effect waves-block waves-light pink darken-4">
      <img  class="activator" src="img1.jpg" >
    </div>
    <div class="card-content pink darken-4">
      <span class="card-title activator dark-text"><h5>Nuestro proyecto</h5><i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal pink darken-4">
      <span class="card-title "><h5>Nuestro proyecto</h5><i class="material-icons right">close</i></span>
      <p>Desarrollado con el fin de comprender de primera mano porque el legado cultural que trata de demostrarnos la Universidad Tecnologica de El Salvador</p>
    </div>
  </div>
</div>
</div>



<div class="row "></div>
<div class="divider"></div>
<H3 class="black-text" >Acciones destacadas</H3>
<br><br>

</div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>