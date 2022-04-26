<?php 
    require_once "../crud/crud.php";
    $datos=array(
            'codigo'=>$_POST['codigo'],
            'nombre'=>$_POST['nombre'],
            'ambiente'=>$_POST['ambiente'],
            'estado'=>$_POST['estado'],
            'novedad'=>$_POST['novedad']
            );
    $registro=new Crud;
    echo $registro->insertarDatos($datos);        
?>