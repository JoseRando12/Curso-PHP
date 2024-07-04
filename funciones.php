<?php
/*
function saludo(){
    echo "Mi nombre es: Jose Rando" ."<br>";
}
echo saludo();
echo saludo();
echo saludo();
*/
/*
function saludo($nombre){
    return "Hola, mi nombre es: $nombre" ."<br>";
}
echo saludo("Jose");       // SE PUEDE UTILIZAR DE ESTAS MANERAS DA IGUAL

$usuario = "Milito";
echo saludo($usuario);

echo saludo($nombre = "Gaelito");
*/

function promedio_alumno ($nota_1,$nota_2,$nota_3){
    $promedio = ($nota_1 + $nota_2 + $nota_3)/3;
    return ($promedio);
}

/*
$promedio = promedio_alumno(10,10,10);
echo "El promedio es: ".$promedio ."<br>";

echo "El promedio es: ".promedio_alumno(7,8,9) ."<br>";
echo "El promedio es: ".promedio_alumno(5,6,8) ."<br>";
echo "El promedio es: ".promedio_alumno(7,3,1) ."<br>";
echo "El promedio es: ".promedio_alumno(6,5,9) ."<br>";
echo "El promedio es: ".promedio_alumno(9,9,9) ."<br>";
*/

