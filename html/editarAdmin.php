<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/editar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
    <script defer src="../js/responsive-menu.js"></script>
    <script src="https://kit.fontawesome.com/400dbe3ce8.js" crossorigin="anonymous"></script>
    <title>Inicio</title>
</head>
<body>
    <header class="header">      
        <nav class="nav">
            <a href="editar.html"><img class="logo" src="../img/logohubblanco.png" alt=""></a>
            <button class="nav-toggle"> <i class="fas fa-bars"></i> </button>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="" class="nav-menu-link nav-link nav-menu-link_active">Editar perfil</a></li>
                <li class="nav-menu-item"><a href="reservas.html" class="nav-menu-link nav-link">Reservas</a></li>
                <li class="nav-menu-item"><a href="../indexx.html" class="nav-menu-link nav-link">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
        <form class="form">
            <h2 class="form__title">Editar perfil</h2>
            <div class="form__container">
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Nombres">
                </div>
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Apellidos">
                </div>
                <div class="form__group">
                    <select class="form__input2">
                        <option class="form__options" value="">Tipo documento</option>
                        <option class="form__options" value="">Cédula</option>
                        <option class="form__options" value="">Pasaporte</option>
                    </select>
                </div>
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Número documento">
                </div>
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Correo">
                </div>
                <input type="submit" value="Guardar Cambios" class="form__submit">
            </div>
        </form>

        <form class="form__password">
            <h2 class="form__title">Cambiar contraseña</h2>
            <div class="form__container">
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Nueva contraseña">
                </div>
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Repetir contraseña">
                </div>
                <input type="submit" value="Guardar Cambios" class="form__submit">
            </div>
        </form>
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