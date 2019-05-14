<?php 
	ModificarUSer($_POST['nombre'], $_POST['apellido'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['user'], 
		$_POST['pass'], $_POST['estado'], $_POST['tipo'], $_POST['idusurario']);

	function ModificarUSer($nom, $ape, $dir, $tel, $correo, $user, $pass, $estado, $tipo, $id_usu){
		include '../conexion.php';
		$sentencia = "UPDATE usuario SET nombre='".$nom."', apellido='".$ape."', direccion='".$dir."', telefono='".$tel."', correo='".$correo."', user='".$user."', pass='".$pass."', estado='".$estado."', tipo='".$tipo."' WHERE idusurario= '".$id_usu."'";
		$link->query($sentencia) or die ("Error al actualizar datos".mysqli_error($link));
	}


?>
<script type="text/javascript">
	alert("Datos Actualizados exitosamente");
	window.location.href='indexCrudUsr.php';
</script>