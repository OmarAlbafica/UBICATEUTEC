
 <?php
 include("sqlupdate.php");include("seguridad.php");
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
     <div class="col s12">
                    
<div class="">
                        <h2>Modificar sitio</h2>
                    </div>
                    <p>Moficar sitios.</p>

                   
                    <form enctype="multipart/form-data" action="" method="POST">
                        
                        <div class="col s6">
                            <label>Nombre Sitio</label>
                            <input type="text" name="sitio" class="form-control" value="<?php echo $row['sitio'];?>" >
                           
                        </div>
                          <div class="input-field col s4 ">
                           
                          <div class="row">
                           <label>Tipo Sitio</label>
                            <select class = "browser-default" name="tipositio" id="tipositio" >
                                  <option value = "<?php echo $row['tipositio'] ?>" disabled ><?php echo $row['tipositio']?></option>
                                  <option value = "Edificio">Edificio</option>
                                  <option value = "Casa">Casa</option>
                                  
                               </select>
                          </div>

                              </div>
                                <div class="col s2 ">
                            <label>Año</label>
                            <input type="text" name="anio_creacion"  class="form-control"value="<?php echo $row2['anio_creacion']?>"></input>
                         </div>
                      
                        <div class=" col s7" align="left" value="">
                            <label>Historia</label>
                            <textarea  name="historia"  class="materialize-textarea" wrap="hard soft" >
                              <?php echo $row2['historia']?>
                            </textarea>
                            
                                                    </div>
                      

                        <div class="col s12">
                            <label>Imagen</label><br>
                             <input id="file_url" type="file" name="img" class="form-control">
                             <br><br><br>
                         </div>

                        <div class="col s12">
                            <label>QR</label><br>    
                             
                          <input id="file_url" type="file" name="imgqr" class="">
                          <br><br><br><br>
                        </div>
                       

                        <div class="col s12">
                            <input type="hidden" name="id" value=""/>

                        <input type="submit" name="enviar2" class="btn btn-primary" value="Modificar sitio">


                        <a href="indexCrudAdm.php" class="btn btn-default">Cancelar</a>
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





