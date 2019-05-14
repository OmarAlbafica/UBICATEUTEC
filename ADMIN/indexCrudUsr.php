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

 </div>

  <div class="col-12" id="contenido">

<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <thead>
        <th style="color: blue">No</th>
        <th style="color: blue">Nombre</th>
        <th style="color: blue">Apellido</th>
        <th style="color: blue">User</th>
        <th style="color: blue">Teléfono</th>
        <th> <a href="nuevo_user1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
      </thead>
      
      
      <?php
      include "../conexion.php";
      $sentencia="SELECT * FROM usuario";
      $resultado=$link->query($sentencia) or die(mysqli_error($link));
      while($fila=$resultado->fetch_assoc())
      {
        echo "<tr>";
          echo "<td>"; echo $fila['idusurario']; echo "</td>";
          echo "<td>"; echo $fila['nombre']; echo "</td>";
          echo "<td>"; echo $fila['apellido']; echo "</td>";
          echo "<td>"; echo $fila['user']; echo "</td>";
          echo "<td>"; echo $fila['telefono']; echo "</td>";
    
          echo "<td>  <a href='modif_user1.php?idusurario=".$fila['idusurario']."'> <button type='button' class='btn btn-succes'>Modificar</button></a></td>";
          echo "<td>  <a href='eliminar_user.php?idusurario=".$fila['idusurario']."'> <button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
        echo "</tr>";
      }

      ?>
    </table>
   
  </div>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>

   
  </html>
        