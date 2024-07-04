<?php

// echo $_FILES['fichero']['name']."<br>";
// echo $_FILES['fichero']['tmp_name']."<br>";
// echo $_FILES['fichero']['type']."<br>";
// echo $_FILES['fichero']['error']."<br>";
// echo $_FILES['fichero']['size'];

if(mime_content_type($_FILES['fichero']['tmp_name']) !="image/jpeg" && mime_content_type($_FILES['fichero']['tmp_name']) !="image/png"){
    echo "Tipo de Fichero no Admitido";
    exit();
}

if (($_FILES['fichero']['size']/1024) >3072){
    echo "El Archivo supera el peso permitido";
    exit();
}

if (!file_exists("archivos")) {   // devuelve lo contrario !
    if(!mkdir("archivos",0777)){   // 0777 todos los permisos 
        echo "Error al crear el directorio";
        exit();
    }
}

chmod("archivos",0777);

if (move_uploaded_file($_FILES['fichero']['tmp_name'],"archivos/".$_FILES['fichero']['name'])) {
    echo "Archivo subido con Exito";
}else{
    echo "Error al subir el archivo";
}