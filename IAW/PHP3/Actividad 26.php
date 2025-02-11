<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 26</title>
    </head>
    <body>

    <h1>Mini Calculadora:</h1>
        <form action="" method="GET">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="ope">Selecciona la operación:</label>
        <select name="ope" id="ope" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="mult">Multiplicación</option>
            <option value="div">División</option>
        </select>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    $ope = $_GET['ope'] ?? 0;


    switch ($ope) {
        case "suma":
            $suma = $num1 + $num2;
            echo "<h3>Resultado de la suma: $suma</h3>";
            break;
        case "resta":
            $resta = $num1 - $num2;
            echo "<h3>Resultado de la resta: $resta</h3>";
            break;
        case "mult":
            $mult = $num1 * $num2;
            echo "<h3>Resultado de la multiplicación: $mult</h3>";
            break;
        case "div":
            if ($num2 !=0) {
                $division = $num1 / $num2;
                echo "<h3>Resultado de la división: $division</h3>";

            } else {
                echo "<h3>No se puede dividir entre 0</h3>";
            }
            break;

        default:
            echo "<h4>Operación no válida.</h4>";
            break;
    }

    ?>


    </body>
    </html>