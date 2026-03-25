<?php
    session_start();
    if(!isset($_SESSION['usr_name'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo "bienvenido ".$_SESSION['usr_name'] ?></h3>
    <a href="../Controlador/logout_proceso.php">Cerrar sesion</a>
</body>
</html>