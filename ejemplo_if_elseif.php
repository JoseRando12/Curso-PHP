<?php

/*$dia = 5;

if($dia == 1){
    echo "Lunes";
}elseif ($dia == 2){
    echo "Martes";
}elseif ($dia == 3){
    echo "Miercoles";
}elseif ($dia == 4){
    echo "Jueves";
}elseif ($dia == 5){
    echo "Viernes";
}elseif ($dia == 6){
    echo "Sabado";
}elseif ($dia == 7){
    echo "Domingo";
}else{
    echo "Error a introducido un Valor No Valido...";
}*/
//--------------------EJEMPLO 2----------------------------------------------

$computadoras_compradas = 10;
$total = ($computadoras_compradas*700);

if ($computadoras_compradas < 5){
    $total = $total - ($total*0.10);
}elseif($computadoras_compradas >= 5 and $computadoras_compradas < 10){
    $total = $total - ($total*0.20);    
}elseif($computadoras_compradas >= 10){
    $total = $total - ($total*0.40);    
}

echo "El Total a pagar es $ ".$total;
