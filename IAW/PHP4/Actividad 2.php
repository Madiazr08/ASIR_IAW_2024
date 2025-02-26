<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>

    <h2>Escribe 2 números</h2>
        <form action="" method="GET">

        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Número 2</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;

    $res= rand($num1,$num2);
    echo "El número elegido entre $num1 y $num2 es $res";
    

    ?>

    </body>
    </html>