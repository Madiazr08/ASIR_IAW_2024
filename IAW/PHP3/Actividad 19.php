<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 19</title>
    </head>
    <body>

    <h1>Escribe la edad de una persona:</h1>
        <form action="" method="GET">
        <label for="num1">Edad:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;



if ($num1 < 14) {
    echo "Esta persona está en la Infancia";
 } elseif  ($num1 <= 26) {
    echo "Esta persona está en su Juventud";
 } elseif ($num1 <=59) {
    echo "Esta persona está en la Adultez";
 } elseif ($num1 >= 60) {
    echo "Es una persona mayor";
 }

    ?>


    </body>
    </html>
