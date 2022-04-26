<?php 

	session_start();
	$usuario = $_SESSION['username'];

	if(!isset($usuario)){
        header("location: html/login.php");
    }else{
    	if($usuario!="admin"){
	        header("location: html/reservas.php");
	    }	
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/inventario.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
	<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<header class="header">
        <nav class="nav">
            <a href="inventario.php"><img class="logo" src="img/logohubblanco.png" alt=""></a>
            <button class="nav-toggle"> <i class="fas fa-bars"></i> </button>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="html/editar.html" class="nav-menu-link nav-link nav-menu-link_active">Inventario</a></li>
                <li class="nav-menu-item"><a href="html/reservas.php" class="nav-menu-link nav-link">Ambientes</a></li>
                <li class="nav-menu-item"><a href="procesos/salir.php" class="nav-menu-link nav-link">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

	<div class="container font-weight-bold">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<span class="btn btn-secondary" data-toggle="modal" data-target="#insertarModal">
									<i class="fas fa-plus-circle"></i> Nuevo registro
								</span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12">
								
								<div id="tablaDatos"></div>			
									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php require_once "modalInsert.php" ?>
	<?php require_once "modalUpdate.php" ?>

	<script src="librerias/bootstrap4/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrap4/popper.min.js"></script>
	<script src="librerias/bootstrap4/bootstrap.min.js"></script>
	<script src="librerias/sweetalert.min.js"></script>
	<script src="jsc/crud.js"></script>


	<script type="text/javascript">
		mostrar();
	</script>

</body>
</html>