<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 34</title>
    </head>
    <body>

    <h1>Numero al reves</h1>
        <form action="" method="GET">
        <label for="num1">Numero:</label>
        <input type="number" min="1000" max="9999" name="num1" id="num1" required><br><br>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    $res = STRREV($num1);


    echo "Si el número normal es $num1, número al reves es $res";

?>


</body>
</html>