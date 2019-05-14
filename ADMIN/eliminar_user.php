<?php
	EliminarUser($_GET['idusurario']);

	function EliminarUser($id_user)
	{
		include "../conexion.php";
		$sentencia="DELETE FROM usuario WHERE idusurario='".$id_user."' ";
		$link->query($sentencia) or die ("Error al eliminar".mysqli_error($link));
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='indexCrudUsr.php';
</script>