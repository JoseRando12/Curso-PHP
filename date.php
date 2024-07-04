<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");

$fecha_us = date("Y-m-d "); // 2024-06-08
echo $fecha_us;
echo "<br>";
$fecha2_us = date("l d F Y"); // Saturday 08 June 2024
echo $fecha2_us;
echo "<br>";

$fecha_es = date("d-m-Y"); // devuelve 08-06-2024
echo $fecha_es;
echo "<br>";
$hora_12 = date("h:i a"); // 09:14 pm
echo $hora_12;
echo "<br>";
$hora_24 = date("H:i a"); // 21:14 pm
echo $hora_24;
echo "<br>";

$fecha_completa = date("d-m-Y h:i A");  // 08-06-2024 09:17 PM
echo $fecha_completa;  
echo "<br>";
$fecha_completa2 = date("l d F Y H:i A");  // Saturday 08 June 2024 21:21 PM
echo $fecha_completa2;                 
