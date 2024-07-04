<?php
    session_name("LOGIN"); // le ponemos un nombre a la session
    session_id("PHP"); // le ponemos nombre a el id
    session_start(); // iniciamos sesion. crear cookies en el servidor local

//    if (isset($_SESSION['contador'])){  //si la variable no viene definida 
//        $_SESSION['contador']++;        // si viene definida le incrementamos cada ves que se carga
//    }else{
//        $_SESSION['contador'] = 1;   // le dejamos el valor de 1
//    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>
    <?php echo "Hola ".$_SESSION['Nombre'].""; ?>
    <br><br>
    <a href="index.php">Inicio</a>
    <br>
    <a href="cerrar.php">Eliminar Sesion</a>
</body>
</html>