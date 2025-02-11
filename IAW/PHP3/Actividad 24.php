<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 24</title>
    </head>
    <body>

    <h1>Dias de la semana:</h1>
        <form action="" method="GET">
        <label for="num1">Pon un numero del 1 al 7:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    
    switch ($num1) {
        case '1':
            echo "Lunes";
            break;
        case '2':
            echo "Martes";
            break;
        case '3':
            echo "Miercoles";
            break;
        case '4':
            echo "Jueves";
            break;
        case '5':
            echo "Viernes";
            break;
        case '6':
            echo "Sabado";
            break;
        case '7':
            echo "Domingo";
           break;
           
        default:
            echo "Que no hay mas dias de la semana crack.";
            break;
    }
    ?>


    </body>
    </html>