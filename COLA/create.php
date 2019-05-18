<?php
include("sqlcreate.php");
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

  
      
</script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <body >
    

 <div class="container" style="margin-top: 5%; width: 100%;" >

                    <div class="">
                        <h2>Crear Sitio</h2>
                    </div>
                    
                   <div class="row">
                       
                        <form enctype="multipart/form-data" action="sqlcreate.php" method="POST" class="col s12 "  >

                    <p>Por favor rellena los siguientes campos.</p>

                        <div class="input-field col s2 ">
                            <label>ID Sitio</label>
                            <input type="text" name="idsitio" id="idsitio" class="form-control" value=""  >
                                                      
                        </div>

                        <div class="input-field col s4 ">
                            <label>Nombre Sitio</label>
                            <input type="text" name="sitio" id="sitio" class="form-control" value="" >
                                                      
                        </div>

                        <div class="input-field col s3 ">
                           
                          <div class="row">
                           <label>Tipo Sitio</label>
                            <select class = "browser-default" name="tipositio" id="tipositio" required>
                                  <option value = "" disabled selected>Selecciona Tipo Sitio </option>
                                  <option value = "Edificio">Edificio</option>
                                  <option value = "Casa">Casa</option>
                                  
                               </select>
                          </div>

                              </div>

                       <div class="input-field col s3 ">
                        <div class="row">
                          <label>Tipo Estructura</label>                            
                            <select class = "browser-default" name="estructura" id="estructura" class="" value=""  >
                                  <option value = "" disabled selected >Selecciona Tipo Estructura  </option>
                                  <option value = "Complejo Deportivo">Complejo Educativo</option>
                                  <option value = "Complejo Deportivo">Complejo Deportivo</option>
                                  <option value = "Museo">Museo</option>
                                  <option value = "Clinica">Clinica</option>
                               </select>
                       
                        </div>
                        </div>
                            



                        <div class=" col s2 ">
                            <label>Año de creacion</label>
                            <input type="date" name="anio1"  class="form-control" value="" >
                      
                        </div>
                        <div class="input-field col s4 ">
                            <label>Ubicacion del Sitio</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="" >
                                                      
                        </div>

                       

                        <!--div class="input-field col s6">
                            <label>Historia</label>
                        
                           <textarea name="historia" id="historia" class="materialize-textarea" ></textarea> 
                           
                        </div-->

                         
                         
                        <!--div class="input-field col s6">
                            <label>Imagen</label><br><br>
                            <input id="file_url" type="file" name="img" class="">  
                        </div>

                        <div class="input-field col s6">
                            <label>QR</label>
                            <br>
                            <br>
                            <input id="file_url" type="file" name="imgqr" class="form-control">
                         </div-->

                        
                        <br>
                        <div class="input-field col s12">
                        <input type="submit" name="enviar" class="btn btn-primary" value="Crear nuevo sitio">
                        <a href="indexCrudAdm.php" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>


                   </div>

 </div>

  


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>

   
  </html>
