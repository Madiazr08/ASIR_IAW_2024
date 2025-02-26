<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2-2</title>
    </head>
    <body>

    <h2>Circulo</h2>
        <form action="" method="GET">

        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" optional><br><br>


        <input type="submit" value="Calcular">
    </form>

    <?php

$num1 = $_GET['num1'] ?? 0;


function circulo($num1) {return 3.14 * pow($num1, 2);
}
$resultado = circulo($num1);
echo ' El resultado es ' . $resultado;

    ?>


    </body>
    </html>