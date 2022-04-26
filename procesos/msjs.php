 <?php
if(isset($_REQUEST['errorEmail'])){ ?>
         <script> alert('El correo no existe, por favor verifique.')</script>
<?php }

if(isset($_REQUEST['emaiIncorrecto'])){ ?>
    <script> alert('El usuario o la contraseña son incorrectos, intenta de nuevo.')</script>
<?php } 

if(isset($_REQUEST['email'])){ ?>
    <script> alert('Su clave fue cambiada, revise su correo.')</script>          
<?php } ?>