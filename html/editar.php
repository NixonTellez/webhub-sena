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
    $resultado = $_SESSION['userData'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/reservas.css">
    <link rel="stylesheet" href="../css/editar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
    <script defer src="../js/responsive-menu.js"></script>
    <script src="https://kit.fontawesome.com/a32e8b867e.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/Logo-de-SENA-sin-fondo-naranja-300x300.png"/>

    <title>Editar perfil</title>
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
        <form class="form__editar" action="" method="POST">
            <h2 class="form__title">Editar perfil</h2>
            <div class="form__container">
                <div class="form__group">
                    <input name="primerNombre" id="primerNombre" type="text" class="form__input" placeholder="Nombres" value="<?php echo $resultado['primerNombre']?>">
                </div>
                <div class="form__group">
                    <input name="segundoNombre" id="segundoNombre" type="text" class="form__input" placeholder="Nombres" value="<?php echo $resultado['segundoNombre']?>">
                </div>
                <div class="form__group">
                    <input name="primerApellido" id="primerApellido" type="text" class="form__input" placeholder="Apellidos" value="<?php echo $resultado['primerApellido']?>">
                </div>
                <div class="form__group">
                    <input name="segundoApellido" id="segundoApellido" type="text" class="form__input" placeholder="Apellidos" value="<?php echo $resultado['segundoApellido']?>">
                </div>
                <div class="form__group">
                    <select class="form__input2">
                        <option class="form__options" value="<?php echo $resultado['tipoDocumento']?>"><?php echo $resultado['tipoDocumento']?></option>
                        <option class="form__options" value="CC">Cédula</option>
                        <option class="form__options" value="PASAPORTE">Pasaporte</option>
                    </select>
                </div>
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Número documento" value="<?php echo $resultado['numeroDocumento']?>">
                </div>
                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Correo" value="<?php echo $resultado['correo']?>">
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