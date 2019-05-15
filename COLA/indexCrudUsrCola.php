<?php

?>
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


    <?php 
    include("seguridad.php");
          include("seguridadcola.php");
       ?>




<?php require_once 'navcola.php'; ?>
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
  <div class="container section">
  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">textsms</i>
          <input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Buscar</label>
        </div>
      </div>
    </div>
  </div>
  </div>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);
  });
  </script>



 <div class="container" style="margin-top: -5%; width: 100%;" >

 
  <div class="row" style="margin-top: 20px">
  
    <table class="responsive-table striped" style="margin-top: 20px">
      <thead>
        
        <th style="color: blue">No</th>
        <th style="color: blue">Nombre</th>
        <th style="color: blue">Apellido</th>
        <th style="color: blue">User</th>
        <th style="color: blue">Teléfono</th>
        <th> <a href="nuevo_userCola1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
      
      </thead>
      
      
<?php
      
      require_once 'indexCrudUsrColaPHP.php';

?>
    </table>
  
  </div>
</div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>
        