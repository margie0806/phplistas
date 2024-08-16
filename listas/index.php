<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/estilos.css"  rel="stylesheet">
</head>
<body class="cuerpo">
    <h1> Listas</h1>
    <form method="POST" action="./php/mostrar.php">
        <label for="accion">Selecciona una acción:</label>
        <select name="accion" id="accion">
            <option value="mostrar">Mostrar</option>
            <option value="guardar">Guardar</option>
            <option value="actualizar">actualizar</option>
            <option value="eliminar">eliminar</option>
        </select>
        <input type="submit" value="Ejecutar"></input>
    </form>
</body>
</html>
