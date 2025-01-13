<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 26</title>
    </head>

    <body>
        <?php

        $empleado1 = 5100;
        $empleado2 = 4500;
        $empleado3 = 4700;

        $incr1 = ($empleado1 * 13) / 100;
        $incr2 = ($empleado2 * 26) / 100;
        $incr3 = ($empleado3 * 39) / 100;

        $final1 = $empleado1 + $incr1;
        $final2 = $empleado2 + $incr2;
        $final3 = $empleado3 + $incr3;
        
        echo "El empleado 1 pasa de tener $empleado1 euros a $final1 euros despues del incremento del 13%.<br><br>";

        echo "El empleado 2 pasa de tener $empleado2 euros a $final2 euros despues del incremento del 26%.<br><br>";

        echo "El empleado 3 pasa de tener $empleado3 euros a $final3 euros despues del incremento del 39%.<br><br>";

        ?>
        </body>
        </html>