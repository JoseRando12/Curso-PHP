<?php 

// $nombre = $_POST['nombre'];
// $asignatura = $_POST['asignatura'];
// $frutas = $_POST['frutas'];

// echo $nombre." - ".$asignatura." - ".$frutas;

// var_dump ($_POST['asignatura']);

// foreach($_POST['asignatura'] as $asignatura){
    // echo $asignatura,"<br>";
// }

$materias = $_POST['asignatura'];
foreach ($materias as $asignatura) {
    echo $asignatura,"<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

$fresas = $_POST['frutas'];
foreach ($fresas as $frutas) {
    echo $frutas,"<br>";
}