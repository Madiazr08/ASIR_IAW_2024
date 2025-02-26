<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>

    <h2>Buscar en cadena</h2>

<?php
$cadena = 'La bebesita bebe lean';
$enc  = 'lean';
$busc = strpos($cadena, $enc);


if (empty($busc)) {
    echo "La cadena '$enc' no fue encontrada en la cadena '$cadena'";
} else {
    echo "La cadena '$enc' fue encontrada en la cadena '$cadena'";
    echo " y existe en la posición $busc";
}
?>


</body>
</html>