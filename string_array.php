<?php

$fecha_1 = "2024/06/03";
$fecha_2 = "2030-06-04";
$numeros = "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha = explode("/", $fecha_1); //convertimos y le indicamos que separamos el array por "/"
echo $array_fecha[2]."/";
echo $array_fecha[1]."/";
echo $array_fecha[0]."<br>";

$array_fecha = explode("-", $fecha_2); //converyimos y le indicamos que separamos el array por "-"
echo $array_fecha[2]."-";
echo $array_fecha[1]."-";
echo $array_fecha[0]."<br>";

$array_numeros = explode(" ", $numeros,3);
echo $array_numeros[1]."<br>";        // convierte y lo divide en 3 array agregandole el mostrandome la pos 1
$array_numeros = explode(" ", $numeros,-5);
echo $array_numeros[1];              // elimina de atras -5 elementos y muestra el 1
