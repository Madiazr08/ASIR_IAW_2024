<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 17</title>
    </head>
    <body>

    <h2>Mínimo y Máximo</h2>
        <form action="" method="GET">

        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" optional><br><br>

        <label for="num2">Número 2</label>
        <input type="number" name="num2" id="num2" optional><br><br>

        <label for="num3">Número 3</label>
        <input type="number" name="num3" id="num3" optional><br><br>


        <input type="submit" value="Calcular">
    </form>

    <?php

$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;
$num3 = $_GET['num3'] ?? 0;

$mini = min($num1, $num2, $num3);
$maxi = max($num1, $num2, $num3);

echo "El mínimo es $mini y el máximo es $maxi" ; 


    ?>


    </body>
    </html>