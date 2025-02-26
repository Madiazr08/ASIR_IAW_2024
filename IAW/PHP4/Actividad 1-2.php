<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1-2</title>
    </head>
    <body>

    <h2>Suma</h2>
        <form action="" method="GET">

        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" optional><br><br>

        <label for="num1">Número 2</label>
        <input type="number" name="num2" id="num2" optional><br><br>


        <input type="submit" value="Calcular">
    </form>

    <?php

$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;

function suma($num1, $num2) {return $num1+$num2;
}
$resultado = suma($num1, $num2);
echo ' El resultado es '.$resultado;

    ?>


    </body>
    </html>