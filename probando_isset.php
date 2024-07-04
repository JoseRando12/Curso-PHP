<?php

    if(isset($_POST['numero']) && $_POST['numero'] != ""){
        $numero = $_POST['numero'];
        for ($i=1; $i<=20 ; $i++) { 
           echo $numero." X ".$i." - ".$i*$numero."<br>";
        }
    }else{
        echo "No Definida";
    }
