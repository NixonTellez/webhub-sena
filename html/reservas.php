<?php 

    session_start();
    $usuario = $_SESSION['username'];
    $rol = $_SESSION['rol'];

    if(!isset($usuario)){
        header("location: login.php");
    }else{
        if($rol!="user"){
            header("location: ../inventario.php");
        }   
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/reservas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/400dbe3ce8.js" crossorigin="anonymous"></script>
    <script defer src="../js/index.js"></script>
    <title>Inicio</title>
    <link rel="shortcut icon" href="../img/Logo-de-SENA-sin-fondo-naranja-300x300.png" />
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="editar.html"><img class="logo" src="../img/logohubblanco.png" alt=""></a>
            <button class="nav-toggle"> <i class="fas fa-bars"></i> </button>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="../procesos/obtenerDatosUser.php" class="nav-menu-link nav-link">Editar perfil</a></li>
                <li class="nav-menu-item"><a href="reservas.html" class="nav-menu-link nav-link nav-menu-link_active">Reservas</a></li>
                <li class="nav-menu-item"><a href="../procesos/salir.php" class="nav-menu-link nav-link">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    
    <h1 class="title">Reservar ambiente</h1>
    <div class="container">
        <div class="card">
            <img src="../img/cabinas.jpeg" alt="">
            <h4>Cabina</h4>
            <a href="formreserva.html">Reservar</a>
        </div>
        <div class="card">
            <img src="../img/coworking.jpeg" alt="">
            <h4>Trabajo colaborativo</h4>
            <a href="">Reservar</a>
        </div>
        <div class="card">
            <img src="../img/coworking2.jpeg" alt="">
            <h4>Trabajo colaborativo</h4>
            <a href="">Reservar</a>
        </div>
        <div class="card">
            <img src="../img/salaColaborativa.jpeg" alt="">
            <h4>Sala colaborativa</h4>
            <a href="">Reservar</a>
        </div>
        <div class="card">
            <img src="../img/desarrollo.jpeg" alt="">
            <h4>Desarrollo digital</h4>
            <a href="">Reservar</a>
        </div>
        <div class="card">
            <img src="../img/desarrollo2.jpeg" alt="">
            <h4>Desarrollo digital</h4>
            <a href="">Reservar</a>
        </div>
        <div class="card">
            <img src="../img/Inspiración.png" alt="">
            <h4>Zona de Inspiración</h4>
            <a href="">Reservar</a>
        </div>
        <div class="card">
            <img src="../img/seguridad.jpeg" alt="">
            <h4>Pensiones</h4>
            <a href="">Reservar</a>
        </div>
        <div class="card">
            <img src="../img/terraza.jpg" alt="">
            <h4>Terraza</h4>
            <a href="">Reservar</a>
        </div>
    </div>

    <!--footer-->
    <footer class="footer">
        <div class="group-1">
            <div class="box">
                <div>
                    <a href="#">
                        <img src="../img/logohubblanco.png" alt="logo HUB de innovación 4.0">
                    </a>
                </div>
            </div>
            <div class="box">
                <h2>CONTACTO</h2>
                     <p>Teléfono: 546 16 00 </p>                     
                     <p>Correo: equinteroc@sena.edu.co</p>
            </div>
            <div class="box">
                <h2>UBICACIÓN</h2>
                  <p>Carrera 13 # 65-10 Bogotá, Colombia.</p>
                 <p>SENA - Centro De Servicios Financieros</p> 
                 <p>Pisos 1, 5 y 13</p> 
            </div>
        </div>
        <div class="group-2">
            <small>&copy; 2022 <b>HUB de innovación 4.0 Regional distrito capital -Todos los Derechos Reservados. </b> </small>
        </div>
    </footer>
</body>
</html>