<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>
<body>

<h2>Cadena aleatoria</h2>

<?php


$cadena = 'abcdefghijklmnopqrstuvwxyz0123456789';
$random = str_shuffle($cadena);

echo $random;
?>

</body>
</html>

