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
    
          echo "<td>  <a href='modif_user1.php?idusurario=".$fila['idusurario']."'> <button type='button' class='btn blue'>Modificar</button></a></td>";
          echo "<td>  <a href='eliminaruser.php?idusurario=".$fila['idusurario']."'> <button type='button' class='btn red'>Eliminar</button></a></td>";

          echo "<td>  <a href='verUSer.php?idusurario=".$fila['idusurario']."'> <button type='button' class='btn green'>DETALLES</button></a></td>";
        echo "</tr>";

      }

      ?>