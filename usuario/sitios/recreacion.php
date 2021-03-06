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
      
   
    </script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <body>
    
    <div class="container section" >
  <div class="row" >
    <div class="col s3">
  


      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img src="../img/basket.jpg">
          
          <a href="recreacionDetalle.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
          <span class="card-title black-text"><b>Poli Deportivo</b></span>
          <p class="black-text">Poli deportivo UTEC.</p>
        </div>
      </div>            



</div>

    <div class="col s3">
  


      <div class="card small">
        <div class="card-image">
          <img src="../img/gimnasio.jpg">
          
          <a href="recreacionDetalle.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
          <span class="card-title black-text"><b>Gimnasio</b></span>
          <p class="black-text">Gimnasio estudiantil UTEC.</p>
        </div>
      </div>            



</div> 

    <div class="col s3">
  


      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activador" src="../img/salon.jpg">
          
          <a href="recreacionDetalle.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
          <span class="card-title black-text"><b>Salón de juegos</b></span>
          <p class="black-text">Salón de juegos UTEC.</p>
        </div>
      </div>            



</div>

 

</div>
</div>




  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    </body>
<?php require_once 'footer.php'; ?>
   
  </html>