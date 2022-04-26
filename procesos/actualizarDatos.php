<?php 
    require_once "../crud/crud.php";
    $datos=array(
            'codigo'=>$_POST['codigou'],
            'nombre'=>$_POST['nombreu'],
            'ambiente'=>$_POST['ambienteu'],
            'estado'=>$_POST['estadou'],
            'novedad'=>$_POST['novedadu'],
            'id'=>$_POST['id']
            );
    $registro=new Crud;
    echo $registro->actualizarDatos($datos);        
?>
