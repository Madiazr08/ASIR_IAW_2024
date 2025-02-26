<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6</title>
    </head>
    <body>

    <h2>Variable Definida o Null</h2>

    <?php

$num1 = 0;
$num2;

if(isset($num1)) {
    echo "La variable 1 está definida.<br>";
} else {
    echo "La variable 1 no está definida.<br>";
}

if(isset($num2)) {
    echo "La variable 2 está definida.<br>";
} else {
    echo "La variable 2 no está definida.<br>";
}

?>
    </body>
    </html>
