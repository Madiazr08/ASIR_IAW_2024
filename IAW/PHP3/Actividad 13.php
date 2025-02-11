<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 13</title>
    </head>
    <body>

<?php

if (isset($_GET['numero'])) {

    $numero = $_GET['numero'];
    

    $dolar = 1.04;

    $conversion = $numero * $dolar;
    
    

    echo "<h1>Resultado de la conversion:</h1>";
    echo "<p>Los euros ingresados son: $numero</p>";
    echo "<p>La conversion a dolares son: $conversion $</p>";
} else {

    ?>

        <h1>Ingrese los euros a convertir:</h1>
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