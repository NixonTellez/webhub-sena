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
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
	<script defer src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/a32e8b867e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/Logo-de-SENA-sin-fondo-naranja-300x300.png"/>

	<title>Ambientes</title>
</head>
<body>
    <header class="header-top">
        <div class="container-header">
            <div class="header-main">
                <div class="logo">
                    <img src="../img/logohubblanco.png" alt="">
                </div>
                <div class="open-nav-menu">
                    <span></span>
                </div>
                <div class="menu-overlay">

                </div>
                    <nav class="nav-menu">
                        <div class="close-nav-menu">
                            <img src="../img/svg/x-solid.svg" alt="">
                        </div>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="../inventario.php">Inventario</a>
                            </li>
                            <li class="menu-item  menu-item-active">
                                <a href="ambientes.php">Ambientes</a>
                            </li>
                            <li class="menu-item">
                                <a href="../procesos/salir.php">Cerrar sesión</a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div> 
    </header>
	<h1>Ambientes</h1>
</body>
</html>