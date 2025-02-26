<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>

    <h2>Escribe algo</h2>
        <form action="" method="GET">

        <label for="num1">Variable</label>
        <input type="text" name="num1" id="num1" optional><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

    $num1 = $_GET['num1'] ?? 0;

    if (empty($num1)) {
        echo "La variable está vacia";

    } else {
        echo "La variable es $num1";
    }
        

    ?>

    </body>
    </html>