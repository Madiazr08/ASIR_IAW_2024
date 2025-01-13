<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 24</title>
    </head>

    <body>
        <?php
       
       $total = 18;
       $hombres = 17;
       $mujeres = 1;

       $porcenth = ($hombres * 100) / $total;
       $porcentm = ($mujeres * 100) / $total;
        

        
        echo "En la clase, que somos $total personas, hay $porcenth% de hombres y $porcentm% de mujeres (?).";

        ?>
        </body>
        </html>