<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 25</title>
    </head>
    <body>

    <h1>Números Romanos:</h1>
        <form action="" method="GET">
        <label for="num1">Pon una única letra en mayúscula</label>
        <input type="text" name="num1" id="num1" required><br><br>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    
    switch ($num1) {
        case 'I':
            echo "Es 1";
            break;

        case 'V':
            echo "Es 5";
            break;

        case 'X':
            echo "Es 10";
            break;

        case 'L':
            echo "Es 50";
            break;

        case 'C':
            echo "Es 100";
            break;

        case 'D':
            echo "Es 500";
            break;

        case 'M':
            echo "Es 1000";
            break;

        default:
            echo "No has puesto una única letra o no es un número romano.";
            break;
    }
    ?>


    </body>
    </html>