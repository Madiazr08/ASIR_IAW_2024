<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>

    <h2>Escribe 1 número</h2>
        <form action="" method="GET">

        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

    $num1 = $_GET['num1'] ?? 0;

    $res= bcsqrt($num1);
    echo "La raíz cuadrada (redondeada si el resulado es decimal) de $num1 es $res";
    

    ?>

    </body>
    </html>

