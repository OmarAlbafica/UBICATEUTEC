<?php
// Check existence of id parameter before processing further
include("sqlread.php");
// Include config file
    require_once "../conexion.php";
    include("seguridad.php");
          include("seguridadadmin.php");

?>
<!DOCTYPE html>
  <html >
    <head>
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>

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
    <!--------------------------------------------------------------------------------->
    
<div class="container">
  <div class="row">
    <div class="col s12">
      <label>Nombre Sitio</label>
      <input type="text" name="" sr value="<?php echo $row['sitio'];?>" >
      
    </div>

    <div class="col s6">
      <h5>Imagen del Sitio</h5>
      <img class="  materialboxed" width="300" height="250" src="<?php echo $row['imgr']; ?>">
    </div>
    <div class="col s6">
      <h5>Qr del Sitio</h5>
      <label>Qr del Sitio</h5>
      <img class="  materialboxed" width="300" height="250" src="<?php echo $row['nombre']; ?>">
    </div>
    <div class="col s12 offset-s4"> 
      <h5>Detalles de Sitio</h5>
    </div>
    <div class="col s2">
      <label>ID Sitio</label>
      <input type="text" name="" class="" value="<?php echo $row['idsitio'];?>" >
    </div>
    
    <div class="col s3">
      <label>Tipo Sitio</label>
      <input type="text" name="" class="" value="<?php echo $row['tipositio'];?>" >
    </div>

    
    <div class="col s3">
      <label>Año de creacion del Sitio</label>
      <input type="text" name="" class="" value="<?php echo $row['anio_creacion'];?>" >
    </div>
    <div class="col s4">
      <label>Estructura del Sitio</label>
      <input type="text" name="" class="" value="<?php echo $row['estructura'];?>" >
    </div>
   <div class="col s12"> 
    <label>Historia del Sitio</label>
   </div>
    <div class="input-field col s12">

          <i class="material-icons prefix">visibility</i>
          <input id="icon_prefix2" class="materialize-textarea" value="<?php echo $row['historia'];?>" ></input>
          <label for="icon_prefix2"></label>
        </div>
    <!------------------------------------------------------------------------>
     <div class="col s12 offset-s4"> 
      <h5>Detalles de Lugar</h5>
    </div>
    <?php 
    include("sqlreadlugares.php");
     ?>


   
    <!--div class="col s2">
      <label>ID del Lugar</label>
      <input type="text" name="" class="" value="<?php echo $row['idlugar'];?>" >
    </div>
    <div class="col s2">
      <label>Tipo del Lugar</label>
      <input type="text" name="" class="" value="<?php echo $row['tipo'];?>" >
    </div>    
    <div class="col s5">
      <label>Nombre del Lugar</label>
      <input type="text" name="" class="" value="<?php echo $row['nombre'];?>" >
    </div>
    <div class="col s3">
      <label>Capacidad  del Lugar</label>
      <input type="text" name="" class="" value="<?php echo $row['capacidad'];?>" >
    </div>
    
    <div class="col s3">
      <label>Ubicacion del Lugar</label>
      <input type="text" name="" class="" value="<?php echo $row['planta'];?>" >
    </div>
    <div class="col s3">
      <label>Abreviatura del Lugar</label>
      <input type="text" name="" class="" value="<?php echo $row['abreviatura'];?>" >
    </div>
    <div class="col s2">
      <label>Año del Lugar</label>
      <input type="text" name="" class="" value="<?php echo $row['anio_lugar'];?>" >
    </div>
<div class="col s12">
  <label>Descripcion del Lugar</label>
</div>
        <div class="input-field col s12">
          <i class="material-icons prefix">visibility</i>
          
          <input id="icon_prefix2" class="materialize-textarea" value="<?php echo $row['descripcion'];?>"></input>
          <label for="icon_prefix2"></label>
        </div-->
      
   
  <!---------------------------------------------------------------------->
    <div class="col ">
    
      <a href="indexCrudAdm.php" class="btn blue">Regresar</a>
    </div>
     </div>
</div>
 

  

    <!--------------------------------------------------------------------------------->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>



                    
                    
 



