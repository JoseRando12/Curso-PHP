<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de Archivo</title>
</head>
<body>
    <h3>Subir Archivo con PHP</h3>
    <form action="carga.php" method="POST" enctype="multipart/form-data" class="FormularioAjax">
        <input type="file" name="fichero" accept=".jpg, .png, .jpeg"> 
        <br><br>
        <button type="submit">Enviar</button>
    </form> 
    <script src="ajax.js"></script>
</body>
</html>