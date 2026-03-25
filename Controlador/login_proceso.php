<?php
    session_start();

    // en este ejemplo no se busca al usuario en una base de datos
    // el navegador es recordado por el servidor al compartir una variable de sesión
    // el valor de la variable del servidor es almacenada tambien en una cookie del navegador

    $_SESSION['usr_name'] = $_POST['usr_name'];
    header('location: ../Vista/perfil.php');
?>