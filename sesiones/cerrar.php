<?php
session_name("LOGIN"); // le ponemos un nombre a la session
session_id("PHP"); // le ponemos nombre a el id
session_start(); // iniciamos sesion. crear cookies en el servidor local

session_destroy();  // destruye los datos de sesion

if (headers_sent()){  //so no hay encabezados o salidas en partalla usamao php
    echo "<script> window.location.href='index.php'; </script>";
}else{
    header("Location: index.php");  //para redirigir la pagina al eliminar sesion
}



