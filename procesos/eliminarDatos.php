<?php 
    require_once "../crud/crud.php";
    $id = $_POST['id'];

	$registro=new Crud;
    echo $registro->eliminarDatos($id);      
?>
