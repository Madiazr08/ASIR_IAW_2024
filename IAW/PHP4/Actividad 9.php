<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>

    <h2>Reemplazar texto PHP</h2>

<?php
$cadena = "Le digo hola y ella me dice goodbye";

$texto = "goodbye";

$reemplazo = "bien adios";

$nuevafrase = str_replace($texto, $reemplazo, $cadena);

echo $nuevafrase;
?>

</body>
</html>