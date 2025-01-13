<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 35</title>
</head>
<body>
    <?php 
$nota_1er_trimestre = 8;  
$nota_2do_trimestre = 7;  
$nota_3er_trimestre = 9;  

$porcentaje_1er_trimestre = 0.20;
$porcentaje_2do_trimestre = 0.50;
$porcentaje_3er_trimestre = 0.30;


$nota_final = ($nota_1er_trimestre * $porcentaje_1er_trimestre) + ($nota_2do_trimestre * $porcentaje_2do_trimestre) + ($nota_3er_trimestre * $porcentaje_3er_trimestre);

echo "La nota final del alumno es: $nota_final";
?>
</body>
</html>