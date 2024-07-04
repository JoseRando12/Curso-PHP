<?php

// arrays escalares
$estudiantes = array("Carlos","Maria","Jose","Vanesa","Gael");
$estudiantes[3]=" Milito";  //modificamos la posicion 3

echo $estudiantes[2];
echo $estudiantes[3];

$estudiantes = ["Carlos","Maria","Jose","Vanesa","Gael","8"]; //otra manera de declarar el array[]
$estudiantes[3]=" Milito";  //modificamos la posicion 3

echo $estudiantes[5];
echo $estudiantes[3];

// arrays asociativos
$tutor=["nombre"=>"Carlos","apellido"=>"Rando","Edad"=>46];

echo $tutor["Edad"];

$tutor["Edad"]=20; //modificacion de array
echo $tutor["Edad"];

// arrays de multiples dimensiones
$tutor_2=["nombre"=>"Mariano","apellido"=>"Rando","Edad"=>30,"cursos"=>["PHP","Python","CCS"]];
echo $tutor_2["cursos"][1];

$tutor_2["cursos"][1]="JavaScript"; //modificamos un elemento
echo $tutor_2["cursos"][1];

$tutor_2=[
        "nombre"=>"Mariano",
        "apellido"=>"Rando",
        "Edad"=>30,
        "cursos"=>["nombre"=>"Carlos","apellido"=>"Rando","Edad"=>46]];

echo $tutor_2["cursos"]["apellido"];

$tutor_2["pais"]="Argentina"; //Agregamos nuevos elemntos al arrys
echo $tutor_2["pais"];

echo count($estudiantes); //contamos los elementos del arrays

echo count($tutor_2);
echo count($tutor_2,COUNT_RECURSIVE);




