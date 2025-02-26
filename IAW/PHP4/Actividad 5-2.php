<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>

    <h1>Conversor de dinero:</h1>
        <form action="" method="GET">
        <label for="num1">Cantidad a recibir:</label>
        <input type="number" name="num1" id="num1" required><br><br>


        <label for="mon">Que moneda quieres convertir a euro: </label>
        <select name="mon" id="mon" required>
            <option value="£">Libra</option>
            <option value="$">Dolar</option>
            <option value="¥">Yen</option>
        </select>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    $mon = $_GET['mon'] ?? 0;


function dinero($num1, $mon) {
    switch ($mon) {
        case '£':
            return $num1 * 1.22;
        case '$':
            return $num1 * 0.75;
        case '¥':
            return $num1 * 0.009;
        default:
            return "X";
    }
}

$resultado = dinero($num1, $mon);

echo "La conversión son $resultado €";

?>


</body>
</html>