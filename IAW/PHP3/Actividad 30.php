<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 30</title>
    </head>
    <body>

    <h2>Escribe 10 números</h2>
        <form action="" method="GET">

        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Número 2</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num3">Número 3</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <label for="num4">Número 4</label>
        <input type="number" name="num4" id="num4" required><br><br>

        <label for="num5">Número 5</label>
        <input type="number" name="num5" id="num5" required><br><br>

        <label for="num6">Número 6</label>
        <input type="number" name="num6" id="num6" required><br><br>

        <label for="num7">Número 7</label>
        <input type="number" name="num7" id="num7" required><br><br>

        <label for="num8">Número 8</label>
        <input type="number" name="num8" id="num8" required><br><br>

        <label for="num9">Número 9</label>
        <input type="number" name="num9" id="num9" required><br><br>

        <label for="num10">Número 10</label>
        <input type="number" name="num10" id="num10" required><br><br>



        <input type="submit" value="Calcular">
    </form>

    <?php

    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    $num3 = $_GET['num3'] ?? 0;
    $num4 = $_GET['num4'] ?? 0;
    $num5 = $_GET['num5'] ?? 0;
    $num6 = $_GET['num6'] ?? 0;
    $num7 = $_GET['num7'] ?? 0;
    $num8 = $_GET['num8'] ?? 0;
    $num9 = $_GET['num9'] ?? 0;
    $num10 = $_GET['num10'] ?? 0;


    $suma = $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10;

    $prom = $suma / 10;

    echo "La suma de los números anteriores es $suma </br>";
    
    echo "El promedio de los números anteriores es $prom";

    ?>

    </body>
    </html>