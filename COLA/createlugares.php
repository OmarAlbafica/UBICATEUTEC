<?php
include("sqlcreatelugares.php");
include("seguridad.php");
include("seguridadadmin.php");
require_once 'navadmin.php';


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
    

 <div class="container" style="margin-top: 5%; width: 100%;" >

                   
                   <div class="row">
                       
                        <form enctype="multipart/form-data" action="sqlcreatelugares.php" method="POST" class="col s12 "  >

                        <input type="hidden" name="id" class="" value="<?php echo trim($_GET["id"]); ?>"/>

                        
                         <div class="">
                           <h2>Lugares del sitio</h2>
                         </div>
                             <p>Por favor rellena los siguientes campos.</p>
                         <div class="input-field col s3 ">
                            
                           
                            <div class="row">
                              <label>Tipo de Lugar</label>
                               <select class = "browser-default" name="tipolugar" id="tipolugar" class="" value=""  >
                                  <option value = "" disabled selected>Selecciona Tipo Lugar </option>
                                  <option value = "Laboratirio de computacion">Laboratirio de computacion</option>
                                  <option value = "Laboratorio de TI">Laboratorio de TI</option>
                                  <option value = "Laboratorio de serigrafia">Laboratorio de serigrafia</option>
                                  <option value = "Laboratorio de electronica">Laboratorio de electronica</option>
                               </select>

                            </div>
                        </div>
                        <div class="input-field col s5 ">
                            <label>Nombre de Lugar</label>
                            <input type="text"  name="nombrelugar" class="form-control" value="" >
                        </div>
                        <div class="input-field col s4 ">
                            <label>Capacidad de Lugar</label>
                            <input type="text"  name="caplugar" class="form-control" value="" >
                        </div>
                        <div class="input-field col s10  ">
                            <label>Descripcion de Lugar</label>
                            <input type="text"  name="deslugar" class="form-control" value="" >
                        </div>
                        <div class=" col s2 ">
                            <label>Año de Lugar</label>
                            <input type="date"  name="aniolugar" class="form-control" value="" >
                        </div>
                        <div class="input-field col s6 ">
                            <label>Ubicacion de Lugar</label>
                            <input type="text"  name="ubilugar" class="form-control" value="" >
                        </div>
                        <div class="input-field col s6 ">
                            <label>Abreviatura de Lugar</label>
                            <input type="text"  name="ablugar" class="form-control" value="" >
                        </div>
                        
                        <br>
                        <div class="input-field col s12">
                        <input type="submit" name="enviar" class="btn btn-primary" value="Crear nuevo lugar">
                        <a href="indexCrudAdm.php" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>


                   </div>

 </div>

  


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>
