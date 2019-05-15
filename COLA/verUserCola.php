<?php
      require_once 'verUSerColaPHP.php';
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
  

<div class="container">

 <div class="row s12" style="margin-top: 20px" >

      
      
      <table class="responsive-table striped" style="margin-top: 20px">

      <thead>

      <span> <h3>Ver Datos de Usuario</h1> </span>
        <div class="divider"></div>
      <br>
    <form action="modif_user2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="idusurario" value="<?php echo $_GET['idusurario']?> ">
    <label>Nombre: </label><br>
    <?php echo $consulta[0]?>
      <br><br>

      <label>Apellido: </label><br>
    <?php echo $consulta[1]?>
      <br><br>
      
      <label>Dirección: </label><br>
    <?php echo $consulta[2]?>
      <br><br>

      <label>Teléfono: </label><br>
    <?php echo $consulta[3]?>
      <br><br>

      <label>Correo: </label><br>
    <?php echo $consulta[4]?>
      <br><br>

      <label>Usuario: </label><br>
    <?php echo $consulta[5]?>
      <br><br>

      <label>Password: </label><br>
    <?php echo $consulta[6]?>
      <br><br>

      <label>Estado: </label><br>
    <?php echo $consulta[7]?>
      <br><br>

      <label>Tipo: </label><br>
    <?php echo $consulta[8]?>
      <br><br>
      
     </form>

  </thead>  



   
      

    </table>
      </div>   
  </div>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
<?php require_once 'footer.php'; ?>
   
  </html>
        