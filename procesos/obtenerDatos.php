<?php 

	require_once "../crud/Crud.php";

	$obj = new crud();

	echo json_encode($obj->obtenerDatos($_POST['idEquipo']));


 ?> 