<?php

$texto ="El Salvador";
$variable_1 = $texto;  //asignacion normal
$variable_2 = &$texto; //asigancion por referencia
echo $variable_1;
echo $variable_2;

$texto ="Jose Rando";
echo $variable_2;
