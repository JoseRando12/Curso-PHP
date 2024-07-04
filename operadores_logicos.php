<?php

$valor_1 = 7;
$valor_2 = 2;
var_dump ($valor_1 == 7 && 2 > 3);
var_dump ($valor_1 == 7 and 9 > 3);

var_dump ($valor_1 == 7 || 9 > 3);
var_dump ($valor_1 == 4 || 1 > 3);
var_dump ($valor_1 == 4 || 1 > 3 || 1>2);  // ALT 124 ||

var_dump (!($valor_1 > $valor_2)); // devuelve el inverso del resultado 
