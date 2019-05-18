<!DOCTYPE html>
  <html >
    <head>
      <title>Detalle de edificio</title>
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
    var instances = M.Sidenav.init(elems);
  });
   $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    
      $(document).ready(function(){
    $('.tabs').tabs();
  });

    </script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <body >
    
<div class="conteiner"  style="margin-top: -5%; width: 100%;" >
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Historia</a></li>
        <li class="tab col s3"><a href="#test2">Ubicación</a></li>
        <li class="tab col s3"><a href="#test3">Dependencias</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    <b><h1 class="black-text ">Historia</h1></b>
    <blockquote class="black-text" style="text-align: justify;">Salud Lorem ipsum ajksfnsajdfdnvskldnfgvsdfsdfjsdnf nfjk ndfnsadfn n fa snfa na kn n n lkanmsdmaskdmaklsdm na lksdnalksdna klkaskldnas Lorem ipsum ajksfnsajdfdnvskldnfgvsdfsdfjsdnf nfjk ndfnsadfn n fa snfa na kn n n lkanmsdmaskdmaklsdm na lksdnalksdna klkaskldnas Lorem ipsum ajksfnsajdfdnvskldnfgvsdfsdfjsdnf nfjk ndfnsadfn n fa snfa na kn n n lkanmsdmaskdmaklsdm na lksdnalksdna klkaskldnas Lorem ipsum ajksfnsajdfdnvskldnfgvsdfsdfjsdnf nfjk ndfnsadfn n fa snfa na kn n n lkanmsdmaskdmaklsdm na lksdnalksdna klkaskldnas Lorem ipsum ajksfnsajdfdnvskldnfgvsdfsdfjsdnf nfjk ndfnsadfn n fa snfa na kn n n lkanmsdmaskdmaklsdm na lksdnalksdna klkaskldnas Lorem ipsum ajksfnsajdfdnvskldnfgvsdfsdfjsdnf nfjk ndfnsadfn n fa snfa na kn n n lkanmsdmaskdmaklsdm na lksdnalksdna klkaskldnas Lorem ipsum ajksfnsajdfdnvskldnfgvsdfsdfjsdnf nfjk ndfnsadfn n fa snfa na kn n n lkanmsdmaskdmaklsdm na lksdnalksdna klkaskldnas</blockquote>
    </div>

    <div id="test2" class="col s12">
    <b><h1 class="black-text ">Ubicación</h1></b>
    <blockquote class="black-text ">Lorem ipsum ajksfnsajdfdnvskldnfgvsdfsdfjsdnf nfjk ndfnsadfn n fa snfa na kn n n lkanmsdmaskdmaklsdm na lksdnalksdna klkaskldnas</blockquote>
    </div>

    <div id="test3" class="col s12">
     <b><h1 class="black-text ">Dependencias</h1></b>
    <blockquote class="black-text ">Lorem ipsum ajksfnsajdfdnvskldnfgvsdfsdfjsdnf nfjk ndfnsadfn n fa snfa na kn n n lkanmsdmaskdmaklsdm na lksdnalksdna klkaskldnas</blockquote>
    </div>
  </div>
  
</div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    </body>
<?php require_once 'footer.php'; ?>
   
  </html>