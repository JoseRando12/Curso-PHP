<?php
/*
$a = 9; // match tiene que cuenta el tipo de dato "" o numero
$x = 10;
$y = 9;
$z = 7;

$resultado = match ($a) {
    $x,$y => "Valor igual a X o a Y" , //doble comparacion
    $z =>"Valor igual a Z" ,           //simple comparacion
    default => "No coincide con ninguna variable"
};
echo $resultado;
*/

$edad = 12;

$resultado = match (true) {
    $edad >= 60 => "Eres de la tercera edad" ,
    $edad >= 30 => "Eres un adulto mayor",
    $edad >= 18 => "Eres adulto joven",
    default => "Eres un niño"
};
echo $resultado;
