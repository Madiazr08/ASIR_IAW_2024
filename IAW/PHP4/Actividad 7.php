<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>

    <h2>Mayúsculas y Minúsculas</h2>

    <?php

$cadena1 = "Esto va ser las mayúsculas";
$cadena2 = "Y ESTAS SON LAS MINUSCULAS";

$may = mb_convert_case($cadena1, MB_CASE_UPPER, "UTF-8");
$min = mb_convert_case($cadena2, MB_CASE_LOWER, "UTF-8");

echo "$may <br>";
echo "$min";

?>

</body>
</html>