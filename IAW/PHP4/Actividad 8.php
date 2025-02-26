<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>

    <h2>Cuantos carácteres hay?</h2>

    <?php

$cadena1 = "Esto va ser las mayúsculas";

$prueba = mb_strlen($cadena1);

echo "Los carácteres de la cadena son $prueba";

?>

</body>
</html>