<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 18</title>
    </head>
    <body>

    <h2>Redondeo</h2>
        <form action="" method="GET">

        <label for="num1">Número 1</label>
        <input type="decimal" name="num1" id="num1" optional><br><br>


        <input type="submit" value="Calcular">
    </form>

    <?php

$num1 = $_GET['num1'] ?? 0;

$redo = floor($num1);

echo "El redondeo de $num1 es $redo" ; 


    ?>


    </body>
    </html>