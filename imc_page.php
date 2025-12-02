<?php
include('utils/functions.php');

// VALIDACIÓN DE CAMPOS VACÍOS - AÑADIR AL INICIO
$camposRequeridos = ['campo-nombre', 'campo-anio', 'campo-peso', 'campo-altura'];
$errores = [];

foreach ($camposRequeridos as $campo) {
    if (!isset($_POST[$campo]) || empty(trim($_POST[$campo]))) {
        $nombreCampo = str_replace('campo-', '', $campo);
        $errores[] = ucfirst($nombreCampo);
    }
}

// Si hay campos vacíos, mostrar error
if (!empty($errores)) {
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error - Campos Vacíos</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="results-container">
            <div id="error-campos">
                <h1> Error en el formulario</h1>
                <div class="lista-errores">
                    <p>Por favor completa todos los campos:</p>
                    <ul>';
    foreach ($errores as $error) {
        echo '<li>' . htmlspecialchars($error) . '</li>';
    }
    echo '          </ul>
                </div>
                <a href="index.php" class="btn-volver">Volver al formulario</a>
            </div>
        </div>
    </body>
    </html>';
    exit;
}

// SI NO HAY ERRORES, CONTINUAR CON EL CÓDIGO ORIGINAL
$campoNombre = $_POST['campo-nombre'];
$campoAnio =  $_POST['campo-anio'];
$campoPeso =  $_POST['campo-peso'];
$campoAltura =  $_POST['campo-altura'];

$edadValida = mayor_edad($campoAnio);

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados IMC</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>';

if($edadValida < 18){
    echo '<div class="results-container">
            <div id="edad-invalida">
                <h1>Lo sentimos! esta página es solo para mayores de edad :(</h1>
            </div>
          </div>';
} else {
    echo '<div class="results-container">
            <div id="bienvenida">
                <h1>Bienvenid@ ' . $campoNombre . '!</h1>
            </div>';
    
    $imc = calculo_imc($campoPeso, $campoAltura);
    
    if(!$imc){
        echo '<div id="altura-invalida">
                <h1>La altura debe ser mayor que 0</h1>
              </div>
          </div>';
    } else {
        $estado = imc_status($imc);
        echo '<div id="resultado">';
        echo "<h2>Rondas los " . $edadValida . " años.</h2>";
        echo "<h2>Tu IMC es de " . $imc . " considerado como " . $estado . "</h2>";
        echo '</div>
          </div>';
    }
}

echo '</body></html>';
?>