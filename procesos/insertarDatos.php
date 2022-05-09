<?php 
    require_once "../crud/crud.php";
    $datos=array(
            'codigo'=>$_POST['codigo'],
            'nombre'=>$_POST['nombre'],
            'estado'=>$_POST['estado'],
            'FK_ambiente'=>$_POST['FK_ambiente'],
            'novedad'=>$_POST['novedad']
            );
    $registro=new Crud;
    echo $registro->insertarDatos($datos);        
?>