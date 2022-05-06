<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
    <script defer src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/a32e8b867e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/Logo-de-SENA-sin-fondo-naranja-300x300.png"/>
    <title>Regitrarse</title>
</head>
<body>
<header class="header">
        <div class="container">
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
                            <li class="menu-item menu-item-active">
                                <a href="../index.html">Inicio</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="" data-toggle="sub-menu">Nuestras instalaciones <i class="plus"></i> </a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="instalacionesc.html">Piso 1 Coworking</a></li>
                                    <li class="menu-item"><a href="instalacionesc.html">Piso 5 Soluciones creativas</a></li>
                                    <li class="menu-item"><a href="instalacionesc.html">Piso 13 Laboratorio financiero</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="galeria.html">Galería</a>
                            </li>
                            <li class="menu-item">
                                <a href="login.php">Iniciar sesión</a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div> 
    </header>

    <form class="form__registro">
        <h2 class="form__title">Registro</h2>
        <div class="form__container">
            <div class="form__group">
                <input type="text" class="form__input" placeholder="Nombres" required="true">
            </div>
            <div class="form__group">
                <input type="text" class="form__input" placeholder="Apellidos" required="true">
            </div>
            <div class="form__group">
                <select class="form__input2"  required="true">
                    <option class="form__options" value="" disabled selected hidden>Tipo documento</option>
                    <option class="form__options" value="">Cédula</option>
                    <option class="form__options" value="">Pasaporte</option>
                </select>
            </div>
            <div class="form__group">
                <input type="text" class="form__input" placeholder="Número documento" required="true">
            </div>
            <div class="form__group">
                <input type="text" class="form__input" placeholder="Teléfono">
            </div>
            <div class="form__group">
                <input type="email" class="form__input" placeholder="Correo" required="true">
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="email" class="form__input" placeholder="Repita Correo">
            </div>
            <div class="form__group">
                <input type="password" class="form__input" placeholder="Contraseña" required="true">
            </div>
            <div class="form__group">
                <input type="password" class="form__input" placeholder="Repita contraseña">
            </div>
            <p> <input type="checkbox" name="cbox1"> Estoy de acuerdo con los <a href="./terminos-condiciones.html" target="_blank">términos y condiciones</a></p>
            <input type="submit" value="Registrarse" class="form__submit">
            <a href="login.php">Iniciar sesión</a>
        </div>
    </form>
    <!--footer-->
    <footer class="footer">
        <div class="overlay-footer-container">
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
            <div class="overlay_color"></div>
        </div>
        <div class="group-2">
            <small>&copy; 2022 <b>HUB de innovación 4.0 Regional distrito capital -Todos los Derechos Reservados. </b> </small>
        </div>
    </footer>
    
</body>
</html>