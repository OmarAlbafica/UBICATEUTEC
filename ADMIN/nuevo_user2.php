<?php 

	NuevoUser($_POST['nombre'], $_POST['apellido'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['user'], $_POST['pass'], $_POST['estado'], $_POST['tipo']);

	function NuevoUser($nom, $ape, $dir, $tel, $correo, $user, $pass, $estado, $tipo){
		include "../conexion.php";
			$sentencia = "INSERT INTO usuario (nombre, apellido, direccion, telefono, correo, user, pass, estado, tipo, fecha_creacion) VALUES ('".$nom."', '".$ape."', '".$dir."', '".$tel."', '".$correo."', '".$user."', '".$pass."','".$estado."', '".$tipo."', NOW())" ;
			$link->query($sentencia) or die("Error al ingresar los datos".mysqli_error($link));
	}

?>

<script type="text/javascript">
	alert("Usuario ingresado correctamente");
	window.location.href="indexCrudUsr.php";
</script>