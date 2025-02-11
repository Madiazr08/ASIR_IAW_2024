<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 14</title>
    </head>
    <body>

<?php

if (isset($_GET['altura']) && isset($_GET['anchura'])){

    $altura = $_GET['altura'];
    $anchura = $_GET['anchura'];


    $area = $altura * $anchura;
    
    

    echo "<h1>Resultado de la operación:</h1>";
    echo "<p>Si la altura es $altura y la achura es $anchura:</p>";
    echo "<p>El area es: $area </p>";
} else {

    ?>

        <h1>Ingresa las medidas:</h1>
        <form action="" method="GET">
        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" required><br><br>

        <label for="anchura">Anchura:</label>
        <input type="number" name="anchura" id="anchura" required><br><br>

        <input type="submit" value="Calcular Área">
    </form>
    </body>
    </html>
    <?php
} 
?>