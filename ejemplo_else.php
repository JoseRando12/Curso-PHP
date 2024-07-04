<?php

$cantidad = 4;

if ($cantidad < 5) {
    $total=$cantidad*800;
    
} else {
    $total=$cantidad*700;
}
echo "El cliente debe pagar: $ ".$total," por las ".$cantidad," llantas";

//-------------------------------------------------------------------------

$nota_1 = 7;
$nota_2 = 8;
$nota_3 = 9;
$promedio = (($nota_1 + $nota_2 + $nota_3) / 3);

if ($promedio >= 7) {
    echo " (Alumno APROBADO !!!! con un promedio de: $promedio )";
} else {
    echo " (Alumno DESAPROBADO, tenes un promedio de: $promedio)";
}
