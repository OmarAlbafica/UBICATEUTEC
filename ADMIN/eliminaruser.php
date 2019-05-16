 <?php

$fila=$_GET['idusurario'];

echo "<script>
      if(confirm('Pulce ACEPTAR para confirmar la eliminacion o CANCELAR la eliminacion'))
      {
           window.location.href='eliminar_user.php?idusurario=".$fila."';
      }
      else
      {
          window.location.href='indexCrudUsr.php';
      };      
      </script>";


 ?>