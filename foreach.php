<?php
/*
$laptop = ["Acer Nitro 5", "Windows 11", "AMD Raizen 5 4600H", "SSD 256GB", "RAM 24GB"];

$frutas = [
    "Fresas" => 100,
    "Peras" => 30,
    "Sandias" => 10,
    "Melocotones" => 17,
    "Manzanas" => 9
];

foreach ($laptop as $clave => $value) { // RECORREMOS LAPTOS
    echo $clave." - ".$value."<br>";
}

foreach ($frutas as $key => $valor) { // RECORREMOS FRUTAS
    echo "Hay ".$valor." ".$key. " en el inventario"."<br>";
}
*/

$productos = [ 
    ["codigo" => "AB001" , "descripcion" => "Mouse"],           //ARRAYS MULTIDEMENSIONAL
    ["codigo" => "AB002" , "descripcion" => "Teclado"],   
    ["codigo" => "AB003" , "descripcion" => "Monitor"],
    ["codigo" => "AB004" , "descripcion" => "impresora"]
];

foreach ($productos as $prod){
    echo $prod["codigo"]." - " .$prod["descripcion"]."<br>";
}
