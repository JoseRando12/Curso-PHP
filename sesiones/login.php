<?php

    if(preg_match("/^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ() ]{3.10}$/" , $_POST['usuario'])){
        echo "El Usuario no coincide con el formato solicitado";
        exit();
    }

    if(preg_match("/^[a-zA-Z0-9$@.-]{4.30}$/",$_POST['clave'])){
        echo "La Clave no coincide con el formato solicitado";
        exit();
    }

    if ($_POST['usuario'] == "jose" && $_POST['clave'] == "1234") {
        session_name("LOGIN"); // le ponemos un nombre a la session
        session_id("PHP"); // le ponemos nombre a el id
        session_start(); // iniciamos sesion. crear cookies en el servidor local
        $_SESSION["Nombre"] = "Jose";
        $_SESSION["Apellido"] = "Rando";
        $_SESSION["Pais"] = "Argentina";

        if (headers_sent()){  //so no hay encabezados o salidas en partalla usamas php
            echo "<script> window.location.href='contador.php'; </script>"; //en conjunto con javascript
        }else{
            header("Location: contador.php");  //para redirigir la pagina al logearnos
        }

    }else{
        echo "Datos Incorrectos..";
    }   