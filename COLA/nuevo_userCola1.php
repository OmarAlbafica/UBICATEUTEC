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

    <?php include("seguridad.php");
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
<body>
<div class="container">
  
  <div class="row s12" style="margin-top: 20px">

  	<table class="responsive-table striped" style="margin-top: 20px">
      <thead>
  		<span> <h1>Agregar Usuario</h1> </span>
  		<br>
	  <form action="nuevo_userCola2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;" enctype="multipart/form-data">
      <input type="hidden" name="no">
  		<label>Nombre: </label>
  		<input type="text" id="nombre" name="nombre"><br>
  		
  		<label>Apellido: </label>
  		<input type="text" id="apellido" name="apellido"><br>
  		
  		<label>Dirección: </label>
  		<input type="text" id="direccion" name="direccion"><br>

  		<label>Teléfono: </label>
  		<input type="tel" id="telefono" name="telefono" pattern="[2-9]{4}-[0-9]{4}"><br>

  		<label>Correo: </label>
  		<input type="text" id="correo" name="correo"><br>

  		<label>User: </label>
  		<input type="text" id="user" name="user"><br>

  		<label>Password: </label>
  		<input type="text" id="pass" name="pass"><br>

  		<label>estado: </label>
  		<input type="text" id="estado" name="estado"><br>

  		<label>tipo: </label>
  		<input type="text" id="tipo" name="tipo"><br>
  		
   		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
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