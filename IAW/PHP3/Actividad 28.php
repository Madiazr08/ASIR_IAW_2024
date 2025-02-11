<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 28</title>
    </head>
    <body>

    <h2>Primer Triangulo</h2>
        <form action="" method="GET">

        <label for="base">Base</label>
        <input type="number" name="base" id="base" optional><br><br>

        <label for="base">Altura</label>
        <input type="number" name="altura" id="altura" optional><br><br>
    <h2>Segundo Triangulo</h2>
        <label for="base2">Base</label>
        <input type="number" name="base2" id="base2" optional><br><br>

        <label for="altura2">Altura:</label>
        <input type="number" name="altura2" id="altura2" optional><br><br>


        <input type="submit" value="Calcular">
    </form>

    <?php

    $base = $_GET['base'] ?? 0;
    $altura = $_GET['altura'] ?? 0;
    $base2 = $_GET['base2'] ?? 0;
    $altura2 = $_GET['altura2'] ?? 0;

    $t1 = ($base * $altura) / 2;
    $t2 = ($base2 * $altura2) / 2;

    echo "<h3>Resultados:</h3>";
    echo "Área del primer triángulo: $t1<br>";
    echo "Área del segundo triángulo: $t2<br>";
    
    if ($t1 > $t2) {
        echo "El primer triángulo tiene un área mayor.";
    } elseif ($t1 < $t2) {
        echo "El segundo triángulo tiene un área mayor.";
    } else {
        echo "Ambos triángulos tienen la misma área.";
    }



    ?>


    </body>
    </html>