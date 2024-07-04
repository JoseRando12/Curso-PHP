<?php

$clave = "HolaMundo123";

echo md5($clave); //soporta solo algoritmos md5
echo "<br>";
echo sha1($clave); // ya no se usan ya que es facil romper este algoritmo
echo "<br>";

echo hash("md5",$clave); // esta soporta multiples algoritmos

foreach(hash_algos() as $algoritmos){
    echo $algoritmos." - ".hash($algoritmos,$clave)."<br>";
}

echo "----------------------------------------PASWORD_HASH-------------------------------------------------------------";
echo "<br>";

echo password_hash($clave,PASSWORD_DEFAULT);  // VER ALGORITMOS EN PAGINA OFICIAL PHP
echo "<br>";
echo password_hash($clave,PASSWORD_BCRYPT);
echo "<br>";
echo password_hash($clave,PASSWORD_BCRYPT,["cost" => 11]); // la funcion cost cambia la cantidad de veces el algoritmo
echo "<br>";

echo "---------------------------------------COMO VERIFICAR EL PASSWORD-------------------------------------------------";
echo "<br>";

//$clave_2 = "123456";
$clave_procesada = password_hash($clave,PASSWORD_BCRYPT,["cost" => 15]);
if (password_verify($clave, $clave_procesada)){    //devuelve 1 si es verdadero y 0 si es falso  
    echo "La Clave Coincide!!";
}else{
    echo "La Clave NO COINCIDEN....";
}


