<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>

    <h2>Escribe 1 número decimal</h2>
        <form action="" method="GET">

        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" step="0.1" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

    $num1 = $_GET['num1'] ?? 0;

    $res= round($num1);
    echo "El número redondeado entero de $num1 es $res";
    

    ?>

    </body>
    </html>