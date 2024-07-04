<?php

$cadena_texto = "hola mundo php";

echo strtolower($cadena_texto)."<br>";  // esta funcion cambia las letras de mayusculas a minusculas
echo strtoupper($cadena_texto)."<br>";  // esta funcion al reves las convierte en mayusculas
echo ucfirst($cadena_texto)."<br>";  // esta funcion convierte solamente la primera letra a muyuscula
echo ucwords($cadena_texto)."<br>";  // esta funcion convierte la primera letra de cada palabra a muyuscula

$longitud = strlen($cadena_texto);
echo $cadena_texto." tiene ".$longitud." caracteres <br>"; // cuenta los caracteres

$palabras = str_word_count($cadena_texto);
echo $cadena_texto." tiene ".$palabras." palabras <br>";  // cuenta las palabras
