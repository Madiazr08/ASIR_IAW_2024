<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 22</title>
    </head>
    <body>

    <h1>Factorial:</h1>
        <form action="" method="GET">
        <label for="num1">Numero:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    $i = 1;
    $producto = 1; 

    while ( $i <= $num1){
        $producto = $producto * $i;
        $i = $i + 1;
    }
    echo "El factorial de $num1 es $producto"
    ?>


    </body>
    </html>