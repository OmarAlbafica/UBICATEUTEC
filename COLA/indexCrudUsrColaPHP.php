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
    
 
          echo "<td>  <a href='verUSerCola.php?idusurario=".$fila['idusurario']."'> <button type='button' class='btn btn-danger'>Ver inf.</button></a></td>";
        echo "</tr>";



      }

      ?>