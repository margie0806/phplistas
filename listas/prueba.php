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
    <form method="POST" action="">
        <label for="accion">Selecciona una acción:</label>
        <select name="accion" id="accion">
            <option value="mostrar">Mostrar</option>
            <option value="guardar">Guardar</option>
        </select>
        <input type="submit" value="Ejecutar"></input>
    </form>
</body>
</html>
<?php
$lista = ["html", "php"];

function mostrar() {
    global $lista;  // Accede a la variable global $lista
    foreach ($lista as $index => $element) {
        echo "Elemento en índice $index: " . htmlspecialchars($element) . "<br>";
    }
}

function guardar() {
    global $lista;  // Accede a la variable global $lista
    array_push($lista, "javascript");
    mostrar();
}

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = isset($_POST['accion']) ? $_POST['accion'] : '';
    if ($accion === 'mostrar') {
        mostrar();
    } elseif ($accion === 'guardar') {
        guardar();
    }
}
?>