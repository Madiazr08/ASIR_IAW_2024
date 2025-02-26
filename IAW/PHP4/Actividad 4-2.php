<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>

    <h1>Calculadora:</h1>
        <form action="" method="GET">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="ope">Selecciona la operación:</label>
        <select name="ope" id="ope" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="mult">Multiplicación</option>
            <option value="div">División</option>
        </select>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    $ope = $_GET['ope'] ?? 0;


function calcular($num1, $num2, $ope) {
    switch ($ope) {
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'mult':
            return $num1 * $num2;
        case 'div':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "No se puede dividir entre 0";
            }
        default:
            return "La operación no es válida.";
    }
}

$resultado = calcular($num1, $num2, $ope);

echo $resultado;

?>


</body>
</html>