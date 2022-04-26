<?php 
	require '../crud/Conexion.php';
	session_start();

	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];

	$q = "SELECT COUNT(*) as contar, FK_rol FROM usuario where correo = '$correo' and contraseña = '$contraseña' and activo = 1";
	$consulta = mysqli_query($conexion1, $q);
	$array = mysqli_fetch_array($consulta);

	if ($array['contar']>0) {

		if ($array['FK_rol'] == 1) {
			$_SESSION['username'] = "admin";
			header("location: ../inventario.php");
		} else {
			$_SESSION['username'] = "user";
			header("location: ../html/reservas.php");
		}
	} else {
		header("location: ../html/login.php?emaiIncorrecto=1");
	}
?>