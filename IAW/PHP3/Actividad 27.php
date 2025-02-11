<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 27</title>
    </head>
    <body>

    <h1>Mini Calculadora:</h1>
        <form action="" method="GET">

        <label for="lado">Lado (Cuadrado):</label>
        <input type="number" name="lado" id="lado" optional><br><br>

        <label for="base">Base (o base menor):</label>
        <input type="number" name="base" id="base" optional><br><br>

        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" optional><br><br>

        <label for="base2">Base Mayor (Trapecio):</label>
        <input type="number" name="base2" id="base2" optional><br><br>

        <label for="radio">Radio (Circulo)</label>
        <input type="number" name="radio" id="radio" optional><br><br>

        <label for="fig">Selecciona la figura:</label>
        <select name="fig" id="fig" required>
            <option value="trapecio">Trapecio</option>
            <option value="triangulo">Triangulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectangulo</option>
            <option value="circulo">Circulo</option>
        </select>

        <input type="submit" value="Calcular">
    </form>
<?php

    $lado = $_GET['lado'] ?? 0;
    $base = $_GET['base'] ?? 0;
    $altura = $_GET['altura'] ?? 0;
    $base2 = $_GET['base2'] ?? 0;
    $radio = $_GET['radio'] ?? 0;
    $fig = $_GET['fig'] ?? 0;


    switch ($fig) {
        case "trapecio":
            $trapecio = ($base + $base2) * $altura / 2;
            echo "<h3>El área del trapecio son $trapecio cm cuadrados</h3>";
            break;
        case "triangulo":
            $triangulo = ($base * $altura) / 2;
            echo "<h3>El área del triangulo son $triangulo cm cuadrados</h3>";
            break;
        case "cuadrado":
            $cuadrado = $lado * $lado;
            echo "<h3>El área del cuadrado son $cuadrado cm cuadrados</h3>";
            break;
        case "rectangulo":
            $rectangulo = $base * $altura;
            echo "<h3>El área del rectángulo son $rectangulo cm cuadrados</h3>";
            break;

            case "circulo":
                $circulo = 3.14 * pow($radio, 2);
                echo "<h3>El área del circulo son $circulo cm cuadrados</h3>";
                break;

        default:
            echo "<h4>Operación no válida.</h4>";
            break;
    }


    ?>


    </body>
    </html>