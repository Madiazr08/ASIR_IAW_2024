<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 21</title>
    </head>
    <body>

    <h1>Ecuaciones de segundo grado:</h1>
        <form action="" method="GET">
        <label for="num1">Coeficiente "a":</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Coeficiente "b":</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num3">Coeficiente "c":</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    $num3 = $_GET['num3'] ?? 0;

    $raiz = pow($num2, 2) - 4 * $num1 * $num3;


    if ($raiz > 0) {

        $solucion1 = (-$num2 + sqrt($raiz)) / (2 * $num1);
        $solucion2 = (-$num2 - sqrt($raiz)) / (2 * $num1);
        echo "La ecuación tiene dos soluciones reales:<br>";
        echo "x1 = " . $solucion1 . "<br>";
        echo "x2 = " . $solucion2 . "<br>";
    } else {
        
        echo "La ecuación no tiene soluciones reales.<br>";
        
    }
    ?>


    </body>
    </html>