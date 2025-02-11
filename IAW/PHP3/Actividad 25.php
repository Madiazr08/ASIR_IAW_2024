<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 25</title>
    </head>
    <body>

    <h1>Abecedario:</h1>
        <form action="" method="GET">
        <label for="num1">Pon un numero de un solo dígito.</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    
    switch ($num1) {
        case '1':
            echo "A";
            break;

        case '2':
            echo "B";
            break;

        case '3':
            echo "C";
            break;

        case '4':
            echo "D";
            break;

        case '5':
            echo "E";
            break;

        case '6':
            echo "F";
            break;

        case '7':
            echo "G";
           break;
           
        case '8':
            echo "H";
           break;

        case '9':
            echo "I";
           break;
        
        default:
            echo "De un solo dígito máquina.";
            break;
    }
    ?>


    </body>
    </html>