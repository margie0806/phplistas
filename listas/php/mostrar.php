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