<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 16</title>
    </head>
    <body>
    <h1>Ingresa los numeros:</h1>
        <form action="" method="GET">
        <label for="num1">Primer número:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Segundo Número:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num3">Tercer Número:</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    $num3 = $_GET['num3'] ?? 0;

if ($num1 > $num2) {
    echo "$num1 es el mayor y $num3 el menor";
 } elseif ($num3 < $num2) {

 }



    ?>


    </body>
    </html>
