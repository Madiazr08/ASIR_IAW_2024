<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 12</title>
    </head>
    <body>

<?php

if (isset($_GET['numero'])) {

    $numero = $_GET['numero'];
    

    $suma = 0;
    for ($i = 1; $i <= 100; $i++) {
        $suma += $numero + $i;
    }
    

    echo "<h1>Resultado de la suma de los 100 números siguientes:</h1>";
    echo "<p>El número ingresado es: $numero</p>";
    echo "<p>La suma de los 100 números siguientes es: $suma</p>";
} else {

    ?>

        <h1>Ingrese un número entero:</h1>
        <form action="" method="GET">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" required>
            <input type="submit" value="Calcular">
        </form>
    </body>
    </html>
    <?php
}
?>

