<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 23</title>
    </head>
    <body>

    <h1>Grados Fahrenheit:</h1>
        <form action="" method="GET">
        <label for="num1">Numero:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    $celsius = ($num1 - 32) * 5 / 9;
    
    if ($celsius <= 999) {
        
    echo "$num1 grados FahrenHeit son $celsius grados celsius";
}
    elseif ($celsius > 999) {
        echo "Demasiada temperatura";
    }
    ?>


    </body>
    </html>