<?php

$cantidad_1 = 12732.5;
$cantidad_2 = 1931.81;

// number_format(cantidad, decimales, separacion_decimal, separacion_mallar)

$cantidad_1 = number_format($cantidad_1,2,",",".");
echo $cantidad_1; 
echo "<br>";
// MUESTRA 12.732,50

$cantidad_2 = number_format($cantidad_2,2,".","");
echo $cantidad_2;
// MUESTRA 1931.81 ASI SE USA EN BASE DE DATOS