<?php 
    require_once "../crud/crud.php";
    $datos=array(
            'codigo'=>$_POST['codigou'],
            'nombre'=>$_POST['nombreu'],
            'estado'=>$_POST['estadou'],
            'FK_ambiente'=>$_POST['FK_ambienteu'],
            'novedad'=>$_POST['novedadu'],
            'idEquipo'=>$_POST['idEquipo']
            );
    $registro=new Crud;
    echo $registro->actualizarDatos($datos);        
?>
