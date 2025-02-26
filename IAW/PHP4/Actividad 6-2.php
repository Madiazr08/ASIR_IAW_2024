<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6</title>
    </head>
    <body>

    <h1>Jornal Diario</h1>
        <form action="" method="GET">
        <label for="num1">Horas trabajadas.</label>
        <input type="number" name="num1" id="num1" required><br><br>


        <label for="mon">Turno </label>
        <select name="mon" id="mon" required>
            <option value="d">Diurno</option>
            <option value="n">Nocturno</option>
            <option value="fd">Festivo Diurno</option>
            <option value="fn">Festivo Nocturno</option>

        </select>

        <input type="submit" value="Calcular">
    </form>
<?php


    $num1 = $_GET['num1'] ?? 0;
    $mon = $_GET['mon'] ?? 0;


function jornal($num1, $mon) {
    switch ($mon) {
        case 'd':
            return $num1 * 10;
        case 'n':
            return $num1 * 13.5;
        case 'fd':
            return $num1 * 10 * 1.1;
        case 'fn':
            return $num1 * 13 * 1.15;
        default:
            return "X";
    }
}

$resultado = jornal($num1, $mon);

echo "El jornal son $resultado €";

?>


</body>
</html>