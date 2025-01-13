<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 23</title>
    </head>

    <body>
        <?php
        $producto = 50;
        $descuento = 0.1;
        $prdesc = $producto * $descuento;
        $prfin = $producto - $prdesc;
        
        echo "Si el producto valía $producto y le descontamos el 10%, el total sería $prfin.<br><br>";

        ?>
        </body>
        </html>