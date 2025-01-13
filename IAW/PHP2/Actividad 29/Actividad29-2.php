<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 29</title>
</head>
<body>
    <?php 
        $compra = 110;
        $mes = "octubre";
        $desc = $compra * 15 / 100;
        $compradesc =  $compra - $desc;

        echo "Si la compra son $compra euros en $mes, la tienda te hace un descuento de $desc euros y tienes que pagar $compradesc euros";
    ?>
</body>
</html>