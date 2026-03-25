<?php
    session_start();
    if(isset($_SESSION['usr_name'])){
        header('location: perfil.php');
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
    <h2>Login de usuario</h2>
    <form action="../Controlador/login_proceso.php" method="POST">
        <label for="usr_nombre">Nombre: </label>
        <input type="text" name="usr_name" id="usr_name">
        <br>
        <label for="usr_pass">Contraseña: </label>
        <input type="password" name="usr_pass" id="usr_pass">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

