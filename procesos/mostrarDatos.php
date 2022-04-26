<?php 
    require_once "../crud/crud.php";
    $obj=new Crud();
    $datos=$obj->mostrarDatos();

    $tabla='<table class="table table-light" id="tabla">
    <thead>
        <tr class="font-weight-bold">
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Ambiente</td>
            <td>Estado</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <tbody>';
    $datosTabla="";
    foreach ($datos as $key => $value) {
        $datosTabla=$datosTabla.'<tr>
                                <td>'.$value['codigo'].'</td>
                                <td>'.$value['nombre'].'</td>
                                <td>'.$value['FK_ambiente'].'</td>
                                <td>'.$value['estado'].'</td>
                                <td>
                                    <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['idEquipo'].')" data-toggle="modal" data-target="#actualizarModal">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    
                                </td>
                                <td>
                                    <span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['idEquipo'].')">
                                        <li class="fas fa-trash-alt"></li>
                                    </span>
                                </td>
                            </tr>'; 
    }
    echo $tabla.$datosTabla.'</tbody></table>';
?>
<script>
    var tabla=document.querySelector("#tabla");

    var dataTable=new DataTable(tabla,{
        labels: {
    placeholder: "Buscar:",
    perPage: "{select} Registros por pagina",
    noRows: "Registro no Encontrado",
    info: "Mostrando registros del {start} al {end} de {rows} Registros"}
    });
        
</script>