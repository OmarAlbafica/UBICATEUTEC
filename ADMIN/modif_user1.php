<?php
      require_once 'modif_user1PHP.php';
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

    <?php include("../seguridad.php");
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

<body>
<div class="todo">
  

  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Datos de Usuario</h1> </span>
  		<br>
	  <form action="modif_user2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="idusurario" value="<?php echo $_GET['idusurario']?> ">
    <label>Nombre: <?php echo $consulta[0]?></label>
      <input type="text" id="nombre" name="nombre"; value="<?php echo $consulta[0] ?>"><br>
      
      <label>Apellido: </label>
      <input type="text" id="apellido" name="apellido"; value="<?php echo $consulta[1] ?>"><br>
      
      <label>Dirección: </label>
      <input type="text" id="direccion" name="direccion"; value="<?php echo $consulta[2] ?>"><br>

      <label>Teléfono: </label>
      <input type="tel" id="telefono" name="telefono" pattern="[0-9]{4}-[0-9]{4}"; value="<?php echo $consulta[3] ?>"><br>

      <label>Correo: </label>
      <input type="text" id="correo" name="correo"; value="<?php echo $consulta[4] ?>"><br>

      <label>User: </label>
      <input type="text" id="user" name="user"; value="<?php echo $consulta[5] ?>"><br>

      <label>Password: </label>
      <input type="text" id="pass" name="pass"; value="<?php echo $consulta[6] ?>"><br>

      <label>estado: </label>
      <input type="text" id="estado" name="estado"; value="<?php echo $consulta[7] ?>"><br>

      <label>tipo: </label>
      <input type="text" id="tipo" name="tipo"; value="<?php echo $consulta[8] ?>"><br>
      <!--input type="radio" name="tipo" value="1">Administrador
      <input type="radio" name="tipo" value="2" checked>Gerente
      <br-->



      <!--select >
        <option><?php echo $consulta[8] ?></option>
       <option name="tipo" value="volvo">Administrador</option>
       <option name="tipo" value="saab">Gerente</option>
      </select-->
      
      
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  


</div>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
 </html>