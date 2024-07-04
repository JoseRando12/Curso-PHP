<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="POST">  <!-- metodo post mas seguro que el GET-->
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <br>

        <label for="asignatura">Asignatura</label>
        <select id=asignatura" name="asignatura[]" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lengua">Lengua</option>
        </select>

        <br><br>

        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">Manzana</label>

        <label for="opcion-2">
            <input type="checkbox" value="Naranja" id="opcion-2" name="frutas[]">Naranjas</label>

        <label for="opcion-3">
            <input type="checkbox" value="Peras" id="opcion-3" name="frutas[]">Peras</label>

        <br><br><br>

        <button type="submit">Enviar</button>

    </form>
    
</body>
</html>