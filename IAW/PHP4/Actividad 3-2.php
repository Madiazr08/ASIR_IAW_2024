<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3-2</title>
    </head>
    <body>

    <h2>Potencia</h2>
        <form action="" method="GET">

        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" optional><br><br>

        <label for="num1">Potencia</label>
        <input type="number" name="pot" id="pot" optional><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

$num1 = $_GET['num1'] ?? 0;
$pot = $_GET['pot'] ?? 0;


function potencia($num1, $pot) {return pow($num1, $pot);
}
$resultado = potencia($num1, $pot);
echo ' El resultado es ' . $resultado;

    ?>


    </body>
    </html>