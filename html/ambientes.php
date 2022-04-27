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
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/ambientes.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
	<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
	<script defer src="js/responsive-menu.js"></script>
    <script src="https://kit.fontawesome.com/a32e8b867e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/Logo-de-SENA-sin-fondo-naranja-300x300.png"/>

	<title>PDO</title>
</head>
<body>
	<header class="header">       
        <nav class="nav">
            <a href="ambientes.php"><img class="logo" src="../img/logohubblanco.png" alt=""></a>
            <button class="nav-toggle"> <i class="fas fa-bars"></i> </button>
            <ul class="nav_menu">
                <li class="nav-menu-item"><a href="../inventario.php" class="nav-menu-link nav_link">Inventario</a></li>               
                <li class="nav-menu-item"><a href="ambientes.php" class="nav-menu-link nav_link nav-menu-link_active">Ambientes</a></li>
                <li class="nav-menu-item"><a href="../procesos/salir.php" class="nav-menu-link nav_link">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
	<h1>Ambientes</h1>
</body>
</html>