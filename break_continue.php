<?php
/*
$c = 1;
while($c <= 20){
    echo $c."<br>";
    if ($c ==10){
        echo "El Ciclo llego a 10 y lo detuvimos";
        break;
    }
    $c++;
}
*/
/*
$pc = ["SO","SSD","GPU","RAM","CPU"];
foreach ($pc as $componentes){
    echo $componentes."<br>";
    if ($componentes == "GPU"){
        break;
    }
}
*/
/*
$pc = ["SO","SSD","GPU","RAM","CPU"];
foreach ($pc as $componentes){
    if ($componentes == "GPU"){
        continue;                     // OMITE GPU SALTAMOS A LA SIGUENTE ITERACION
    }
    echo $componentes."<br>";
}
*/
/*
for ($i=1; $i <= 10 ; $i++) { 
    if ($i == 5){                    // OMITE EL 5 Y SIGUE LA FUNCION SIN EL 5
        continue;
    }
    echo $i."<br>";
}
*/
$i = 1;
while ($i <= 10) {
    if($i == 6){    // OMITE EL 6 Y SIGUE EL CICLO
        $i++;
        continue;
    }
    echo $i."<br>";
    $i++;
}

