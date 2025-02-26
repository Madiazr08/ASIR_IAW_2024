<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6</title>
    </head>
    <body>

    <h1>¿Es Primo?</h1>
        <form action="" method="GET">
        <label for="num1">Inserta Número</label>
        <input type="number" name="num1" id="num1" required><br><br>


        <input type="submit" value="Calcular">
    </form>
<?php

    $num1 = $_GET['num1'] ?? 0;

    if(primo($num1)){
        echo 'El número es primo';
    }else{
        echo 'El número no es primo';
    }
    
    function primo($num1)
    {

        for ($i = 2; $i < $num1; $i++) {
            
            if (($num1 % $i) == 0) {             
                return false;
            }  
        }
        return true;
    }
    

?>


</body>
</html>