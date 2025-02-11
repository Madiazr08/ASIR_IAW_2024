<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 29</title>
    </head>
    <body>

    <h2>Ingresa un Número del 1 al 100</h2>
        <form action="" method="GET">

        <label for="num1">Número</label>
        <input type="number" name="num1" id="num1" optional><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

    $num1 = $_GET['num1'] ?? 1;


 
    ?>


    </body>
    </html>