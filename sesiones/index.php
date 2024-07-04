<?php
    session_name("LOGIN"); // le ponemos un nombre a la session
    session_id("PHP"); // le ponemos nombre a el id
    session_start(); // iniciamos sesion. crear cookies en el servidor local

    $_SESSION['contador'] = 1;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ() ]{3.10}" maxlength="10" >
        <br>
        <label>Clave</label>
        <input type="password" name="clave" pattern="[a-zA-Z0-9$@.-]{4.30}" maxlength="30">
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html