<?php
    include('../procesos/msjs.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/recuperar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
    <script defer src="../js/responsive-menu.js"></script>
    <script src="https://kit.fontawesome.com/a32e8b867e.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/Logo-de-SENA-sin-fondo-naranja-300x300.png"/>

    <title>Recuperar contraseña</title>
</head>
<body>

    <header class="header">       
        <nav class="nav">
            <a href="../index.html"><img class="logo" src="../img/logohubblanco.png" alt=""></a>
            <button class="nav-toggle"> <i class="fas fa-bars"></i> </button>
            <ul class="nav_menu">
                <li class="nav-menu-item"><a href="../index.html" class="nav-menu-link nav_link">Inicio</a></li>
                <li class="nav-menu-item"><p href="" class="nav-menu-link-insta nav_link link-display">Nuestras instalaciones<i class="fa-solid fa-chevron-down dropdown-button"></i></p>
                    <div class="instalaciones-dropdown">
                        <ul class="nav-menu-dropdown">
                            <li class="nav-menu-item-drop"><a href="./instalacionesc.html" class="nav-link-dropdown link-dropdown">Piso 1 - Coworking</a></li>
                            <li class="nav-menu-item-drop"><a href="./instalacioness.html" class="nav-link-dropdown link-dropdown">Piso 5 - Soluciones Creativas</a></li>
                            <li class="nav-menu-item-drop"><a href="./instalacionesl.html" class="nav-link-dropdown link-dropdown">Piso 13 - Laboratorio financiero</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-menu-item"><a href="./galeria.html" class="nav-menu-link nav_link">Galería</a></li>
                <li class="nav-menu-item"><a href="./login.php" class="nav-menu-link nav_link nav-menu-link_active">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>

    <form id="form_recuperar" class="form__recuperar" action="../procesos/recuperarClave.php" method="POST" >
        <h2 class="form__title">Recuperar contraseña</h2>
        <div class="form__container">
            <div class="form__group">
                <input type="email" class="form__input" name="email" placeholder="Correo">
            </div>
            <input type="submit" value="Recuperar" class="form__submit">
            <div class="hreflogin">
                <a href="login.php">Iniciar sesión</a>
                <a href="registro.php">Registrarse</a>
            </div>            
        </div>
    </form>
    <!--footer-->
    <footer class="footer">
        <div class="overlay-container-hub">
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
            <div class="overlay-color"></div>
        </div>
        <div class="group-2">
            <small>&copy; 2022 <b>HUB de innovación 4.0 Regional distrito capital -Todos los Derechos Reservados. </b> </small>
        </div>
    </footer>
</body>
</html>