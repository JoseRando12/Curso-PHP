<?php

$edad = 50;
$genero = "M";

if($genero == "M"){
    if($edad >=60){
        echo "Puede Jubilarse...";
    }else{
        echo "NO puede Jubilarse...";
    }

}elseif($genero == "F"){
    if($edad > 57){
        echo "Puede Jubilarse...";
    }else{
        echo "NO puede Jubilarse...";
    }

}else{
    echo "Coloque una condicion valida..";
}