<?php
/*
$fruta = "Fresa";

switch ($fruta) {
    case 'Fresa':
        echo "Eres una Piche Fresa";
        break;
    case 'Pera':
        echo "Eres una Pera";
        break;
    
    default:
        echo "No eres no Fresa ni Pera";
        break;
}*/

$dia = "7"; //no tiene en cuenta el tipo de dato, textos o numero

switch ($dia) {
    case '1':
        echo "Dia Lunes";
        break;
    case '2':
        echo "Dia Martes";
        break;
    case '3':
        echo "Dia Miercoles";
        break;
    case '4':
        echo "Dia Jueves";
        break;
    case '5':
        echo "Dia Viernes";
        break;
    case '6':
        echo "Dia Sabado";
        break;
    case '7':
        echo "Dia Domingo";
        break;
    
    default:
        echo "Ingrese un Numero del 1 al 7..";
        break;
}